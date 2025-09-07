<div class="bg-[var(--color-dark)] py-20">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-4xl mx-auto"
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
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                ¡No pierdas esta oportunidad única!
            </h2>
            
            <p class="text-xl text-gray-300 mb-12 leading-relaxed">
                Únete a las empresas que ya están modernizando su control de accesos con ADVIS.<br/>
                Obtén <span class="text-[var(--color-secondary)] font-semibold">1 mes GRATIS</span> registrándote antes de que termine la oferta.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 mb-12">
                <div class="bg-opacity-20 bg-white backdrop-blur-sm rounded-lg p-4 text-center">
                    <div class="text-4xl md:text-5xl font-bold text-[var(--color-secondary)] mb-2" x-text="days">00</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">Días</div>
                </div>
                <div class="bg-opacity-20 bg-white backdrop-blur-sm rounded-lg p-4 text-center">
                    <div class="text-4xl md:text-5xl font-bold text-[var(--color-secondary)] mb-2" x-text="hours">00</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">Horas</div>
                </div>
                <div class="bg-opacity-20 bg-white backdrop-blur-sm rounded-lg p-4 text-center">
                    <div class="text-4xl md:text-5xl font-bold text-[var(--color-secondary)] mb-2" x-text="minutes">00</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">Minutos</div>
                </div>
                <div class="bg-opacity-20 bg-white backdrop-blur-sm rounded-lg p-4 text-center">
                    <div class="text-4xl md:text-5xl font-bold text-[var(--color-secondary)] mb-2" x-text="seconds">00</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">Segundos</div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <button 
                    @click="
                        const headerHeight = 200; // altura del header en pixels
                        const form = document.getElementById('registro-form');
                        const formTop = form.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                        window.scrollTo({ top: formTop, behavior: 'smooth' });
                        setTimeout(() => document.getElementById('nombre-input').focus(), 800);
                    "
                    class="bg-[var(--color-secondary)] hover:bg-opacity-80 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all transform hover:scale-105 flex items-center gap-2 group"
                >
                    <span>Registrarme Ahora</span>
                    <lord-icon
                        src="https://cdn.lordicon.com/zmkotitn.json"
                        trigger="hover"
                        colors="primary:#ffffff"
                        class="w-6 h-6"
                        style="width:24px;height:24px">
                    </lord-icon>
                </button>
                <p class="text-gray-400">
                    <lord-icon
                        src="https://cdn.lordicon.com/hjeefwhm.json"
                        trigger="loop"
                        colors="primary:#438ACC"
                        class="w-5 h-5 inline-block mr-1"
                        style="width:20px;height:20px">
                    </lord-icon>
                    Sin tarjeta de crédito requerida
                </p>
            </div>
        </div>
    </div>
</div>
