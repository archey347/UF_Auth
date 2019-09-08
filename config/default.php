<?php
/*
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

return [
    'identity_providers' => [
        'database' => [
            'class_name' => 'UserFrosting\\Sprinkle\\Account\\IdentityProviders\\DatabaseIdp',
            'priority'   => 5,
            'type'       => 'primary',
        ],
        'ldap' => [
            'priority'           => 1,
            'type'               => 'primary',
            'class_name'         => 'UserFrosting\\Sprinkle\\Auth\\Authenticator\\Primary\\LDAPAuthenticator',
            'pretty_name'        => 'GenericCorp Domain Login',
            'description'        => 'Login using a Generic Corperation Domain account',
            'allow_new_users'    => true,
            'allow_association'  => true,
            'options'            => [
                'account_suffix'     => '@example.com',
                'domain_controllers' => [
                    'dc1.example.com',
                    'dc2.example.com',
                ],
                'admin_username' => '',
                'admin_password' => '',
            ],
        ],
        'github' => [
            'priority'   => 2,
            'type'       => 'external',
            'class_name' => 'UserFrosting\\Sprinkle\\Auth\\IdentityProviders\\External\\GithubIdentityProvider',
            'pretty_name' => 'GitHub',
            'description' => 'Login using GitHub',
            'options'    => [
                'app_id'     => getenv("GITHUB_APP_ID"),
                'app_secret' => getenv("GITHUB_APP_SECRET"),
            ],
        ],
    ],
    'secondary_authentication' => [
        'enabled'                 => true,
        '__comment'               => 'Enables/disables 2FA... would be worth creating some slim middleware to block all 2FA routes when disabled',
        'setup_on_login'          => true,
        '__comment'               => 'Whether to show the 2FA setup form on login',
        'force'                   => true,
        '__comment'               => 'Whether a user must have 2FA to login (will do the same as the above option, but will not have a skip button',

        'methods' => [
            'google_time_code' => [
                'priority'   => 1,
                'class_name' => 'UserFrosting\\Sprinkle\\ExampleSprinkle\\Authenticator\\Secondary\\GoogleTimeCodeAuthenticator',
                'pretty_name' => 'Google Authenticator',
                'description' => 'Time based code',
                'options'    => [
                    'salt' => 'AKHD3425...',
                ],
            ],
        ],
    ]
];