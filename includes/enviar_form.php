<?php

if($_POST['guardar_form']) {

	// config
	include_once('config.php');
	// BD
	include_once('connect.php');
	// API
	//include_once('api.php');
	include_once('api2.php');

	extract($_POST);

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$pais_id = $_POST['pais'];
	$politika = $_POST['politica'];
	$origen = $_POST['origen'];
	$campanya = $_POST['campanya'];
	// IP
	$ip = $_SERVER['REMOTE_ADDR'];
	if(!$ip || $ip == ''){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// User Agent
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	// Política
	if($politika == 'on'){
		$masinfo = 1;
	}
	else {
		$masinfo = 0;
	}
	// País
	$query_pais = "SELECT ISO_Country_es AS nombre, IdWeb AS siglas FROM correos.countries WHERE IdMailSolutions=".$pais_id;
	$result = mysqli_query( $id_connect, $query_pais ); //or die( 'Error: ' . mysqli_connect_errno() );
	$pais = $result->fetch_array(MYSQLI_ASSOC);
	$pais_nombre = $pais["nombre"];
	$pais_siglas = $pais["siglas"];
	$caso = $_POST['caso'];

	// Guardar en BD
	try {

		// Ver si existe en la BD
		$query_existe = "SELECT * FROM `".$tabla."` WHERE email='".$email."' AND accion='espana_may17'";
		$result = mysqli_query( $id_connect, $query_existe ); //or die( 'Error: ' . mysqli_connect_errno() );
		$existe = $result->fetch_array(MYSQLI_ASSOC);

		//nuev@s interesad@s
		$socio = es_interesado($email);

		if(!isset($existe)) {

				$query = "INSERT INTO `".$tabla."` (
						`id`,
						`accion`,
						`nombre`,
						`apellidos`,
						`apellido2`,
						`dni`,
						`poblacion`,
						`provincia`,
						`pais`,
						`email`,
						`telefono`,
						`nif`,
						`masinfo`,
						`masinfoval`,
						`rau`,
						`rauval`,
						`socio`,
						`fecha`,
						`accion2`,
						`ip`,
						`origen`,
						`origen_piwik`,
						`fax_enviado`,
						`en_ev`,
						`en_ev_firma`,
						`pais_id`,
						`provincia_id`,
						`version_movil`,
						`datos_firma_rapida`,
						`mensaje`,
						`user_agent`)
					VALUES (
							NULL,
							'espana_may17',
							'".$nombre."',
							'".$apellidos."',
							'',
							'',
							'',
							'',
							'".$pais_nombre."',
							'".$email."',
							'".$telefono."',
							'',
							".$masinfo.",
							'0',
							'0',
							'0',
							".$socio.",
							CURRENT_TIMESTAMP,
							'',
							'".$ip."',
							'".$origen.":".$campanya."',
							'".$origen.":".$campanya."',
							'0',
							'0',
							CURRENT_TIMESTAMP,
							'".$pais_siglas."',
							NULL,
							'0',
							'0',
							'',
							'".$user_agent."'
						)";

				$dummy = mysqli_query( $id_connect, $query ); //or die( 'Error: ' . mysqli_connect_errno() );
				mysqli_close($id_connect);

				// fichero texto
				/*$now = date("Y-m-d h:i:sa");
				$txt = $nombre."\t".$apellidos."\t".$email."\t".$telefono."\t".$pais_def."\t".$masinfo."\t".$origen.":".$campanya."\t".$ip."\t".$socio."\t".$now."\t".$user_agent."\n";
				$myfile = fopen("file.txt", "a");
				fwrite($myfile, $txt);
				fclose($myfile);*/

				//$token = get_token();
				$product_id = get_product_by_productcode("pai_espana_may17")[0]["id"];
				$member_id = get_member_by_email($email)[0]["id"];

				// si no existe el member, lo creamos
				if(!isset($member_id)){
						$member = post_member_ai($email, $nombre, $apellidos, $telefono, $pais_siglas, $pais_nombre);
						$member_id = $member['id'];
						post_member_experian($member_id, $nombre, $apellidos, $telefono, $pais_siglas, $pais_nombre);
				}

				echo $member_id." - ".$product_id;
				$purchase = get_purchase_by_member_product($product_id, $member_id);

				// si no existe la compra, la creamos
				if($purchase["count"] == 0){
						$purchase = post_purchase_ai($member_id, $product_id);
						$purchase_id = $purchase["id"];
						post_purchase_experian($purchase_id, $member_id, $product_id);
				} else {
					$purchase_id = $purchase["results"][0]["id"];
				}
		}

		if($caso){
			header("location: ../gracias/?s=".$socio."&c=".$caso);
		} else {
			header("location: ../gracias/?s=".$socio);
		}

	} catch(Exception $e) {
		header("location: ../gracias/?error_form=1");
	}


}
?>
