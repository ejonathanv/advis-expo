<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro en ADVIS</title>
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
            padding: 30px 20px;
            text-align: center;
        }
        
        .header h1 {
            color: var(--color-light);
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        
        .header p {
            color: var(--color-light);
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 14px;
        }
        
        .content {
            padding: 30px;
        }
        
        .alert-box {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            text-align: center;
        }
        
        .alert-box h2 {
            color: #155724;
            margin: 0 0 10px 0;
            font-size: 20px;
        }
        
        .alert-box p {
            color: #155724;
            margin: 0;
            font-size: 16px;
        }
        
        .user-info {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 25px;
            margin: 25px 0;
        }
        
        .user-info h3 {
            color: var(--color-primary);
            margin: 0 0 20px 0;
            font-size: 18px;
            border-bottom: 2px solid var(--color-secondary);
            padding-bottom: 10px;
        }
        
        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e9ecef;
        }
        
        .info-row:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-weight: bold;
            color: var(--color-dark);
            min-width: 120px;
        }
        
        .info-value {
            color: #495057;
            flex: 1;
            text-align: right;
        }
        
        .stats-box {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
            color: var(--color-light);
            padding: 20px;
            border-radius: 8px;
            margin: 25px 0;
            text-align: center;
        }
        
        .stats-box h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
        }
        
        .stats-box p {
            margin: 0;
            font-size: 14px;
            opacity: 0.9;
        }
        
        .action-buttons {
            text-align: center;
            margin: 30px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 25px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            font-size: 14px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
            color: var(--color-light);
        }
        
        .btn-secondary {
            background-color: #6c757d;
            color: var(--color-light);
        }
        
        .footer {
            background-color: var(--color-dark);
            color: var(--color-light);
            padding: 20px;
            text-align: center;
            font-size: 12px;
        }
        
        .timestamp {
            color: #6c757d;
            font-size: 12px;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>🔔 Nuevo Registro en ADVIS</h1>
            <p>Notificación del Sistema</p>
        </div>
        
        <!-- Content -->
        <div class="content">
            <div class="alert-box">
                <h2>¡Nuevo Usuario Registrado!</h2>
                <p>Se ha registrado un nuevo usuario en la plataforma ADVIS</p>
            </div>
            
            <div class="user-info">
                <h3>📋 Información del Usuario</h3>
                
                <div class="info-row">
                    <span class="info-label">Nombre:</span>
                    <span class="info-value">{{ $userData['name'] }} {{ $userData['lastname'] }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Email:</span>
                    <span class="info-value">{{ $userData['email'] }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Teléfono:</span>
                    <span class="info-value">{{ $userData['phone'] }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Empresa:</span>
                    <span class="info-value">{{ $userData['company'] }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Fecha de Registro:</span>
                    <span class="info-value">{{ now()->format('d/m/Y H:i:s') }}</span>
                </div>
            </div>
            
            <div class="stats-box">
                <h3>📊 Estado de la Cuenta</h3>
                <p>Prueba gratuita activa - Expira el 01 de Diciembre de 2025</p>
            </div>
            
            <div class="action-buttons">
                <a href="#" class="btn btn-primary">Ver Perfil Completo</a>
                <a href="#" class="btn btn-secondary">Panel de Administración</a>
            </div>
            
            <div class="timestamp">
                Notificación enviada el {{ now()->format('d/m/Y') }} a las {{ now()->format('H:i:s') }}
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p><strong>ADVIS</strong> - Sistema de Gestión de Visitas | IP Media River</p>
            <p>Este es un email automático del sistema de notificaciones</p>
        </div>
    </div>
</body>
</html>
