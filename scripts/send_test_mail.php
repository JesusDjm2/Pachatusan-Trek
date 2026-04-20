<?php

/**
 * Prueba SMTP con la configuración de Laravel (.env).
 * Uso: php scripts/send_test_mail.php [correo@destino]
 */

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$to = $argv[1] ?? 'jessica@pachatusantrek.com';

Illuminate\Support\Facades\Mail::raw(
    'Correo de prueba: MAIL_* en .env y contraseña de aplicación correctas.',
    function ($m) use ($to) {
        $m->to($to)->subject('Prueba SMTP — Pachatusan Trek (Laravel)');
    }
);

echo "OK: envío completado hacia {$to}\n";
