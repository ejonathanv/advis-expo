<footer class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white">
    <div class="container mx-auto px-4">
        <!-- Sección Principal -->
        <div class="py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center border-b border-white/10">
            <!-- Logo y Slogan -->
            <div class="space-y-6">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/logo-advis-light.svg') }}" alt="Logo" width="120" height="40"/>
                </div>
                <p class="text-lg text-white/80 leading-relaxed">
                    Transformando la seguridad y el control de accesos en una experiencia digital inteligente.
                </p>
                <div class="flex items-center gap-2 text-sm text-white/60">
                    <lord-icon
                        src="https://cdn.lordicon.com/oqdmuxru.json"
                        trigger="loop"
                        colors="primary:#ffffff,secondary:#ffffff"
                        class="w-5 h-5 opacity-60"
                        style="width:20px;height:20px">
                    </lord-icon>
                    Un desarrollo de <a href="https://ipmediariver.com" target="_blank" class="text-white/80 hover:text-white transition-colors">IP Media River</a>
                </div>
            </div>

            <!-- Enlaces y Contacto -->
            <div class="grid grid-cols-2 gap-8">
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold">Empresa</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-white/70 hover:text-white transition-colors">Sobre Nosotros</a>
                        </li>
                        <li>
                            <a href="#" class="text-white/70 hover:text-white transition-colors">Características</a>
                        </li>
                        <li>
                            <a href="#" class="text-white/70 hover:text-white transition-colors">Precios</a>
                        </li>
                        <li>
                            <a href="#" class="text-white/70 hover:text-white transition-colors">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold">Legal</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-white/70 hover:text-white transition-colors">Términos de Servicio</a>
                        </li>
                        <li>
                            <a href="#" class="text-white/70 hover:text-white transition-colors">Política de Privacidad</a>
                        </li>
                        <li>
                            <a href="#" class="text-white/70 hover:text-white transition-colors">Aviso Legal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Derechos Reservados -->
        <div class="py-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white/60">
            <p>© {{ date('Y') }} ADVIS. Todos los derechos reservados.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-white transition-colors">Términos</a>
                <a href="#" class="hover:text-white transition-colors">Privacidad</a>
                <a href="#" class="hover:text-white transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>
