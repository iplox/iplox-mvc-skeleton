<?php

return [
    'modules' => [
        [
            'default' => [
                'name' => 'subapp',
                'namespace' => 'SubApp',
                'directory' => 'subapp/src',
                'moduleClassName' => 'Module',
                'route' => 'sub',
                'autoload' => true
            ]
        ]
    ]
];