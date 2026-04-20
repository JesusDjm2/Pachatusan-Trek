<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Review — Pachatusan Trek</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f4f8;
            color: #2d3748;
        }
        .wrapper {
            max-width: 600px;
            margin: 32px auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        }
        .header {
            background: linear-gradient(135deg, #1a3c34 0%, #2e7d52 100%);
            padding: 32px 40px 36px;
            text-align: center;
        }
        .header-logo {
            display: block;
            margin: 0 auto 16px;
            max-height: 52px;
            width: auto;
            max-width: 260px;
            height: auto;
        }
        .header h1 {
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .header p {
            color: #a7f3d0;
            font-size: 13px;
            margin-top: 4px;
        }
        .badge {
            display: inline-block;
            background: #f59e0b;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 4px 14px;
            border-radius: 20px;
            margin-top: 14px;
        }
        .body {
            padding: 36px 40px;
        }
        .intro {
            font-size: 15px;
            color: #4a5568;
            margin-bottom: 24px;
            line-height: 1.6;
        }
        .card {
            background: #f7fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 24px 28px;
            margin-bottom: 28px;
        }
        .card-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 14px;
            font-size: 14px;
        }
        .card-row:last-child { margin-bottom: 0; }
        .card-label {
            color: #718096;
            font-weight: 600;
            min-width: 130px;
        }
        .card-value {
            color: #2d3748;
            text-align: right;
            word-break: break-word;
        }
        .stars {
            color: #f59e0b;
            font-size: 16px;
        }
        .comment-box {
            background: #fff;
            border-left: 4px solid #2e7d52;
            padding: 14px 18px;
            border-radius: 0 8px 8px 0;
            font-size: 14px;
            color: #4a5568;
            line-height: 1.7;
            margin-top: 8px;
            font-style: italic;
        }
        .cta {
            text-align: center;
            margin-bottom: 32px;
        }
        .cta a {
            display: inline-block;
            background: linear-gradient(135deg, #2e7d52, #1a3c34);
            color: #ffffff;
            text-decoration: none;
            padding: 14px 36px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        .footer {
            background: #f7fafc;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            padding: 20px 40px;
            font-size: 12px;
            color: #a0aec0;
        }
    </style>
</head>
<body>
<div class="wrapper">

    <!-- HEADER -->
    <div class="header">
        <img
            src="{{ asset('img/logo-Pachatusan-Trek-blanco.png') }}"
            alt="Pachatusan Trek"
            class="header-logo"
            width="260"
            height="52"
            style="display:block;margin:0 auto 16px;max-height:52px;max-width:260px;width:auto;height:auto;border:0;outline:none;text-decoration:none;"
        />
        <p>Panel de Administración</p>
        <div class="badge">Review pendiente de aprobación</div>
    </div>

    <!-- BODY -->
    <div class="body">
        <p class="intro">
            Hola, Admin. Se ha recibido un nuevo review en el sitio web y está esperando tu revisión y aprobación.
            Aquí tienes los detalles del registro:
        </p>

        <!-- CARD DE DATOS -->
        <div class="card">
            <div class="card-row">
                <span class="card-label">👤 Nombre</span>
                <span class="card-value">{{ $review->name }}</span>
            </div>
            <div class="card-row">
                <span class="card-label">📅 Fecha de viaje</span>
                <span class="card-value">{{ $review->travel_date->format('d/m/Y') }}</span>
            </div>
            <div class="card-row">
                <span class="card-label">👥 Viajó con</span>
                <span class="card-value">{{ $review->travel_with }}</span>
            </div>
            <div class="card-row">
                <span class="card-label">⭐ Calificación</span>
                <span class="card-value">
                    <span class="stars">
                        @for ($i = 1; $i <= 5; $i++)
                            {{ $i <= $review->rating ? '★' : '☆' }}
                        @endfor
                    </span>
                    ({{ $review->rating }}/5)
                </span>
            </div>
            <div class="card-row">
                <span class="card-label">📸 Foto adjunta</span>
                <span class="card-value">{{ $review->image ? 'Sí' : 'No' }}</span>
            </div>
            <div class="card-row" style="flex-direction: column;">
                <span class="card-label" style="margin-bottom:8px;">💬 Comentario</span>
                <div class="comment-box">{{ $review->comment }}</div>
            </div>
        </div>

        <!-- CTA: REVIEW_ADMIN_URL en .env; si no, APP_URL + /admin/reviews -->
        <div class="cta">
            <a href="{{ config('mail.review_admin_url') ?: rtrim((string) config('app.url', ''), '/') . '/admin/reviews' }}">
                Ir al Panel de Reviews →
            </a>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        Este correo fue generado automáticamente por el sistema de Pachatusan Trek.<br>
        Por favor no respondas directamente a este mensaje.
    </div>

</div>
</body>
</html>
