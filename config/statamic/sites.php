<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [

        'french' => [
            'name' => 'French',
            'locale' => 'fr_FR',
            'url' => '/french/',
        ],

        'english' => [
            'name' => 'English',
            'locale' => 'en_US',
            'url' => '/english/',
        ],

    ],
];
