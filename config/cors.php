<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |

     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */
    'supportsCredentials' => true,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Content-Type', 'Accept'],
    'allowedMethods' => ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'],
    'exposedHeaders' => [],
    'maxAge' => 0,
    'hosts' => [],
];

