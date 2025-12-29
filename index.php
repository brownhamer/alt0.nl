<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');
require_once($PATH_TO_ROOT.'/lib/vars.php');
require_once($PATH_TO_ROOT.'/lib/Parsedown.php');

#-------------------------------------------------------------------------------
startHtmlPage($PATH_TO_ROOT, $alt0links['alt0']['text'], $alt0links['alt0']['tag']);

#============================================================================ ?>

<h1><?php echo textLink('alt0'); ?></h1>
<h2><?php echo $alt0links['alt0']['tag']; ?></h2>

<div id="page">
<div id="sidebar"><div id="sidegray">
    <div id="navigation">
        &middot; <?php echo pageLink('me'); ?><br />
        &middot; <?php echo pageLink('linux'); ?><br />
        &middot; <?php echo pageLink('on'); ?><br />
    </div>
    <div id="socials">
        <?php echo iconLink('asml'); ?>
        <?php echo iconLink('github'); ?>
        <?php echo iconLink('mastodon'); ?>
        <?php echo iconLink('mail'); ?>
    </div>
</div></div>
<div id="content">
<?php
    $page = htmlspecialchars(getGet('page', 'home'));
    if (!is_readable($PATH_TO_ROOT.'/content/'.$page.'.md')) {
        echo '<div id="pagenotfound">Page ['.$page.'] not found, assuming homepage</div>'."\n";
        $page = 'home';
    }

    $file = $PATH_TO_ROOT.'/content/'.$page.'.md';
    echo "\n".'<!-- start ['.$page.'] content from ['.$file.'] -->'."\n";
    $markdown = file_get_contents($file);
    $parsedown = new Parsedown();
    echo replacealt0links($parsedown->text($markdown));
    echo "\n".'<!-- end ['.$page.'] content from ['.$file.'] -->'."\n";
?>
</div>
</div>

<div id="footer">
    <div id="auteursrechten">
        <h3>Auteursrechten</h3><br /><br />
        ...
    </div>
    <div id="copyright">
        <h3>Copyright</h3><br /><br />
        ...
    </div>
</div>

<div id="by">
    <?php randomHtmlMusicSymbol(); ?> site by <?php echo textLink('alt0'); ?>
</div>

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
