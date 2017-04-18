<?php include_once ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>El Derecho a la Vivienda #NoSeVende - Amnistía Internacional</title>
    <meta name="description" content="En 2012 se vendieron en Madrid viviendas sociales con gente dentro a fondos de inversión. Firma para que ninguna familia pierda su hogar.">
	<link rel="canonical" href="<?php echo URL_SITE; ?>elena" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw-caso-elena.png" />
    <link rel="icon" href="favicon.ico?v=4" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>elena" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="El Derecho a la Vivienda #NoSeVende" />
    <meta property="og:description" content="En 2012 se vendieron en Madrid viviendas sociales con gente dentro a fondos de inversión. Firma para que ninguna familia pierda su hogar." />
    <meta property="og:site_name" content="Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb-caso-elena.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>elena" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="El Derecho a la Vivienda #NoSeVende" />
    <meta name="twitter:description" content="En 2012 se vendieron en Madrid viviendas sociales con gente dentro a fondos de inversión. Firma para que ninguna familia pierda su hogar." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw-caso-elena.png" />
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
            <button data-e_c="Elena - Caso" data-e_a="stop" data-e_l="Saltar video" type="button" class="close send-piwik-event" data-dismiss="modal" aria-hidden="true">
              <span aria-hidden="true">Saltar video</span>
            </button>

            <div class="video-container">
                <div id="video" data-ytidvideo="oXSdmIyrsW8"></div>
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
					<li><a data-e_c="Elena - Header" data-e_a="share" data-e_l="Twitter" data-shareurl="<?php echo URL_SITE . TRACK_TW_UTM; ?>" data-texto="El derecho a la vivienda #NoSeVende. Firma para que ninguna familia pierda su hogar" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>

					<li><a data-e_c="Elena - Header" data-e_a="share" data-e_l="Facebook" data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" data-title="El derecho a la vivienda #NoSeVende" data-texto="En 2012 se vendieron en Madrid viviendas sociales con gente dentro a fondos de inversión. Firma para que ninguna familia pierda su hogar" data-imagen="<?php echo URL_SITE; ?>images/compartir-fb.png" data-caption="Amnistía Internacional" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
<?php
if($isMobile) {
?>
                	<!--<li><a data-e_c="Elena - Header" data-e_a="share" data-e_l="Whatsapp" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo URL_SITE . TRACK_WH_UTM; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('El derecho a la vivienda #NoSeVende. Firma para que ninguna familia pierda su hogar ')?>"></a></li>-->
<?php
}
?>
				</ul>
			</div><!-- rrss -->

			<div class="botones-cabecera">
				<ul class="clearfix">
					<li><a data-e_c="Elena - Header" data-e_a="click" data-e_l="Firma" class="btn-firma firma send-piwik-event" href="#"><b>Firma</b></a></li>
					<li><a data-e_c="Elena - Header" data-e_a="click" data-e_l="Hazte socio" target="_blank" class="btn-hazte-socio send-piwik-event" href="<?php echo URL_SOCIO; ?>"><b>Hazte Socio/a</b></a></li>
				</ul>
			</div><!-- botones-cabecera -->
		</div><!-- right -->
	</header>

	<section class="modulo-interior ancla-firma">

		<div class="container">
			<div class="row">
				<div class="content-fixed col-xs-12 col-sm-12 col-md-6 col-lg-6" >
					<div class="imagen">

						<img src="images/elena.jpg" alt="Elena">
						<a data-e_c="Elena - Caso" data-e_a="play" data-e_l="Ver video" href="#" data-toggle="modal" data-target="#videoModal" class="send-piwik-event">
						<div class="row middle center">
							<div class="col-12">
								<span class="fa fa-play-circle"></span>
							</div>
						</div>
						</a>

					</div>
				</div>

				<div class="content-text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row">
						<div class="col-12">

							<h1>Su derecho #NoSeVende</h1>
							<p>Elena y sus tres hijos vivían en una vivienda social hasta que el ayuntamiento de Madrid la vendió a un fondo de inversión, sin contar con ella e incumpliendo la ley. Elena tiene derecho a una vivienda digna.</p>


							<ul class="clearfix">
								<li><b>Comparte:</b></li><!--redes caso interior-->
								<li><a data-e_c="Elena - Caso" data-e_a="share" data-e_l="Twitter" data-shareurl="<?php echo URL_SITE . 'elena' . TRACK_TW_UTM; ?>" data-texto="" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>

								<li><a data-e_c="Elena - Caso" data-e_a="share" data-e_l="Facebook" data-shareurl="<?php echo URL_SITE . 'elena' . TRACK_FB_UTM; ?>" data-title="" data-texto="" data-imagen="<?php echo URL_SITE; ?>images/compartir-fb-caso-elena.png" data-caption="Amnistía Internacional" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
<?php
if($isMobile) {
?>
                				<!--<li><a data-e_c="Elena - Caso" data-e_a="share" data-e_l="Whatsapp" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo URL_SITE . 'elena' . TRACK_WH_UTM ; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('')?>"></a></li>-->
<?php
}
?>
							</ul>

							<div class="formulario-general">
								<h1>El Derecho a la vivienda #NoSeVende</h1>
								<p>Firma <a data-e_c="Elena - Caso" data-e_a="click" data-e_l="Petición" href="#" title="esta petición" data-toggle="modal" data-target="#modal-peticion" class="send-piwik-event"><b>esta petición</b></a> al Ayuntamiento y a la  Comunidad de Madrid para que den una alternativa a las familias vendidas.</p>

								<?php include ('includes/form-firma.php') ?>
							</div>

						</div>
					</div>
				</div>
			</div><!-- /row -->
		</div>

	</section>

	<!-- Botón firma Mobile  -->
	<div class="boton-fixed-firma">
		<a data-e_c="Elena - Footer" data-e_a="click" data-e_l="Firma" class="btn-big-general firma send-piwik-event" href="#"><b>Firma</b></a>
	</div>

	<!-- Footer -->
    <?php include "includes/footer.php";?>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>

    <!-- pixel google  -->
    <?php //include ("includes/pixelret.php"); ?>

</body>
</html>