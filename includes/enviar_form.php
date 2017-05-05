<?php

if($_POST['guardar_form']) {

	// config
	include_once('config.php');
	// BD
	include_once('connect.php');
	// API
	include_once('api.php');

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
	$query_pais = "SELECT nombre FROM paises WHERE id_mp=".$pais_id;
	$result = mysqli_query( $id_connect, $query_pais ); //or die( 'Error: ' . mysqli_connect_errno() );
	$pais = $result->fetch_array(MYSQLI_ASSOC);
	$pais_def = $pais["nombre"];
	$caso = $_POST['caso'];

	// Guardar en BD
	try {
		//nuev@s interesad@s
		$socio = es_interesado($email);

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
					'".$pais_def."',
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
					'',
					'0',
					'0',
					CURRENT_TIMESTAMP,
					NULL,
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

		if($caso){
			header("location: ../gracias?s=".$socio."&c=".$caso);
		} else {
			header("location: ../gracias?s=".$socio);
		}

	} catch(Exception $e) {
		header("location: ../gracias?error_form=1");
	}

}
?>
