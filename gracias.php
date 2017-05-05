<?php
ini_set('display_errors', 0);
error_reporting(0);

include_once ("includes/config.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo URL_SITE; ?>">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>El Derecho a la Vivienda #NoSeVende - Amnistía Internaciona</title>
    <meta name="description" content="Entre 2011 y 2013 se vendieron en Madrid viviendas sociales habitadas a fondos de inversión. Firma para que ninguna familia pierda su hogar.">
	<link rel="canonical" href="<?php echo URL_SITE; ?>gracias/" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <link rel="icon" href="favicon.ico?v=4" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>gracias/" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="El Derecho a la Vivienda #NoSeVende" />
    <meta property="og:description" content="Entre 2011 y 2013 se vendieron en Madrid viviendas sociales habitadas a fondos de inversión. Firma para que ninguna familia pierda su hogar." />
    <meta property="og:site_name" content="Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>gracias/" />
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

<?php
//Tienen activa la cookie de aceptar cookies: cookieAlert3 = "1"
if (isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1) {

    //VIENE DE GOOGLE anuncios DISPLAY
    if($_SESSION['pk_campaign'] == 'anunggl_display' || $_SESSION['utm_campaign'] == 'anunggl_display') {
?>

<!-- Instrucciones- Pixel_firmas.txt -->
<!-- Google Code for Pixel_firmas Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 966452768;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "gEVDCNmMmWwQoMzrzAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/966452768/?label=gEVDCNmMmWwQoMzrzAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
    }

    //VIENE DE GOOGLE anuncios GRANT
    if($_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl') {
?>
<!-- Instrucciones- pixel_firmas_grant.txt -->
<!-- Google Code for pixel_firmas_grant Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 973137582;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "lfA3CIPcvnAQrs2D0AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/973137582/?label=lfA3CIPcvnAQrs2D0AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
    }
}
?>

</head>
<body class="gracias">

	<header class="clearfix">
		<div class="left">
			<a href="<?php echo URL_SITE ?>"><img src="images/logo-2x.png" alt="Amnistía Internacional"></a>
		</div><!-- left -->

		<div class="right">
			<div class="rrss">
				<ul class="clearfix">
					<li><b>Comparte:</b></li>
					<li><a data-e_c="hogaresenventa" data-e_a="gracias comp TW" data-e_l="gracias comp TW" data-shareurl="<?php echo SL_HOME_TW; ?>" data-texto="El derecho a la vivienda #NoSeVende. Firma para que ninguna familia pierda su hogar" class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>
					<li><a data-e_c="hogaresenventa" data-e_a="gracias comp FB" data-e_l="gracias comp FB" data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" data-title="El Derecho a la Vivienda #NoSeVende" data-texto="Entre 2011 y 2013 se vendieron en Madrid viviendas sociales habitadas a fondos de inversión. Firma para que ninguna familia pierda su hogar." data-imagen="<?php echo URL_SITE; ?>images/compartir-fb.jpg" data-caption="Amnistía Internacional" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
<?php
if($isMobile) {
?>
                	<li><a data-e_c="hogaresenventa" data-e_a="gracias comp WH" data-e_l="gracias comp WH" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo SL_HOME_WH; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('El derecho a la vivienda #NoSeVende. Firma para que ninguna familia pierda su hogar ' . SL_HOME_WH)?>"></a></li>
<?php
}
?>
				</ul>
			</div><!-- rrss -->

			<div class="botones-cabecera">
				<ul class="clearfix">
					<?php  /*<li><a data-e_c="hogaresenventa" data-e_a="gracias boton header firma" data-e_l="gracias boton header firma" class="btn-firma send-piwik-event" href="<?php echo URL_SITE ?>"><b>Firma</b></a></li> */ ?>
					<li><a data-e_c="hogaresenventa" data-e_a="gracias boton header socio" data-e_l="gracias boton header socio" target="_blank" class="btn-hazte-socio send-piwik-event" href="<?php echo URL_SOCIO; ?>"><b>Hazte Socio/a</b></a></li>
				</ul>
			</div><!-- botones-cabecera -->
		</div><!-- right -->
	</header>

	<section class="modulo-gracias ancla-firma">

		<div class="container">
			<div class="row">
				<div class="content-img col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<img src="images/imagen-gracias.jpg" alt="Gracias por tu firma. El derecho a la vivienda no se vende">
				</div>

				<div class="content-text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row middle center">
						<div class="col-12">
<?php
if($_GET['error_form'] == 1){
?>
		                    <h2>¡Error!</h2>
		                    <p>Lo sentimos, se ha producido un error al guardar tus datos. Por favor, inténtalo más tarde.</p>
		                    <p><a href="<?php echo URL_SITE; ?>" title="Volver a la campaña" class="">Volver</a></p>
<?php
} else {
?>
							<h2>Gracias por tu firma</h2>
							<p>Si todavía quieres ayudar más, tienes estas dos opciones:</p>
							<p>Haz un donativo y <b>recibe este cartel para que lo cuelgues en tu balcón o ventana</b>. Difundirás el mensaje de la campaña y <b>mostrarás tu apoyo a las miles de familias</b> que reivindican su derecho a la vivienda.</p>
							<a data-e_c="hogaresenventa" data-e_a="gracias boton haz donativo" data-e_l="gracias boton haz donativo" target="_blank" class="btn-big-haz-un-donativo orange-white send-piwik-event" href="<?php echo URL_DONA; ?>"><b>Haz un donativo</b></a>

							<p>Comparte entre tus contactos la campaña y harás que muchas más personas puedan conocerla. Porque si queremos que esto no vuelva a pasar, no podemos quedarnos de brazos cruzados mientras miles de familias se quedan en la calle.</p>
							<?php /*<a data-e_c="hogaresenventa" data-e_a="gracias hazte socio" data-e_l="gracias hazte socio" target="_blank" class="btn-big-hazte-socio white-orange send-piwik-event" href="<?php echo URL_SOCIO; ?>"><b>Hazte Socio/a</b></a>*/?>

								<a data-e_c="hogaresenventa" data-e_a="gracias comp TW" data-e_l="gracias comp TW" data-shareurl="<?php echo SL_HOME_TW; ?>" data-texto="El derecho a la vivienda #NoSeVende. Firma para que ninguna familia pierda su hogar" class="btn-big-general white-orange twitter-share send-piwik-event" title="Compartir en Twitter" href="#"><b>Compartir en Twitter</b></a>

								<a data-e_c="hogaresenventa" data-e_a="gracias comp FB" data-e_l="gracias comp FB" data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" data-title="El Derecho a la Vivienda #NoSeVende" data-texto="Entre 2011 y 2013 se vendieron en Madrid viviendas sociales habitadas a fondos de inversión. Firma para que ninguna familia pierda su hogar." data-imagen="<?php echo URL_SITE; ?>images/compartir-fb.jpg" data-caption="Amnistía Internacional" class="btn-big-general white-orange facebook-share send-piwik-event" href="#" title="Compartir en Facebook"><b>Compartir en Facebook</b></a>


<?php
	if($isMobile) {
?>
								<a data-e_c="hogaresenventa" data-e_a="gracias comp WH" data-e_l="gracias comp WH" class="btn-big-general white-orange send-piwik-event" data-href="<?php echo SL_HOME_WH; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('El derecho a la vivienda #NoSeVende. Firma para que ninguna familia pierda su hogar ' . SL_HOME_WH)?>" title="Compartir en Whatsapp"><b>Compartir en Whatsapp</b></a>

<?php
	}
?>



<?php
}
?>
						</div>
					</div>
				</div>
			</div><!-- /row -->
		</div>

	</section>


<?php
if($_GET['error_form'] == 1){
?>
<!-- Piwik -->
	<script type="text/javascript">
		var nuevoFirmante = <?=$_GET['s'] ? $_GET['s']:"''"; ?>;
		//alert(nuevoFirmante);
	  var _paq = _paq || [];
	  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
	  _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
	  _paq.push(["setDomains", ["*.es.amnesty.org",]]);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
		}
	  (function() {
	    var u="//estadisticas.es.amnesty.org/piwik/";
	    _paq.push(['setTrackerUrl', u+'piwik.php']);
	    _paq.push(['setSiteId', '1']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<noscript><p><img src="//estadisticas.es.amnesty.org/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
	<!-- End Piwik Code -->

<?php
} else {
?>
<!-- Piwik -->
	<script type="text/javascript">
		var nuevoFirmante = <?=$_GET['s'] ? $_GET['s']:"''"; ?>;
		//alert(nuevoFirmante);
	  var _paq = _paq || [];
	  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
	  _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
	  _paq.push(["setDomains", ["*.es.amnesty.org",]]);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  _paq.push(['trackGoal', 51]);
		_paq.push(["trackGoal", 6]);
		_paq.push(["trackGoal", 33]);
		if (nuevoFirmante==2) {
	   	_paq.push(["trackGoal", 8]);
	   	_paq.push(["trackGoal", 52]);
		}
	  (function() {
	    var u="//estadisticas.es.amnesty.org/piwik/";
	    _paq.push(['setTrackerUrl', u+'piwik.php']);
	    _paq.push(['setSiteId', '1']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<noscript><p><img src="//estadisticas.es.amnesty.org/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
	<!-- End Piwik Code -->

<?php
}
?>
	<!-- Botón firma Mobile  -->
	<!--<div class="boton-fixed-firma">
		<a data-e_c="hogaresenventa" data-e_a="gracias boton footer firma" data-e_l="gracias boton footer firma" class="btn-big-general firma send-piwik-event" href="<?php echo URL_SITE ?>"><b>Firma</b></a>
	</div>-->


	<!-- Footer -->
    <?php
	    $no_incluir_piwik = true;
	    include "includes/footer.php";
    ?>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>

    <!-- pixel google  -->
    <?php include ("includes/pixelret.php"); ?>

</body>
</html>
