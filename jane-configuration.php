<?php

use DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver;

return [
    'openapi-file' => __DIR__ . '/swagger.json',
    'namespace' => 'DigiComp\OpenproviderApi',
    'directory' => __DIR__ . '/generated',
    'strict' => false,
    'custom-query-resolver' => [
        '__type' => [
            'bool' => BoolQueryResolver::class,
        ],
    ],
];
