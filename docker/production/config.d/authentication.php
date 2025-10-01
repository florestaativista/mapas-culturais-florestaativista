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
        'client_id' => env('AUTH_AUTHENTIK_APP_ID', ''),
        'client_secret' => env('AUTH_AUTHENTIK_APP_SECRET', ''),
        'scope' => env('AUTH_AUTHENTIK_SCOPE', ''),
        'login_url' => env('AUTH_AUTHENTIK_LOGIN_URL', ''),
        'logout_url' => env('AUTH_AUTHENTIK_LOGOUT_URL', ''),
        'change_password_url' => env('AUTH_AUTHENTIK_CHANGE_PASSWORD_URL', null),
    ]
];
