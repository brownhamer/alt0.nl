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
  <li><span class="del">Google</span> &rarr; <b><a href="https://start.duckduckgo.com/">DuckDuckGo</a></b></li>
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
