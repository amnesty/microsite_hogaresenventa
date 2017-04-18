<?php
ini_set('display_errors', 0);
error_reporting(0);

include_once ("includes/config.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>Se vende – Amnistía Internacional</title>
    <meta name="description" content="Se vende...">
	<link rel="canonical" href="<?php echo URL_SITE; ?>" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <link rel="icon" href="favicon.ico?v=4" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />

    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Se vende" />
    <meta property="og:description" content="Se vende.." />
    <meta property="og:site_name" content="Se vende – Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Se vende..." />
    <meta name="twitter:description" content="Se vende..." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="Se vende – Amnistía Internacional" />
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

    //VIENE DE GOOGLE anuncios nuestros
    if($_SESSION['pk_campaign'] == 'anunggl_antevenio' || $_SESSION['utm_campaign'] == 'anunggl_antevenio') {
?>

<!-- Google Code for Lead Navidad Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 872786314;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "5_A3CLD6vWwQitOWoAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/872786314/?label=5_A3CLD6vWwQitOWoAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<?php
    }

    //VIENE DE FACEBOOK
    if($_SESSION['pk_campaign'] == 'anunfbk' || $_SESSION['utm_campaign'] == 'anunfbk') {
?>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1076898019072470');
    fbq('track', "PageView");
    fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1076898019072470&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
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
					<li><a data-e_c="Gracias - Header" data-e_a="share" data-e_l="Twitter" data-shareurl="<?php echo URL_SITE . TRACK_TW_UTM; ?>" data-texto="Se vende..." class="fa fa-twitter twitter-share send-piwik-event" title="Compartir en Twitter" href="#"></a></li>
					<li><a data-e_c="Gracias - Header" data-e_a="share" data-e_l="Facebook" data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" data-title="Se vende" data-texto="Se vende..." data-imagen="<?php echo URL_SITE; ?>images/compartir-fb.png" data-caption="Amnistía Internacional" class="fa fa-facebook facebook-share send-piwik-event" href="#" title="Compartir en Facebook"></a></li>
<?php
if($isMobile) {

?>
                	<!--<li><a data-e_c="Gracias - Header" data-e_a="share" data-e_l="Whatsapp" class="fa fa-whatsapp send-piwik-event" title="Compartir en Whatsapp" data-href="<?php echo URL_SITE; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('Se vende...')?>"></a></li>-->
<?php
}
?>
				</ul>
			</div><!-- rrss -->

			<div class="botones-cabecera">
				<ul class="clearfix">
					<?php  /*<li><a data-e_c="Gracias - Header" data-e_a="click" data-e_l="Firma" class="btn-firma send-piwik-event" href="<?php echo URL_SITE ?>"><b>Firma</b></a></li> */ ?>
					<li><a data-e_c="Gracias - Header" data-e_a="click" data-e_l="Hazte socio" target="_blank" class="btn-hazte-socio send-piwik-event" href="<?php echo URL_SOCIO; ?>"><b>Hazte Socio/a</b></a></li>
				</ul>
			</div><!-- botones-cabecera -->
		</div><!-- right -->
	</header>

	<section class="modulo-gracias ancla-firma">

		<div class="container">
			<div class="row">
				<div class="content-img col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<img src="images/imagen-gracias.jpg" alt="">
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
							<p>Muchas gracias por luchar para que se respete el derecho a una vivienda digna de cientos de familias.</p>
							<p>Si todavía quieres ayudar más tienes estás dos opciones a tu disposición.</p>
							<p>Haciendo un donativo recibirás este cartel para que lo cuelgues en tu balcón o ventana. Así podrás difundir el mensaje de la campaña y mostrar tu apoyo a las familias cuyo derecho a la vivienda se vendió.</p>
							<a data-e_c="Gracias" data-e_a="click" data-e_l="Haz un donativo" target="_blank" class="btn-big-haz-un-donativo orange-white send-piwik-event" href="<?php echo URL_DONA; ?>"><b>Haz un donativo</b></a>
							<p>O si lo deseas, puede <b>hacerte socio/a de Amnistía Internacional y defender este y otros muchos derechos</b> que se vulneran en el mundo.</p>
							<a data-e_c="Gracias" data-e_a="click" data-e_l="Hazte socio" target="_blank" class="btn-big-hazte-socio white-orange send-piwik-event" href="<?php echo URL_SOCIO; ?>"><b>Hazte Socio/a</b></a>
<?php
}
?>
						</div>
					</div>
				</div>
			</div><!-- /row -->
		</div>

	</section>

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
	  _paq.push(['trackGoal', 45]);
		_paq.push(["trackGoal", 6]);
		_paq.push(["trackGoal", 33]);
		if (nuevoFirmante==2) {
	   	_paq.push(["trackGoal", 8]);
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


	<!-- Botón firma Mobile  -->
	<!--<div class="boton-fixed-firma">
		<a data-e_c="Gracias - Footer" data-e_a="click" data-e_l="Firma" class="btn-big-general firma send-piwik-event" href="<?php echo URL_SITE ?>"><b>Firma</b></a>
	</div>-->


	<!-- Footer -->
    <?php include "includes/footer.php";?>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>

    <!-- pixel google  -->
    <?php //include ("includes/pixelret.php"); ?>

</body>
</html>