<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Registro Exitoso! - ADVIS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <style>
        :root {
            --color-primary: #0C1C7D;
            --color-secondary: #438ACC;
            --color-light: #FFFFFF;
            --color-dark: #1E202F;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <div class="gradient-bg py-6">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/logo-advis-light.svg') }}" alt="Logo" width="120" height="40" />
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            
            <!-- Success Card -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                
                <!-- Success Header -->
                <div class="gradient-bg py-16 text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-white opacity-10"></div>
                    <div class="relative z-10">
                        <div class="floating-animation mb-8">
                            <lord-icon
                                src="https://cdn.lordicon.com/lupuorrc.json"
                                trigger="loop"
                                colors="primary:#ffffff,secondary:#ffffff"
                                style="width:120px;height:120px;">
                            </lord-icon>
                        </div>
                        <h1 class="text-white text-4xl md:text-5xl font-bold mb-4">
                            ¡Registro Exitoso!
                        </h1>
                        <p class="text-white text-xl opacity-90">
                            Bienvenido a la familia ADVIS
                        </p>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 md:p-12">
                    
                    <!-- Welcome Message -->
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">
                            ¡Hola {{ session('registration')->name ?? 'Usuario' }}!
                        </h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Tu cuenta ha sido creada exitosamente. Te hemos enviado un email de confirmación 
                            con todos los detalles de tu prueba gratuita.
                        </p>
                    </div>

                    <!-- Trial Info Card -->
                    <div class="bg-gradient-to-r from-green-50 to-blue-50 border border-green-200 rounded-xl p-8 mb-8">
                        <div class="flex items-center justify-center mb-6">
                            <lord-icon
                                src="https://cdn.lordicon.com/ryhtmsoc.json"
                                trigger="loop"
                                colors="primary:#10b981,secondary:#3b82f6"
                                style="width:60px;height:60px;margin-right:15px;">
                            </lord-icon>
                            <h3 class="text-2xl font-bold text-green-800">Prueba Gratuita Activada</h3>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-green-600 mb-2">1 Mes</div>
                                <div class="text-gray-600">Acceso completo</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">01 Dic 2025</div>
                                <div class="text-gray-600">Fecha de expiración</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <div class="bg-gray-800 text-white py-8 mt-16">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-400">
                © 2025 ADVIS - Sistema de Gestión de Visitas | IP Media River
            </p>
        </div>
    </div>
</body>
</html>
