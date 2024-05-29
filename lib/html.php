<?php #=========================================================================

#-------------------------------------------------------------------------------
function startHtmlPage($title) {
    global $PATH_TO_ROOT;
    echo '<!DOCTYPE HTML>'."\n";
    echo '<html>'."\n";
    echo '<head>'."\n";
    echo '<title>'.$title.'</title>'."\n";
    echo '<link rel="stylesheet" type="text/css" href="'.$PATH_TO_ROOT.'/style/main.css">'."\n";
	echo '<style type="text/css">'."\n";
	echo 'body { background-image: url("'.$PATH_TO_ROOT.'/images/Alt0.nl-background.png"); }'."\n";
	echo '</style>'."\n";
	echo '<!-- ****** faviconit.com favicons ****** -->'."\n";
	echo '<link rel="shortcut icon" href="'.$PATH_TO_ROOT.'/favicon.ico">'."\n";
	echo '<link rel="icon" sizes="16x16 32x32 64x64" href="'.$PATH_TO_ROOT.'/favicon.ico">'."\n";
	echo '<link rel="icon" type="image/png" sizes="196x196" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-192.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="160x160" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-160.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="96x96" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-96.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="64x64" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-64.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="32x32" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-32.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="16x16" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-16.png">'."\n";
	echo '<link rel="apple-touch-icon" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-57.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="114x114" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-114.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="72x72" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-72.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="144x144" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-144.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="60x60" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-60.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="120x120" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-120.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="76x76" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-76.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="152x152" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-152.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="180x180" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-180.png">'."\n";
	echo '<meta name="msapplication-TileColor" content="#FFFFFF">'."\n";
	echo '<meta name="msapplication-TileImage" content="'.$PATH_TO_ROOT.'/images/faviconit/favicon-144.png">'."\n";
	echo '<meta name="msapplication-config" content="'.$PATH_TO_ROOT.'/images/faviconit/browserconfig.xml">'."\n";
	echo '<!-- ****** faviconit.com favicons ****** -->'."\n";
	echo '</head>'."\n";
    echo '<body>'."\n";
}

#-------------------------------------------------------------------------------
function endHtmlPage() {
	global $alt0_url, $bob_url, $dgt_url, $nieklin_url;

	echo '<div id="footer">'."\n";
	echo '<a href="'.$alt0_url.'">Alt0.nl</a> = Hendrik'."\n";
	echo '<i>op <a rel="me" href="https://mastodon.nl/@brownhamer">Mastodon</a></i><br />'."\n";
	echo '<a href="'.$bob_url.'">BunchOfBunk.nl</a> = Band<br />'."\n";
	echo '<a href="'.$dgt_url.'">deGoedeTweeling.net</a> = Rik &amp; Tim<br />'."\n";
	echo '<a href="'.$nieklin_url.'">Nieklin.nl</a> = Sandra<br />'."\n";
	echo '</div>'."\n";
    echo '</body>'."\n";
    echo '</html>'."\n";
}

#-------------------------------------------------------------------------------
function xLiners($file, $amount) {
    global $PATH_TO_ROOT;

	$lines = file($PATH_TO_ROOT.'/links/'.$file.'.txt');
	shuffle($lines);
	$lines = array_slice($lines, 0, $amount);

	$kv = array();
	foreach ($lines as $line) {
		$parts     = explode('>', $line);
		$url       = trim($parts[0]);
		$line      = htmlentities(trim($parts[1]));
		$kv[$line] = trim($url);
	}
	ksort($kv, SORT_STRING|SORT_FLAG_CASE);

	$lines = array();
	foreach ($kv as $line => $url) {
		if ($url == "") {
			$lines[] = $line;
		}
		else {
			$lines[] = "<a href=\"$url\">$line</a>";
		}
	}

	return $lines;
}

#-------------------------------------------------------------------------------
function oneLiner() {
    $lines = xLiners('oneliners', 1);
	return $lines[0];
}

#-------------------------------------------------------------------------------
function linksList($file, $amount) {
    $lines = xLiners($file, $amount);
	return implode("<br />\n", $lines);
}

#-------------------------------------------------------------------------------
function getColor($color, $factor = 1.0) {
	if ($color < $factor) { $color += $factor; }
	$color = $factor * $color;
	if ($color > 255) { $color = 255; }
	if ($color <   0) { $color =   0; }
	return $color;
}

#-------------------------------------------------------------------------------
function hexColor($rgb, $factor = 1.0) {
	$red   = getColor($rgb[0], $factor);
	$green = getColor($rgb[1], $factor);
	$blue  = getColor($rgb[2], $factor);
	return sprintf('#%02x%02x%02x', $red, $green, $blue);
}

#-------------------------------------------------------------------------------
class LinkButton {
	private $_title = null;
	private $_url   = null;
	private $_rgb   = null;
	private $_class = null;
	private $_doCss = true;

	public function __construct($title, $url, $red, $green, $blue) {
		$this->_title = $title;
		$this->_url   = $url;
		$this->_rgb   = array($red, $green, $blue);
		$this->_class = md5($title.$url);
	}

	private function css() {
		$normal = hexColor($this->_rgb);
		$dark   = hexColor($this->_rgb, 0.8);
		$light  = hexColor($this->_rgb, 1.2);

		$string  = '<style type="text/css">'."\n";
		$string .= '.link-button-'.$this->_class.' { background-color: '.$normal.'; }'."\n";
		$string .= 'a.link-button-'.$this->_class.':hover {'."\n";
		$string .=  'background-color: '.$dark.';'."\n";
		$string .=  'background: -webkit-linear-gradient(top, '.$light.', '.$dark.');'."\n";
		$string .=  'background: -moz-linear-gradient(top, '.$light.', '.$dark.');'."\n";
		$string .=  'background: -o-linear-gradient(top, '.$light.', '.$dark.');'."\n";
		$string .=  'background: -ms-linear-gradient(top, '.$light.', '.$dark.');'."\n";
		$string .=  'background: linear-gradient(top, '.$light.', '.$dark.');'."\n";
		$string .=  'border-color: '.$dark.';'."\n";
		$string .=  '}'."\n";
		$string .=  '</style>'."\n";

		return $string;
	}

	private function a() {
		return '<a href="'.$this->_url.'" class="link-button link-button-'.$this->_class.'">'.$this->_title.'</a>'."\n";
	}

	public function __toString() {
		$string = '';
		if ($this->_doCss) {
			$string .= $this->css();
			$this->_doCss = false;
		}

		$string .= $this->a();
		return $string;
	}
}

#-------------------------------------------------------------------------------
$alt0_url    = 'https://alt0.nl';
$bob_url     = 'https://bunchofbunk.nl';
$dgt_url     = 'https://degoedetweeling.net';
$nieklin_url = 'https://nieklin.nl';

$alt0_button       = new LinkButton('Alt0.nl'      , $alt0_url                                   ,  85, 102, 136);
$bob_button        = new LinkButton('Bunch of Bunk', $bob_url                                    ,  59,  61,  63);
$bvckup2_button    = new LinkButton('Bvckup 2'     , 'https://www.bvckup2.com'                   ,  58,  58,  70);
$bvckup2_dl_button = new LinkButton('&dArr;'       , 'https://www.bvckup2.com/download?r=pxwhp'  ,  58,  58,  70);
$github_button     = new LinkButton('GitHub'       , 'https://github.com/brownhamer'             ,  46,  46,  46);
$linkedin_button   = new LinkButton('LinkedIn'     , 'https://www.linkedin.com/in/hendrikdegoede',   0, 119, 181);
$mastodon_button   = new LinkButton('Mastodon'     , 'https://mastodon.nl/@brownhamer'           ,  90,  72, 221);
$paypal_button     = new LinkButton('PayPal.me'    , 'https://www.paypal.me/HendrikdeGoede'      ,  81, 111, 162);
$simyo_button      = new LinkButton('Simyo'        , 'https://www.simyo.nl/vriendendeal/p67un5'  , 255, 127,   0);

#============================================================================ ?>
