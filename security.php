<?php
return [
    'session' => [
        'database' => [
            'enabled' => false
        ],
        'domain' => '*'
    ],
    'ssl' => [
        'enabled' => true,
        'force' => false
    ],
    'encryption' => [
        'cypher' => 'aes-256-cbc', //CASE SENSITIVE
        'key' => ''  //DECRYPTION KEY HERE ** DO NOT SHARE **
    ],
    'password' => [
        'cypher' => PASSWORD_BCRYPT,
        'cost' => 10,
        'salt' => '' // ADD PASSWORD SALT HERE
    ],
    'obfuscate' => [
        'disabled' => ff_mode() != 'development'
    ],
    'allowedOrigins' => true,
];
