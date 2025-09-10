<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
$page_id = intval(htmlspecialchars(getGet('page_id', 0)));
$tag     = htmlspecialchars(getGet('tag', ''));
if (($page_id == 360) or ($tag == 'bunch-of-bunk')) {
    header('Location: '.$bob_url);
    exit;
}

#-------------------------------------------------------------------------------
$links_known = array(
    "alternatives" => 3,
    "finds"        => 2,
    "news"         => 2,
    "online"       => 3,
    "programs"     => 5,
    "software"     => 3
);
$links_id = htmlspecialchars(getGet('links', ''));
if (!key_exists($links_id, $links_known)) {
	if (!($links_id === "oneliners")) {
		$links_id = '';
	}
}

#-------------------------------------------------------------------------------
startHtmlPage('Alt0.nl');
#============================================================================ ?>

<h1><a href="<?php echo $alt0_url; ?>"><span class="link-button">Alt0.nl</span></a></h1>
<h3><?php
	echo oneLiner();
	if ($links_id === '') {
		echo "<br /><a href=\"".$alt0_url."?links=oneliners\">...</a>\n";
	}
?></h3>
<div id="spacer">&nbsp;</div>

<?php #=========================================================================
if ($links_id === '') {
#============================================================================ ?>

<h2>
<img src="bunchofbunk/BunchOfBunk-logo.png" /><br />
<?php echo $bob_button; ?>
</h2>

<h2>
<?php echo $alternatives_button; ?>
</h2>

<div id="buttons">
<?php
	echo $asml_button.'&nbsp;'."\n";
	echo $creative_button.'&nbsp;'."\n";
	echo $github_button.'&nbsp;'."\n";
	echo $mastodon_button."\n";
?>
</div>

<?php #=========================================================================
  $first = true;
  echo "<div id=\"linksside\">\n";
  foreach ($links_known as $key => $nof) {
	if (!$first) { echo "<br />\n"; }
	$first = false;
    echo "<h5><a href=\"".$alt0_url."?links=".$key."\">".ucfirst($key)."</a>:</h5><div>\n";
    echo linksList($key, $nof);
    echo "</div>\n";
  }
  echo "</div>\n";
}
else {
  echo "<div id=\"links\"><h5>".ucfirst($links_id).":</h5><div>\n";
  echo linksList($links_id, NULL);
  echo "</div></div>\n";
}

endHtmlPage();
#============================================================================ ?>
