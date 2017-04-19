<?php
//Tienen activa la cookie de aceptar cookies: cookieAlert3 = "1"
if (isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1) {

	//VIENE DE GOOGLE anuncios DISPLAY
	if($_SESSION['pk_campaign'] == 'anunggl_display' || $_SESSION['utm_campaign'] == 'anunggl_display') {
?>
	<!-- Etiqueta remarketing AI Google DISPLAY.txt -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 966452768;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/966452768/?guid=ON&amp;script=0"/>
	</div>
	</noscript>
<?php
	}
	
	//VIENE DE GOOGLE anuncios GRANT
	if($_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl') {
?>
	<!-- Etiqueta remarketing AI Google GRANT.txt -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 973137582;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/973137582/?guid=ON&amp;script=0"/>
	</div>
	</noscript>
<?php
	}
}
?>
