<?php #=========================================================================

$HOME = onLocalhost() ? 'http://localhost/alt0.nl' : 'https://alt0.nl';

#-------------------------------------------------------------------------------
$alt0pages = [
    'me' => "Me",
    'linux' => "Linux",
    'on' => "On",
];

#-------------------------------------------------------------------------------
# External link icons created using:
# https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://muzikantenbank.net/&size=16

# Links to various sites, also useable in Markdown using [BOBLINK_<key>]
$alt0links = [
    'alt0' => [
        'url'  => $HOME.'/',
        'text' => 'Alt0.nl',
        'icon' => $PATH_TO_ROOT.'/images/favicon/favicon-16.png',
        'tag'  => 'Not to say null!',
    ],

    'asml' => [
        'url'  => 'https://www.asml.com/',
        'text' => 'ASML',
        'icon' => $PATH_TO_ROOT.'/images/asml.png',
    ],
    'github' => [
        'url'  => 'http://github.com/brownhamer',
        'text' => 'GitHub',
        'icon' => $PATH_TO_ROOT.'/images/github.png',
    ],
    'mail' => [
        'url'  => 'mailto:band@bunchofbunk.nl',
        'text' => 'Mail',
        'icon' => $PATH_TO_ROOT.'/images/mail.png',
    ],
];

# Various site taglines
$alt0tags = array(
    array("2b || !2b = ?", ""),
    array("All we see is in the past.", ""),
    array("Be less negative.", ""),
    array("If all fails, call Chuck Norris!", ""),
    array("If you can't service the solution, it's broken", ""),
    array("Just because you don't see the rot, doesn't mean it's not broken", ""),
    array("Knowledge sharing should not be a lecture, but an internship", ""),
    array("Never attribute to malice that which is adequately explained by stupidity", ""),
    array("Not to say null.", ""),
    array("Something is wrong, anything is good.", ""),
    array("Bunch of Bunk", "https://bunchofbunk.nl"),
    array("Je weet niet wat fout is", "https://decorrespondent.nl/209/nee-je-hebt-wel-iets-te-verbergen/6428004-ab2d5fc2"),
    array("Niemand doet nooit niks fout", "https://decorrespondent.nl/209/nee-je-hebt-wel-iets-te-verbergen/6428004-ab2d5fc2"),
    array("Rik en Tim", "https://degoedetweeling.net"),
); 

#============================================================================ ?>
