<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('icon.ico') }}">
    <title>App de recordatorio de medicinas</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-new">
    <!-- HEADER / NAVEGACIÓN -->
    <header class="w-full bg-[#ece7e7]/90 backdrop-blur-md sticky top-0 z-50 px-4 sm:px-6 py-4 border-b border-slate-200/50">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <nav class="flex items-center gap-6 sm:gap-8 text-sm font-medium text-slate-700">
                <a href="/" class="hover:text-indigo-600 transition">Sobre mí</a>
                <a href="https://www.linkedin.com/in/cinthia-canul-canche-2b1a84377" target="_blank" rel="noopener noreferrer" class="hover:text-indigo-600 transition">LinkedIn</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="https://github.com/tu-usuario" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-slate-900 transition" aria-label="GitHub">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <main class="max-w-5xl mx-auto px-4 sm:px-6 py-8 sm:py-12 space-y-12 sm:space-y-16">
        <div id="about" class="space-y-8">
            <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-lg border border-slate-100 text-center">
                <h1 class="title">App de recordatorio de medicinas</h1>
            </div>
            <div class="bg-white/70 backdrop-blur-md p-6 sm:p-8 rounded-2xl shadow-md space-y-4 text-slate-700 leading-relaxed text-base sm:text-lg">
                <p>
                    He diseñado y desarrollado una aplicación híbrida funcional enfocada 
                    en ayudar a los usuarios a gestionar sus tratamientos médicos y mejorar 
                    la adherencia a la medicación. La aplicación ofrece una interfaz intuitiva 
                    para registrar medicamentos, establecer horarios de toma detallados y recibir 
                    recordatorios automatizados.
                </p><br>
                <p >
                    Utilicé el framework Ionic combinado con Angular para crear una aplicación multiplataforma. 
                    Esto permitió optimizar el tiempo de desarrollo y ofrecer una experiencia de usuario 
                    consistente tanto en iOS como en Android, aprovechando los componentes de UI de Ionic 
                    para un aspecto nativo.
                </p><br>
                <p >
                    Implementé un sistema de notificaciones locales que funciona de forma autónoma en 
                    el dispositivo del usuario, sin depender de un servidor externo para los recordatorios;
                    la aplicación permite registrar el nombre del medicamento, descripción personalizada 
                    (ej. "tomar después del almuerzo"), fechas de inicio y fin, e incluso configurar múltiples 
                    tomas diarias con horarios, cantidades y unidades específicas (ej. "1 tableta a las 8:00 AM y 8:00 PM").
                </p><br>
            </div>
        </div>
        <div id="tools" class="bg-whiteopacity">
            <h1 class="subtitle">
                Herramientas y tecnologías utilizadas
            </h1>
            <ul class="list-disc pl-8 standar">
                <li>Framework Híbrido: Ionic Framework.</li>
                <li>Framework Frontend: Angular.</li>
                <li>Lenguaje: TypeScript.</li>
                <li>Gestión de Notificaciones Locales: Capacitor Plugins (@awesome-cordova-plugins/local-notifications).</li>  
            </ul>
        </div>
    </main>

    <div id="mockups" class="grid grid-cols-1 md:grid-cols-4 gap-6 p-4 sm:p-6 my-8">
    <!-- Primera imagen: Abarca 2 columnas en pantallas medianas/grandes -->
    <div>
        <img src="/images/p2/img_m1.webp" alt="Imagen del proyecto 1" loading="lazy">
    </div>
    
    <!-- Segunda y tercera imagen: 1 columna cada una -->
    <div >
        <img src="/images/p2/img_m2.webp"  alt="Imagen del proyecto 2" loading="lazy">
    </div>
    <div >
        <img src="/images/p2/img_m3.webp"  alt="Imagen del proyecto 3" loading="lazy">
    </div>
    
    <!-- Cuarta imagen: Abarca 2 columnas -->
    <div >
        <img src="/images/p2/img_m5.webp"  alt="Imagen del proyecto 4" loading="lazy">
    </div>
</div>

    <div class="bg-whiteopacity">
    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-4 text-center sm:text-left">Demostración en video</h2>
    <iframe 
        class="aspect-video w-full rounded-lg" 
        src="https://youtube.com/embed/Kf119jd58X8?feature=share" 
        title="Demo del Proyecto" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
    </div>

    <footer class="bg-[#adadad] text-black text-center p-4">
    <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
    </footer>
</body>
</html>