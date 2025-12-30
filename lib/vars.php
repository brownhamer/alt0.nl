<?php #=========================================================================

$HOME = onLocalhost() ? 'http://localhost:8000' : 'https://alt0.nl';

#-------------------------------------------------------------------------------
$alt0pages = [
    'alt0' => "home",
    'alternatives' => "Alternatives",
    'me' => "About me",
    'on' => "Topic links",
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
    ],
    'bob' => [
        'url'  => 'https://bunchofbunk.nl/',
        'text' => 'BunchOfBunk.nl',
    ],
    'dgt' => [
        'url'  => 'https://degoedetweeling.net/',
        'text' => 'deGoedeTweeling.net',
    ],
    'github' => [
        'url'  => 'http://github.com/brownhamer',
        'text' => 'GitHub',
    ],
    'mastodon' => [
        'url'  => 'https://mastodon.nl/@brownhamer',
        'text' => 'Mastodon',
    ],
    'nieklin' => [
        'url'  => 'https://nieklin.nl/',
        'text' => 'Nieklin.nl',
    ],
    'mail' => [
        'url'  => 'mailto:hendrik@alt0.nl',
        'text' => 'Mail',
    ],
];

#============================================================================ ?>
