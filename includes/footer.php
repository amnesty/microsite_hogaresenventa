<footer class="clearfix">
  <div class="container">
    <ul class="links clearfix">
      <li><b>Amnistía Internacional 2017</b></li>
    </ul>
  </div>
</footer>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
  _paq.push(["setDomains", ["*.es.amnesty.org",]]);
  _paq.push(['trackPageView']);
  _paq.push(['trackVisibleContentImpressions']);
  _paq.push(['enableLinkTracking']);
  _paq.push(['MediaAnalytics::removePlayer', 'youtube']);
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
?>