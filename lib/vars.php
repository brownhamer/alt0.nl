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

#============================================================================ ?>
