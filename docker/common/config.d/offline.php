<?php
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
return [
    'app.offline' => in_array($host, ['som.vc', 'som.localhost']) && date('Y-m-d H:i:s') > '2025-09-19 09:00:00' && date('Y-m-d H:i:s') < '2025-10-03 08:00:00',
    'app.offlineUrl' => '/em-breve/',
    'app.offlineBypassFunction' => function() {
        $senha = $_GET['online'] ?? '';   
        if ($senha === env('OFFLINE_BYPASS')) {
            $_SESSION['online'] = true;
        }

        return $_SESSION['online'] ?? false;
    }
];