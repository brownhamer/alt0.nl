<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
startHtmlPage('Alt0.nl &rarr; Alternatives');
#============================================================================ ?>

<h1><a href="<?php echo $alt0_url; ?>"><span class="link-button">Alt0.nl</span></a></h1>
<h3><?php
	echo oneLiner();
	if ($links_id === '') {
		echo "<br /><a href=\"".$alt0_url."?links=oneliners\">...</a>\n";
	}
?></h3>
<div id="spacer">&nbsp;</div>

<table id="alternatives"><tr><td>
<div id="choices"><h5>Mijn keuzes:</h5>
<ul>
  <li><span class="del">Maps</span> &rarr; <b><a href="https://www.comaps.app/">CoMaps</a></b> and <b><a href="https://wego.here.com/">HERE WeGo</a></b></li>
  <li><span class="del">OneDrive</span> &rarr; <b><a href="https://nextcloud.com/">NextCloud</a></b> via <b><a href="https://ocloud.de/">oCloud</a></b></li>
  <li><span class="del">Search</span> &rarr; <b><a href="https://start.duckduckgo.com/">DuckDuckGo</a></b></li>
  <li><span class="del">WhatsApp</span> &rarr; <b><a href="https://signal.org/">Signal</a></b></li>
</ul>
</div>
</td><td>
<?php #=========================================================================
echo "<div id=\"links\"><h5>Alternatives listings:</h5><div>\n";
echo linksList('alternatives', NULL);
echo "</div></div>\n";

echo "</td></tr></table>\n";

endHtmlPage();
#============================================================================ ?>
