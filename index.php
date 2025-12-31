<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');
require_once($PATH_TO_ROOT.'/lib/vars.php');
require_once($PATH_TO_ROOT.'/lib/Parsedown.php');

#-------------------------------------------------------------------------------
startHtmlPage($PATH_TO_ROOT, $alt0links['alt0']['text'], "Hendrik");

#============================================================================ ?>

<h1><?php echo textLink('alt0'); ?></h1>
<h2><?php echo oneLiner(); ?></h2>

<div id="page">
<div id="sidebar"><div id="sidegray">
    <div id="navigation">
        <?php echo textLink('alt0'); ?> &raquo; <?php echo pageLink('hendrik'); ?><br />
        <hr />
        Informatie<br />
        &middot; <?php echo pageLink('nieuws'); ?><br />
        &middot; <?php echo pageLink('data'); ?><br />
        <hr />
        Technologie<br />
        &middot; <?php echo pageLink('alternatieven'); ?><br />
        <hr />
        Over<br />
        &middot; <?php echo pageLink('ai'); ?><br />
        &middot; <?php echo pageLink('fsd'); ?><br />
        &middot; <?php echo pageLink('meta'); ?><br />
        &middot; <?php echo pageLink('privacy'); ?><br />
    </div>
</div></div>
<div id="content">
<?php
    $page = htmlspecialchars(getGet('page', 'alt0'));
    if (!is_readable($PATH_TO_ROOT.'/content/'.$page.'.md')) {
        echo '<div id="pagenotfound">Page ['.$page.'] not found, assuming homepage</div>'."\n";
        $page = 'alt0';
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
    <div id="socials">
        <h3>Ik</h3><br /><br />
        <?php echo textLink('asml'); ?> &raquo; Werk
        &middot; <?php echo textLink('github'); ?> &raquo; Sites
        &middot; <?php echo textLink('mastodon'); ?> &raquo; Social
        &middot; <?php echo textLink('mail'); ?> &raquo; Contact
    </div>
    <div id="sites">
        <h3>Wij</h3><br /><br />
        <?php echo textLink('alt0'); ?> &raquo; Hendrik
        &middot; <?php echo textLink('bob'); ?> &raquo; Band
        &middot; <?php echo textLink('dgt'); ?> &raquo; Rik &amp; Tim
        &middot; <?php echo textLink('nieklin'); ?> &raquo; Sandra
    </div>
</div>

<div id="by">
    <?php randomHtmlMusicSymbol(); ?> site by <?php echo textLink('alt0'); ?>
</div>

<?php #=========================================================================
endHtmlPage();

#============================================================================ ?>
