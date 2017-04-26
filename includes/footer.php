<footer id="footer" class="clearfix">
  <div class="container">
    <ul class="links clearfix">
      <li><b>Amnistía Internacional 2017</b></li>
    </ul>
  </div>
</footer>
<?php
if( isset($no_incluir_piwik) && $no_incluir_piwik == false) {
?>
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
}
?>
