<?php
// creating base url
$prot_part = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'https://' : 'http://';
//added @ for HTTP_HOST undefined in Tests
$host_part = @$_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
if (substr($host_part, -1) !== '/') $host_part .= '/';
$_APP_BASE_URL = $prot_part . $host_part;

return [
    'auth.provider' => 'MapasCulturais\AuthProviders\OpauthAuthentik',
    'auth.config' => [
        'salt' => env('AUTH_SALT', 'SECURITY_SALT'),
        'timeout' => '24 hours',
        'client_id' => env('AUTH_AUTHENTIK_APP_ID', 'sunTd7lB77Qlxer4mhehbkcpVd0TdoL6mthqB7Av'),
        'client_secret' => env('AUTH_AUTHENTIK_APP_SECRET', '8EV1lx3SoWqNpOXQUXPkQTXwlT4DniYCgUh7exHhKhNoD9dcltbplAYtkhDfPW9Mpl3DOsNv1wtoc3JQdk8N5IsWXM4SC6vUdIKz6qFUvxmvC2FKi24JPqMnuZzXjcY2'),
        'scope' => env('AUTH_AUTHENTIK_SCOPE', 'openid profile email'),
        'login_url' => env('AUTH_AUTHENTIK_LOGIN_URL', 'https://dev-id.florestaativista.org'),
    ]
];
