<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
startHtmlPage('Alt0.nl &rarr; Linux');
#============================================================================ ?>

<h1><a href="<?php echo $alt0_url; ?>"><span class="link-button">Alt0.nl</span></a></h1>
<h3><?php	echo oneLiner(); ?></h3>
<div id="spacer">&nbsp;</div>

<table id="alternatives"><tr><td>
<div id="choices"><h5>Moving to Linux:</h5>
<ul>
  <li>2FA &rarr; Ente Auth: <a href="https://ente.io/download">Works</a></li>
  <li>Browser &rarr; Firefox: <a href="https://www.firefox.com/en-US/browsers/desktop/linux/">Works</a></li>
  <li>Cloud storage &rarr; NextCloud: <a href="https://nextcloud.com/install/#desktop-files">Works</a></li>
  <li>Mail &rarr; Thunderbird: <a href="https://www.thunderbird.net/en-US/thunderbird/all/">Works</a></li>
  <li>Messenger &rarr; Signal: <a href="https://signal.org/download/linux/">Works</a></li>
</ul>
<em>To explore: <a href="https://usebottles.com/">Bottles</a>, <a href="https://www.winboat.app/">WinBoat</a>.</em>
</div>
</td><td>
<?php #=========================================================================
echo "<div id=\"links\"><h5>Alternatives listings:</h5><div>\n";
echo linksList('alternatives', NULL);
echo "</div></div>\n";

echo "</td></tr></table>\n";

endHtmlPage();
#============================================================================ ?>
