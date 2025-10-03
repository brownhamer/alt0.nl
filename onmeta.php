<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
startHtmlPage('Alt0.nl &rarr; On AI');
#============================================================================ ?>

<h1><a href="<?php echo $alt0_url; ?>"><span class="link-button">Alt0.nl</span></a></h1>
<h3><?php	echo oneLiner(); ?></h3>
<div id="spacer">&nbsp;</div>

<table id="alternatives"><tr><td>
<div id="choices"><h5>On Meta:</h5>
<ul>
  <li><a href="https://tweakers.net/nieuws/203926/meta-krijgt-265-miljoen-euro-avg-boete-om-gescrapete-data-van-533-miljoen-users.html">Meta krijgt 265 miljoen euro AVG-boete om gescrapete data van 533 miljoen users</a></li>
  <li><a href="https://tweakers.net/nieuws/211816/noorse-privacywaakhond-geeft-meta-88000-euro-boete-per-dag-voor-overtreden-avg.html">Noorse privacywaakhond geeft Meta 88.000 euro boete per dag voor overtreden AVG</a></li>
  <li><a href="https://tweakers.net/nieuws/235760/meta-had-vanaf-september-inzage-in-surfgedrag-van-android-gebruikers.html">Meta had vanaf september inzage in surfgedrag van Android-gebruikers</a></li>
  <li><a href="https://tweakers.net/nieuws/237058/meta-moet-duitser-5000-euro-schadevergoeding-betalen-vanwege-illegale-tracking.html">Meta moet Duitser 5000 euro schadevergoeding betalen vanwege illegale tracking</a></li>
</ul>
</div>
</td><td>
<?php #=========================================================================
# No right side content yet
#echo "<div id=\"links\"><h5>Alternatives listings:</h5><div>\n";
#echo linksList('alternatives', NULL);
#echo "</div></div>\n";

echo "</td></tr></table>\n";

endHtmlPage();
#============================================================================ ?>
