<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenido a ADVIS!</title>
    <style>
        :root {
            --color-primary: #0C1C7D;
            --color-secondary: #438ACC;
            --color-light: #FFFFFF;
            --color-dark: #1E202F;
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            line-height: 1.6;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: var(--color-light);
        }
        
        .header {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
            padding: 40px 20px;
            text-align: center;
        }
        
        .logo {
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
        
        .header h1 {
            color: var(--color-light);
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }
        
        .header p {
            color: var(--color-light);
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 16px;
        }
        
        .content {
            padding: 40px 30px;
        }
        
        .greeting {
            font-size: 18px;
            color: var(--color-dark);
            margin-bottom: 20px;
        }
        
        .message {
            font-size: 16px;
            color: #4a5568;
            margin-bottom: 30px;
        }
        
        .highlight-box {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
            color: var(--color-light);
            padding: 25px;
            border-radius: 12px;
            margin: 30px 0;
            text-align: center;
        }
        
        .highlight-box h2 {
            margin: 0 0 10px 0;
            font-size: 24px;
        }
        
        .highlight-box p {
            margin: 0;
            font-size: 16px;
            opacity: 0.9;
        }
        
        .features {
            margin: 30px 0;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin: 15px 0;
            padding: 15px;
            background-color: #f7fafc;
            border-radius: 8px;
            border-left: 4px solid var(--color-secondary);
        }
        
        .feature-icon {
            width: 24px;
            height: 24px;
            margin-right: 15px;
            color: var(--color-secondary);
        }
        
        .expiry-notice {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
            text-align: center;
        }
        
        .expiry-notice h3 {
            color: #856404;
            margin: 0 0 10px 0;
            font-size: 18px;
        }
        
        .expiry-notice p {
            color: #856404;
            margin: 0;
            font-size: 16px;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
            color: var(--color-light);
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 16px;
            margin: 20px 0;
        }
        
        .footer {
            background-color: var(--color-dark);
            color: var(--color-light);
            padding: 30px;
            text-align: center;
        }
        
        .footer p {
            margin: 5px 0;
            font-size: 14px;
            opacity: 0.8;
        }
        
        .social-links {
            margin: 20px 0;
        }
        
        .social-links a {
            color: var(--color-light);
            text-decoration: none;
            margin: 0 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>¡Bienvenido a ADVIS!</h1>
            <p>Sistema de Gestión de Visitas Inteligente</p>
        </div>
        
        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Hola {{ $userData['name'] }} {{ $userData['lastname'] }},
            </div>
            
            <div class="message">
                ¡Gracias por registrarte en ADVIS! Estamos emocionados de tenerte como parte de nuestra comunidad. 
                Tu registro ha sido exitoso y pronto podrás disfrutar de todas las funcionalidades de nuestro sistema de gestión de visitas.
            </div>
            
            <div class="highlight-box">
                <h2>🎉 ¡Tu Mes Gratis Está Reservado!</h2>
                <p>Para activar tu promoción, comunícate con nosotros o espera nuestro contacto</p>
            </div>
            
            <div class="features">
                <h3 style="color: var(--color-primary); margin-bottom: 20px;">Lo que incluye tu prueba gratuita:</h3>
                
                <div class="feature-item">
                    <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Control de visitantes vía citas y acceso sin cita con QR</span>
                </div>
                
                <div class="feature-item">
                    <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>Notificaciones automáticas por correo electrónico</span>
                </div>
                
                <div class="feature-item">
                    <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span>Reportes detallados compatibles con C-TPAT</span>
                </div>
                
                <div class="feature-item">
                    <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Historial completo de visitas</span>
                </div>
            </div>
            
            <div class="expiry-notice">
                <h3>⏰ Próximos Pasos</h3>
                <p>Para activar tu <strong>1 mes gratis</strong>, puedes contactarnos directamente o esperar a que nuestro equipo se comunique contigo en las próximas 24-48 horas para completar la activación.</p>
            </div>
            
            <div class="message">
                <p>Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos. 
                Nuestro equipo de soporte está aquí para ayudarte con la activación de tu cuenta.</p>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p><strong>ADVIS</strong> - Sistema de Gestión de Visitas</p>
            <p>IP Media River</p>
            <p style="margin-top: 20px; font-size: 12px;">
                Este email fue enviado a {{ $userData['email'] }} porque te registraste en ADVIS.
            </p>
        </div>
    </div>
</body>
</html>
