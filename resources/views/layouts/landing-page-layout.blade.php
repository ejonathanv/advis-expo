<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
		<meta name="generator" content={Astro.generator} />
		<title>ADVIS - Sistema de Gestión de Visitas</title>
		<meta name="description" content="ADVIS es un sistema de gestión de visitas que facilita el acceso de visitantes a través de QR generados por el sistema." />

		<!-- Alpine.js -->
		<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

		<!-- Tailwind CSS -->
		<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

		<style>
			:root {
				--color-primary: #0C1C7D;
				--color-secondary: #438ACC;
				--color-light: #FFFFFF;
				--color-dark: #1E202F;
			}
		</style>

		<!-- Lordicon -->
		<script src="https://cdn.lordicon.com/lordicon.js"></script>
	</head>
	<body class="min-h-screen bg-gray-50 pt-[72px]">
		{{ $slot }}
	</body>
</html>