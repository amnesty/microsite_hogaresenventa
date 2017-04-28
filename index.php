<?php include_once ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo URL_SITE; ?>">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>El Derecho a la Vivienda #NoSeVende - Amnistía Internacional</title>
    <meta name="description" content="Entre 2011 y 2013 se vendieron en Madrid viviendas sociales habitadas a fondos de inversión. Firma para que ninguna familia pierda su hogar.">
	<link rel="canonical" href="<?php echo URL_SITE; ?>" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <link rel="icon" href="favicon.ico?v=4" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="El Derecho a la Vivienda #NoSeVende" />
    <meta property="og:description" content="Entre 2011 y 2013 se vendieron en Madrid viviendas sociales habitadas a fondos de inversión. Firma para que ninguna familia pierda su hogar." />
    <meta property="og:site_name" content="Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="El Derecho a la Vivienda #NoSeVende" />
    <meta name="twitter:description" content="Entre 2011 y 2013 se vendieron en Madrid viviendas sociales habitadas a fondos de inversión. Firma para que ninguna familia pierda su hogar." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="El Derecho a la Vivienda #NoSeVende - Amnistía Internacional" />
    <!--.Open Graph-->


	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900" rel="stylesheet">

	<!-- CSS Bootstrap v4.0.0 -->
	<link href="css/bootstrap-flex.css" rel="stylesheet">

	<!-- CSS Reticula -->
	<link href="css/reticula.css" rel="stylesheet">

	<!-- cli-style.css -->
    <link href="css/cli-style.css" rel="stylesheet">

	<!-- CSS Style.css -->
	<link href="style.css" rel="stylesheet">

	<!-- hover.min.css -->
	<link href="css/hover.min.css" rel="stylesheet">



	<!-- Font awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- jQuery 1.12.4 -->
	<script src="js/jquery.min.js"></script>
	<script src="js/TweenMax.min.js"></script>

	<!-- tether.min Obligatorio para BS tooltip -->
	<script src="js/tether.min.js"></script>

	<!-- Bootstrap v4.0.0 -->
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.easing.min.js"></script>

	<!-- cookielawinfo.js -->
    <script src="js/cookielawinfo.js"></script>

	<!-- Init -->
	<script src="js/init.js"></script>

	<script type="text/javascript">
<?php
if($isMobile) {
?>
        var isMobile = 1;
<?php
}else {
?>
        var isMobile = 0;
<?php
}
?>
		console.log("> Resolución: " + $(window).width() + 'x' + $(window).height());
		console.log("> Mobile: " + isMobile);

	</script>

</head>
<body class="home">

	<!-- Modal Video - La Campaña sale a la calle -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button data-e_c="hogaresenventa" data-e_a="home boton saltar video" data-e_l="home boton saltar video" type="button" class="close send-piwik-event" data-dismiss="modal" aria-hidden="true">
              <span aria-hidden="true">Saltar video</span>
            </button>

            <div class="video-container">
                <div id="video" data-ytidvideo="FW_h3kG9mi4"></div>
            </div>

          </div>
        </div>
      </div>
    </div>

	<!-- Modal Carta petición -->
    <?php include "includes/peticion.php";?>

	<header class="clearfix">
		<div class="left">
			<a href="<?php echo URL_SITE; ?>"><img src="images/logo-2x.png" alt="Amnistía Internacional"></a>
		</div><!-- left -->

		<div class="right">
			<div class="rrss">
				<ul class="clearfix">
					<li><b>Comparte:</b></li>
					<li><a data-e_c="hogaresenventa" data-e_a="home comp TW" data-e_l="home comp TW" data-shareurl="<?php echo SL_HOME_TW; ?>" data-texto="El derecho a la vivienda #NoSeVende. Firma para que ninguna familia pierda su hogar" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>

					<li><a data-e_c="hogaresenventa" data-e_a="home comp FB" data-e_l="home comp FB" data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" data-title="El Derecho a la Vivienda #NoSeVende" data-texto="Entre 2011 y 2013 se vendieron en Madrid viviendas sociales habitadas a fondos de inversión. Firma para que ninguna familia pierda su hogar." data-imagen="<?php echo URL_SITE; ?>images/compartir-fb.jpg" data-caption="Amnistía Internacional" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
<?php
if($isMobile) {
?>
                	<li><a data-e_c="hogaresenventa" data-e_a="home comp WH" data-e_l="home comp WH" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo SL_HOME_WH; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('El derecho a la vivienda #NoSeVende. Firma para que ninguna familia pierda su hogar ' . SL_HOME_WH)?>"></a></li>
<?php
}
?>
				</ul>
			</div><!-- rrss -->

			<div class="botones-cabecera">
				<ul class="clearfix">
					<li><a data-e_c="hogaresenventa" data-e_a="home boton header firma" data-e_l="home boton header firma" class="btn-firma firma send-piwik-event" href="#"><b>Firma</b></a></li>
					<li><a data-e_c="hogaresenventa" data-e_a="home boton header socio" data-e_l="home boton header socio" target="_blank" class="btn-hazte-socio send-piwik-event" href="<?php echo URL_SOCIO; ?>"><b>Hazte Socio/a</b></a></li>
				</ul>
			</div><!-- botones-cabecera -->
		</div><!-- right -->
	</header>

	<section class="modulo-1-firma ancla-firma">

		 

		<div class="container">
			<div class="row">
				<div class="content-img col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<img src="images/modulo-1-firma.jpg" alt="De 2011 a 2013, el Ayuntamiento y la Comunidad de Madrid vendieron casi 5.000 viviendas sociales a fondos de inversión, sin contar con las personas que vivían en ellas. Prometieron que todo seguiría igual, pero desde entonces algunas familias han perdido sus viviendas y otras están a punto de perderlas porque no pueden hacer frente a las nuevas condiciones. Mientras, las autoridades se han desentendido del problema.¿Dónde ha quedado su derecho a una vivienda digna? Exige a nuestro lado que lo recuperen.">

					<div class="box-fijo">
						<p>De 2011 a 2013, el Ayuntamiento y la Comunidad de Madrid vendieron casi 5.000 viviendas sociales a fondos de inversión, sin contar con las personas que vivían en ellas. Prometieron que todo seguiría igual, pero desde entonces algunas familias han perdido sus viviendas y otras están a punto de perderlas porque no pueden hacer frente a las nuevas condiciones. Mientras, las autoridades se han desentendido del problema.</p>
						<p><strong>¿Dónde ha quedado su derecho a una vivienda digna? Exige a nuestro lado que lo recuperen.</strong></p>
					</div>
				</div>

				<div class="content-text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row middle center">
						<div class="col-12">
							<h1>El Derecho a la vivienda #NoSeVende</h1>
							<p>Firma <a data-e_c="hogaresenventa" data-e_a="home petición" data-e_l="home petición" href="#" class="send-piwik-event" title="Firma esta petición" data-toggle="modal" data-target="#modal-peticion"><b>esta petición</b></a> al Ayuntamiento y a la Comunidad de Madrid para que protejan a las personas afectadas por la venta de viviendas sociales.</p>			
<?php
$id_formulario = "formFirma";
include ('includes/form-firma.php');
?>
						</div>
					</div>
				</div>
			</div><!-- /row -->
		</div>

		<a id="scroll-raton" href="#modulo-2">
			<div class="scroll-downs-raton">
				<div class="mousey-raton">
					<div class="scroller-raton"></div>
				</div>
			</div>
		</a>

	</section>

	<section id="modulo-2" class="modulo-2-su-derecho">
		<div class="container">
			<div class="row">
				<div class="div1-2 content-text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row middle center">
						<div class="col-12">
							<h1>Su derecho #NoSeVende</h1>
							<p>Paula y sus tres hijos vivían en una vivienda social hasta que la Comunidad de Madrid la vendió a un fondo de inversión sin contar con ella. Cuando pidió ayuda, las autoridades se desentendieron porque la vivienda había dejado de ser pública. <br/>Finalmente, acabó perdiendo su vivienda.<p>
							<p>Paula tiene derecho a una vivienda digna.</p>
							<div class="botones">
								<a class="btn-big-general orange-white" href="paula/"><b>Firma por Paula</b></a>
							</div>
							<br/>
							<p>Lucía y su hija de 7 años viven en una vivienda social desde 2012. Un día escuchó por el barrio que la Comunidad de Madrid había vendido su casa a un fondo de inversión. Los rumores eran ciertos. La reducción del alquiler que le concedieron por su incapacidad total se esfumó porque su vivienda ya no era pública.</p>
							<p>Lucía y su hija podrían quedarse en la calle.<p>
							<div class="botones">
								<a class="btn-big-general white-orange" href="lucia/"><b>Firma por Lucía</b></a>
							</div>
						</div>
					</div>
				</div>

				<div class="div2-2 content-img col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<img src="images/modulo-2-su-derecho-v2.jpg" alt="Su derecho no se vende. Firma por Paula">
				</div>
			</div><!-- /row -->
		</div>
	</section>

	<section class="modulo-3-colabora">
		<div class="container">
			<div class="row">
				<div class="content-img col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<img src="images/modulo-3-colabora.jpg" alt="El derecho a la vivienda no se vende. Colabora con la ">
				</div>

				<div class="content-text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row middle center">
						<div class="col-12">
							<h1>Colabora con la campaña</h1>
							<p>¡Usemos nuestra casa para defender nuestro derecho a la vivienda! Haz un donativo y recibirás en tu casa un cartel o una pegatina como la de la imagen para que lo coloques donde quieras. Tú eliges el formato y el idioma. Podrás difundir la campaña y mostrar tu apoyo a familias como la de Paula.</p>

							<a data-e_c="hogaresenventa" data-e_a="home boton haz donativo" data-e_l="home boton haz donativo" target="_blank" class="btn-big-haz-un-donativo orange-white send-piwik-event" href="<?php echo URL_DONA; ?>"><b>Haz un donativo</b></a>

							<p>Y si quieres dar un paso más y defender cada día el derecho a la vivienda, únete a Amnistía Internacional. Nuestra mejor compañía en esta lucha eres tú.</p>

							<a data-e_c="hogaresenventa" data-e_a="home boton socio" data-e_l="home boton socio" target="_blank" class="btn-big-hazte-socio white-orange send-piwik-event" href="<?php echo URL_SOCIO; ?>"><b>Hazte Socio/a</b></a>
						</div>
					</div>
				</div>
			</div><!-- /row -->
		</div>
	</section>

<?php
/*
	<section class="modulo-4-campana">
		<div class="container">
			<div class="row">
				<div class="div1-1 content-text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row middle center">
						<div class="col-12">
							<h1>La campaña sale a la calle</h1>
							<p>Llenamos las calles de Madrid con carteles que vendían algo más que una vivienda. Unos carteles que generan curiosidad e incredulidad a todo el que los encuentra. ¿Quieres ver sus reacciones?</p>

							<a data-e_c="hogaresenventa" data-e_a="home boton ver video" data-e_l="home boton ver video" class="btn-big-general orange-white send-piwik-event" href="#" data-toggle="modal" data-target="#videoModal"><b>Ver video</b></a>
						</div>
					</div>
				</div>

				<div class="div2-1 content-img col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<img src="images/modulo-4-campana.jpg" alt="El derecho a la vivienda no se vende. La campaña sale a la calle">
				</div>
			</div><!-- /row -->
		</div>
	</section>
*/
?>


	<!-- Botón firma Mobile  -->
	<div class="boton-fixed-firma">
		<a data-e_c="hogaresenventa" data-e_a="home boton footer firma" data-e_l="home boton footer firma" class="btn-big-general firma send-piwik-event" href="#"><b>Firma</b></a>
	</div>

	<!-- Footer -->
    <?php include "includes/footer.php";?>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>

    <!-- pixel google  -->
    <?php include ("includes/pixelret.php"); ?>

</body>
</html>