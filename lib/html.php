<?php #=========================================================================

#-------------------------------------------------------------------------------
function startHtmlPage($ptr, $title, $line) {
    echo '<!DOCTYPE HTML>'."\n";
    echo '<html>'."\n";
    echo '<head>'."\n";
    echo '<title>'.$title.' - '.$line.'</title>'."\n";
    echo '<link rel="stylesheet" type="text/css" href="'.$ptr.'/style/main.css">'."\n";
	echo '<style type="text/css">'."\n";
	echo 'body { background-image: url("'.$ptr.'/images/Alt0.nl-background.png"); }'."\n";
	echo '</style>'."\n";
	echo '<link rel="shortcut icon" href="'.$ptr.'/favicon.ico">'."\n";
	echo '<link rel="icon" sizes="16x16 32x32 64x64" href="'.$ptr.'/favicon.ico">'."\n";
	echo '<link rel="icon" type="image/png" sizes="196x196" href="'.$ptr.'/images/favicon/favicon-192.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="160x160" href="'.$ptr.'/images/favicon/favicon-160.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="96x96" href="'.$ptr.'/images/favicon/favicon-96.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="64x64" href="'.$ptr.'/images/favicon/favicon-64.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="32x32" href="'.$ptr.'/images/favicon/favicon-32.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="16x16" href="'.$ptr.'/images/favicon/favicon-16.png">'."\n";
	echo '<link rel="apple-touch-icon" href="'.$ptr.'/images/favicon/favicon-57.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="114x114" href="'.$ptr.'/images/favicon/favicon-114.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="72x72" href="'.$ptr.'/images/favicon/favicon-72.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="144x144" href="'.$ptr.'/images/favicon/favicon-144.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="60x60" href="'.$ptr.'/images/favicon/favicon-60.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="120x120" href="'.$ptr.'/images/favicon/favicon-120.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="76x76" href="'.$ptr.'/images/favicon/favicon-76.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="152x152" href="'.$ptr.'/images/favicon/favicon-152.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="180x180" href="'.$ptr.'/images/favicon/favicon-180.png">'."\n";
	echo '<meta name="msapplication-TileColor" content="#FFFFFF">'."\n";
	echo '<meta name="msapplication-TileImage" content="'.$ptr.'/images/favicon/favicon-144.png">'."\n";
	echo '<meta name="msapplication-config" content="'.$ptr.'/images/favicon/browserconfig.xml">'."\n";
	echo '</head>'."\n";
    echo '<body>'."\n";
}

#-------------------------------------------------------------------------------
function textLink($key, $txt = '', $urladd = '') {
	global $alt0links;
	$url  = $alt0links[$key]['url'];
	$text = ($txt == '') ? $alt0links[$key]['text'] : $txt;
	return '<a href="'.$url.$urladd.'">'.$text.'</a>';
}

#-------------------------------------------------------------------------------
function imageLink($url, $alt, $src) {
	return '<a href="'.$url.'"><img alt="'.$alt.'" src="'.$src.'" /></a>';
}

#-------------------------------------------------------------------------------
function pageLink($key) {
	global $alt0pages;
	return textlink('alt0', $alt0pages[$key], '/?page='.$key);
}

#-------------------------------------------------------------------------------
function iconLink($key) {
	global $alt0links;
	$url  = $alt0links[$key]['url'];
	$text = $alt0links[$key]['text'];
	$icon = $alt0links[$key]['icon'];
	return imageLink($url, $text, $icon, 'icon');
}

#-------------------------------------------------------------------------------
function replacealt0links($text) {
	global $alt0links;
	foreach ($alt0links as $key => $value) {
		$pattern = '/\[ALT0LINK_'.$key.'\]/';
		$replace = textlink($key);
		$text = preg_replace($pattern, $replace, $text);
	}

	global $alt0pages;
	foreach ($alt0pages as $key => $value) {
		$pattern = '/\[ALT0PAGE_'.$key.'\]/';
		$replace = pageLink($key);
		$text = preg_replace($pattern, $replace, $text);
	}

	return $text;
}

#-------------------------------------------------------------------------------
function randomHtmlMusicSymbol() {
	$symbols = array('&#9833;', '&#9834;', '&#9835;', '&#9836;', '&#9837;', '&#9838;', '&#9839;');
    echo $symbols[array_rand($symbols)];
}

#-------------------------------------------------------------------------------
function endHtmlPage() {
    echo '</body>'."\n";
    echo '</html>'."\n";
}


#============================================================================ ?>
