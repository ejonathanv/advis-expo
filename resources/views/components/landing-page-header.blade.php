<header class="fixed top-0 left-0 right-0 flex items-center bg-white py-4 shadow-md z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('img/logo-advis.svg') }}" alt="Logo" width="120" height="40" />
            </div>

            <!-- Navegación -->
            <nav class="hidden md:block">
                <ul class="flex items-center gap-6">
                    <li>
                        <a href="#funcionalidades" class="text-gray-600 hover:text-primary">Características</a>
                    </li>
                    <li>
                        <a href="#beneficios" class="text-gray-600 hover:text-primary">Beneficios</a>
                    </li>
                    <li>
                        <a href="#reportes" class="text-gray-600 hover:text-primary">Reportes</a>
                    </li>
                    <li>
                        <a href="#precios" class="text-gray-600 hover:text-primary">Precios</a>
                    </li>
                </ul>
            </nav>

            <!-- Botón de registro -->
            <button class="bg-primary text-white px-6 py-2 rounded-md hover:bg-[var(--color-secondary)] transition-colors">
                1 Mes Gratis
            </button>
        </div>
    </div>
</header>