<?php include_once ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo URL_SITE; ?>">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>El Derecho a la Vivienda #NoSeVende - Amnistía Internacional</title>
    <meta name="description" content="Firma para que se proteja el  derecho de Paula a una vivienda. Su vivienda social fue vendida a un fondo de inversión y la desahuciaron.">
	<link rel="canonical" href="<?php echo URL_SITE; ?>paula/" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw-caso-paula.png" />
    <link rel="icon" href="favicon.ico?v=4" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>paula/" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Su derecho #NoSeVende – Amnistía Internacional" />
    <meta property="og:description" content="Firma para que se proteja el  derecho de Paula a una vivienda. Su vivienda social fue vendida a un fondo de inversión y la desahuciaron." />
    <meta property="og:site_name" content="Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb-caso-paula.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>paula/" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Su derecho #NoSeVende – Amnistía Internacional" />
    <meta name="twitter:description" content="Firma para que se proteja el  derecho de Paula a una vivienda. Su vivienda social fue vendida a un fondo de inversión y la desahuciaron." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw-caso-paula.png" />
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
<body class="interior">
	<!-- Modal Video -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button data-e_c="hogaresenventa" data-e_a="paula boton saltar video" data-e_l="paula boton saltar video" type="button" class="close send-piwik-event" data-dismiss="modal" aria-hidden="true">
              <span aria-hidden="true">Saltar video</span>
            </button>

            <div class="video-container">
                <div id="video" data-ytidvideo="FW_h3kG9mi4"></div>
            </div>

          </div>
        </div>
      </div>
    </div>

	<!-- Modal Carta peticion -->
    <?php include "includes/peticion.php";?>

	<header class="clearfix">
		<div class="left">
			<a href="<?php echo URL_SITE; ?>"><img src="images/logo-2x.png" alt="Amnistía Internacional"></a>
		</div><!-- left -->

		<div class="right">
			<div class="rrss">
				<ul class="clearfix">
					<li><b>Comparte:</b></li><!--redes header-->
					<li><a data-e_c="hogaresenventa" data-e_a="paula comp paula TW" data-e_l="paula comp TW" data-shareurl="<?php echo SL_ELENA_TW; ?>" data-texto="El derecho a la vivienda de Paula #NoSeVende. Conoce su historia y firma para que le den una solución" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>

					<li><a data-e_c="hogaresenventa" data-e_a="paula comp FB" data-e_l="paula comp FB" data-shareurl="<?php echo URL_SITE . 'paula/' . TRACK_FB_UTM; ?>" data-title="Su derecho #NoSeVende – Amnistía Internacional" data-texto="Firma para que se proteja el  derecho de Paula a una vivienda. Su vivienda social fue vendida a un fondo de inversión y la desahuciaron." data-imagen="<?php echo URL_SITE; ?>images/compartir-fb-caso-paula.jpg" data-caption="Amnistía Internacional" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
<?php
if($isMobile) {
?>
                	<li><a data-e_c="hogaresenventa" data-e_a="paula comp WH" data-e_l="paula comp WH" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo SL_ELENA_WH; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('El derecho a la vivienda de Paula #NoSeVende. Conoce su historia y firma para que le den una solución '. SL_ELENA_WH)?>"></a></li>
<?php
}
?>
				</ul>
			</div><!-- rrss -->

			<div class="botones-cabecera">
				<ul class="clearfix">
					<li><a data-e_c="hogaresenventa" data-e_a="paula boton header firma" data-e_l="paula boton header firma" class="btn-firma firma send-piwik-event" href="#"><b>Firma</b></a></li>
					<li><a data-e_c="hogaresenventa" data-e_a="paula boton header socio" data-e_l="paula boton header socio" target="_blank" class="btn-hazte-socio send-piwik-event" href="<?php echo URL_SOCIO; ?>"><b>Hazte Socio/a</b></a></li>
				</ul>
			</div><!-- botones-cabecera -->
		</div><!-- right -->
	</header>

	<section class="modulo-interior ancla-firma">

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
					<div class="imagen">
						<img src="images/paula.jpg" alt="Su derecho no se vende. Firma por Paula">
						<a data-e_c="hogaresenventa" data-e_a="paula boton ver video" data-e_l="paula boton ver video" href="#" data-toggle="modal" data-target="#videoModal" class="send-piwik-event">
						<div class="row middle center">
							<div class="col-12">
								<span class="fa fa-play-circle"></span>
							</div>
						</div>
						</a>
					</div>

					<div class="left content-text">

						<div class="formulario-general mobile">
							<h1>El Derecho a la vivienda #NoSeVende</h1>
							<p>Firma <a data-e_c="hogaresenventa" data-e_a="paula petición" data-e_l="paula petición" href="#" title="esta petición" data-toggle="modal" data-target="#modal-peticion" class="send-piwik-event"><b>esta petición</b></a> al Ayuntamiento y a la Comunidad de Madrid para que protejan a las personas afectadas por la venta de viviendas sociales.</p>
<?php
	$id_formulario = "formFirmaMobile";
	include ('includes/form-firma.php');
?>
						</div>

						<h2>Su derecho #NoSeVende</h2>
						<p>Paula nunca olvidará el día que recibió las llaves de su nueva casa. Una vivienda social en alquiler que, ocho años más tarde, la Comunidad de Madrid vendió a un fondo de inversión sin ni siquiera informarle.</p>

						<p>La historia acabó en desahucio. Paula y sus hijos pequeños tuvieron que meter en cajas ocho años de su vida. No solo sus enseres, sino también todas sus ilusiones y sus recuerdos.</p>

						<p>Durante todo el proceso, Paula se ha visto totalmente ninguneada por una administración que se desentiende porque su vivienda ya no es pública. Paula no quiere que nadie le regale nada. Solo quiere una vivienda digna en la que vivir. Porque el derecho a la vivienda de Paula y de las miles de familias que se han visto en su misma situación, no se vende.</p>

						<ul class="rrss-interior clearfix">
							<li><b>Comparte:</b></li><!--redes caso interior-->
							<li><a data-e_c="hogaresenventa" data-e_a="paula comp TW" data-e_l="paula comp TW" data-shareurl="<?php echo SL_ELENA_TW; ?>" data-texto="El derecho a la vivienda de Paula #NoSeVende. Conoce su historia y firma para que le den una solución" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>

							<li><a data-e_c="hogaresenventa" data-e_a="paula comp FB" data-e_l="paula comp FB" data-shareurl="<?php echo URL_SITE . 'paula/' . TRACK_FB_UTM; ?>" data-title="Su derecho #NoSeVende – Amnistía Internacional" data-texto="Firma para que se proteja el  derecho de Paula a una vivienda. Su vivienda social fue vendida a un fondo de inversión y la desahuciaron." data-imagen="<?php echo URL_SITE; ?>images/compartir-fb-caso-paula.jpg" data-caption="Amnistía Internacional" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
	<?php
	if($isMobile) {
	?>
	        				<li><a data-e_c="hogaresenventa" data-e_a="paula comp WH" data-e_l="paula comp wh" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo SL_ELENA_WH; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('El derecho a la vivienda de Paula #NoSeVende. Conoce su historia y firma para que le den una solución '. SL_ELENA_WH)?>"></a></li>
	<?php
	}
	?>
						</ul>

					</div>

					


				</div>

				<div class="content-text right col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row">


						<div class="col-12">

							<div class="formulario-general desktop clearfix">
								<h1 class="clearfix">El Derecho a la vivienda #NoSeVende</h1>

								<p>Firma <a data-e_c="hogaresenventa" data-e_a="paula petición" data-e_l="paula petición" href="#" title="esta petición" data-toggle="modal" data-target="#modal-peticion" class="send-piwik-event"><b>esta petición</b></a> al Ayuntamiento y a la Comunidad de Madrid para que protejan a las personas afectadas por la venta de viviendas sociales.</p>

<?php
	$id_formulario = "formFirma";
	include ('includes/form-firma.php');
?>
							</div>


						</div>
					</div>
				</div>
			</div><!-- /row -->
		</div>

	</section>

	<!-- Botón firma Mobile  -->
	<div class="boton-fixed-firma">
		<a data-e_c="hogaresenventa" data-e_a="paula boton footer firma" data-e_l="paula boton footer firma" class="btn-big-general firma send-piwik-event" href="#"><b>Firma</b></a>
	</div>

	<!-- Footer -->
    <?php
    	$no_incluir_piwik = false; 
    	include "includes/footer.php";
    ?>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>

    <!-- pixel google  -->
    <?php include ("includes/pixelret.php"); ?>

</body>
</html>