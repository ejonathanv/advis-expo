<div class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <!-- Lado izquierdo -->
            <div class="space-y-8 text-white">
                <h1 class="text-5xl font-bold leading-tight">
                    Gestión de Visitas Inteligente con ADVIS
                </h1>
                
                <h2 class="text-2xl opacity-90">
                    Control de acceso seguro y eficiente para tu empresa
                </h2>
                
                <div class="space-y-6 text-lg opacity-85">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p>Control de visitantes vía citas y acceso sin cita con QR</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p>Notificaciones automáticas por correo electrónico</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p>Reportes detallados compatibles con C-TPAT</p>
                    </div>
                </div>

                <!-- Mini Contador -->
                <span class="mt-12font-semibold text-xl">La oferta termina en:</span>
                <p class="mt-5 text-white/80 flex items-center gap-2 text-xl"
                    x-data="{
                        targetDate: new Date('2025-11-01').getTime(),
                        now: new Date().getTime(),
                        days: '00',
                        hours: '00',
                        minutes: '00',
                        seconds: '00',
                        updateCounter() {
                            const now = new Date().getTime();
                            const distance = this.targetDate - now;
                            if (distance > 0) {
                                this.days = Math.floor(distance / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
                                this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
                                this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
                                this.seconds = Math.floor((distance % (1000 * 60)) / 1000).toString().padStart(2, '0');
                            }
                        }
                    }"
                    x-init="updateCounter(); setInterval(() => updateCounter(), 1000)"
                >
                    <span class="font-semibold text-[#FFD700]" x-text="days">00</span>d
                    <span class="font-semibold text-[#FFD700]" x-text="hours">00</span>h
                    <span class="font-semibold text-[#FFD700]" x-text="minutes">00</span>m
                    <span class="font-semibold text-[#FFD700]" x-text="seconds">00</span>s
                </p>
            </div>

            <!-- Formulario -->
            <div class="bg-white p-8 rounded-xl shadow-2xl">
                <div class="relative mb-8">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-secondary)] rounded-lg blur-sm opacity-25"></div>
                    <div class="relative bg-white rounded-lg p-4 border border-gray-100">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-bold bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-secondary)] bg-clip-text text-transparent">
                                Prueba ADVIS Gratis
                            </h3>
                            <div class="flex items-center gap-2">
                                <span class="text-sm text-gray-500 line-through">$99 USD</span>
                                <span class="bg-gradient-to-r from-[var(--color-primary)] to-[var(--color-secondary)] text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    1 Mes Gratis
                                </span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mt-2 font-bold">
                            Acceso completo a todas las funcionalidades
                        </p>
                    </div>
                </div>
                
                <form id="registro-form" class="space-y-4" action="{{ route('registration.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <input 
                            type="text" 
                            id="nombre-input"
                            name="name"
                            placeholder="Nombre" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--color-secondary)] focus:border-transparent" 
                            required
                        />
                        <input 
                            type="text" 
                            name="lastname"
                            placeholder="Apellido" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--color-secondary)] focus:border-transparent" 
                            required
                        />
                    </div>
                    
                    <input 
                        type="email" 
                        name="email"
                        placeholder="Correo Electrónico" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--color-secondary)] focus:border-transparent" 
                        required
                    />
                    <input 
                        type="tel" 
                        name="phone"
                        placeholder="Teléfono" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--color-secondary)] focus:border-transparent" 
                        required
                    />
                    <input 
                        type="text" 
                        name="company"
                        placeholder="Nombre de la Empresa" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--color-secondary)] focus:border-transparent" 
                        required
                    />
                    
                    <div class="flex items-center gap-2">
                        <input 
                            type="checkbox" 
                            id="terms" 
                            name="terms"
                            value="1"
                            class="rounded border-gray-300 text-[var(--color-primary)]" 
                            required
                        />
                        <label for="terms" class="text-sm text-gray-600">
                            Acepto los términos y condiciones
                        </label>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-secondary)] transition-colors"
                    >
                        Comenzar Prueba Gratuita
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
