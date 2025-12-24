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
  <li>2FA &rarr; Ente Auth: <a href="https://ente.io/download">[works]</a></li>
  <li>Browser &rarr; Firefox: <a href="https://www.firefox.com/en-US/browsers/desktop/linux/">[works]</a></li>
  <li>Cloud storage &rarr; NextCloud: <a href="https://nextcloud.com/install/#desktop-files">[works]</a></li>
  <li>Mail &rarr; Thunderbird: <a href="https://www.thunderbird.net/en-US/thunderbird/all/">[works]</a></li>
  <li>Messenger &rarr; Signal: <a href="https://signal.org/download/linux/">[works]</a></li>
  <li>Notes &rarr; Nextcloud notes: <a href="https://apps.gnome.org/Iotas/">Iotas</a></li>
  <li>VPN &rarr; Mullvad: <a href="https://mullvad.net/en/help/install-mullvad-app-linux">[works]</a></li>
</ul>
<br />

<em>To explore as replacement for Steinberg <a href="https://www.steinberg.net/cubase/">Cubase</a> (with support for import of DAW export):</em>
<ul>
  <li><a href="https://www.bitwig.com/">Bitwig</a></li>
  <li><a href="https://ntrack.com/">n-Track</a></li>
  <li><a href="https://www.presonus.com/pages/studio-one-pro">Studio One</a></li>
</ul>
<br />

<em>To explore for Neural DSP Quad<a href="https://neuraldsp.com/cortex-control">Cortex Control</a>:</em>
<ul>
  <li><a href="https://usebottles.com/">Bottles</a> &rarr; failed, USB connection not detected</li>
  <li><a href="https://www.winboat.app/">Winboat</a> &rarr; failed, Docker not detected</li>
  <li><a href="https://github.com/aggalex/Wineglass/">Wineglass</a> &rarr; failed, after installation nothing starts</li>
  <li><a href="https://gitlab.melroy.org/melroy/winegui">WineGUI</a> &rarr; failed, download timing out</li>
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
