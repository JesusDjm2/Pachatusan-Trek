<?php
/**
 * Script de prueba de correo SMTP — BORRAR después de verificar
 * Acceder: http://127.0.0.1:8002/test_mail.php
 */

// Cargar configuración desde .env manualmente
$envPath = __DIR__ . '/../.env';
$env = [];
foreach (file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
    if (strpos(trim($line), '#') === 0) continue;
    if (strpos($line, '=') === false) continue;
    [$key, $val] = explode('=', $line, 2);
    $env[trim($key)] = trim($val, '"\'');
}

$host       = $env['MAIL_HOST']       ?? 'smtp.gmail.com';
$port       = (int)($env['MAIL_PORT'] ?? 587);
$user       = $env['MAIL_USERNAME']   ?? '';
$pass       = $env['MAIL_PASSWORD']   ?? '';
$from       = $env['MAIL_FROM_ADDRESS'] ?? $user;
$fromName   = str_replace('${APP_NAME}', $env['APP_NAME'] ?? 'App', $env['MAIL_FROM_NAME'] ?? 'App');
$to         = 'mirandadjmdjm@gmail.com';

echo "<h2>🔧 Test de correo SMTP</h2>";
echo "<p><b>Host:</b> $host | <b>Puerto:</b> $port | <b>Usuario:</b> $user</p>";
echo "<p><b>Desde:</b> $from | <b>Para:</b> $to</p>";

// Usar PHPMailer si está disponible, sino socket manual
$autoloadPath = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoloadPath)) {
    die("<p style='color:red'>❌ No se encontró vendor/autoload.php</p>");
}
require $autoloadPath;

try {
    $mailer = new \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport($host, $port, false);
    $mailer->setUsername($user);
    $mailer->setPassword($pass);

    $email = new \Symfony\Component\Mime\Email();
    $email->from(new \Symfony\Component\Mime\Address($from, $fromName))
          ->to($to)
          ->subject('✅ Test SMTP — Pachatusan Trek')
          ->html('<p>Este es un correo de prueba enviado desde el script de diagnóstico.</p><p>Si ves este mensaje, el SMTP está funcionando correctamente. ✅</p>');

    $mailer->send($email);

    echo "<p style='color:green;font-size:1.2em'><b>✅ Correo enviado exitosamente a $to</b></p>";
    echo "<p>Revisa la bandeja de entrada (y spam) de <b>$to</b></p>";

} catch (\Exception $e) {
    echo "<p style='color:red;font-size:1.1em'><b>❌ ERROR al enviar:</b> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<pre style='background:#fee;padding:10px'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
