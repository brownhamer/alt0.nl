<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
startHtmlPage('Alt0.nl &rarr; Alternatives');
#============================================================================ ?>

<h1><a href="<?php echo $alt0_url; ?>"><span class="link-button">Alt0.nl</span></a></h1>
<h3><?php	echo oneLiner(); ?></h3>
<div id="spacer">&nbsp;</div>

<table id="alternatives"><tr><td>
<div id="choices"><h5>My choices:</h5>
<ul>
  <li>2FA: <span class="del">Authy</span> &rarr; <a href="https://ente.io/auth/">Ente Auth</a></li>
  <li>Browser: <span class="del">Chrome</span> &rarr; <a href="https://www.firefox.com/">Firefox</a></li>
  <li>Cloud storage: <span class="del">OneDrive</span> &rarr; <a href="https://nextcloud.com/">NextCloud</a> via <a href="https://ocloud.de/">oCloud</a></li>
  <li>Mail: <span class="del">Gmail</span> &rarr; <a href="https://www.thunderbird.net/">Thunderbird</a> with IMAP on own domains</li>
  <li>Messenger: <span class="del">WhatsApp</span> &rarr; <a href="https://signal.org/">Signal</a></li>
  <li>Navigation: <span class="del">Maps</span> &rarr; <a href="https://www.comaps.app/">CoMaps</a> and <a href="https://wego.here.com/">HERE WeGo</a></li>
  <li>Notes: <span class="del">Simplenote</span> &rarr; <a href="https://notesnook.com/">Notesnook</a></li>
  <li>Password manager: <span class="del">Lastpass</span> &rarr; <a href="https://1password.com/">1Password</a></li>
  <li>Search: <span class="del">Google</span> &rarr; <a href="https://start.duckduckgo.com/">DuckDuckGo</a></li>
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
