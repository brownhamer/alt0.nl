<?php #=========================================================================

$HOME = onLocalhost() ? 'http://localhost:8000' : 'https://alt0.nl';

#-------------------------------------------------------------------------------
$alt0pages = [
    'ai' => "AI",
    'alternatieven' => "Alternatieven",
    'data' => "Data",
    'hendrik' => "Hendrik",
    'mastodon' => "Mastodon",
    'meshcore' => "MeshCore",
    'meta' => "Meta",
    'nieuws' => "Nieuws",
    'online' => "Online",
    'privacy' => "Privacy",
    'software' => "Software",
    'tesla' => "Tesla",
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
    'fearless' => [
        'url'  => 'https://bunchofbunk.nl//?page=fearless',
        'text' => 'Fearless',
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
    'nolto' => [
        'url'  => 'https://nolto.social/profile/hendrik',
        'text' => 'Nolto',
    ],
    'mail' => [
        'url'  => 'mailto:hendrik@alt0.nl',
        'text' => 'Mail',
    ],
];

#============================================================================ ?>
