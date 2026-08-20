<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App de recordatorio de medicinas</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-new">
    <header class="w-full bg-[#ece7e7] sticky top-0 z-50 px-6 py-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <!-- 2. NAVEGACIÓN (Centro - Se oculta en celulares) -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-700">
                <a href="/" class="hover:text-indigo-400 transition">Sobre mí</a>
                <a href="https://www.linkedin.com/in/cinthia-canul-canche-2b1a84377" class="hover:text-indigo-400 transition">Linkedin</a>
            </nav>

            <!-- 3. ACCIONES Y SOCIAL (Derecha) -->
            <div class="flex items-center gap-4">
            <!-- Icono GitHub -->
                <a href="https://github.com/tu-usuario" target="_blank" class="text-slate-400 hover:text-white transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><!-- SVG GitHub --></svg>
                </a>

            </div>

        </div>
    </header>
    <main>
        <div id="about">
            <div class="white">
                <h1 class="title">App de recordatorio de medicinas</h1>
            </div>
            <div class="principal">
                <p class="standar">
                    He diseñado y desarrollado una aplicación híbrida funcional enfocada 
                    en ayudar a los usuarios a gestionar sus tratamientos médicos y mejorar 
                    la adherencia a la medicación. La aplicación ofrece una interfaz intuitiva 
                    para registrar medicamentos, establecer horarios de toma detallados y recibir 
                    recordatorios automatizados.
                </p><br>
                <p class="standar">
                    Utilicé el framework Ionic combinado con Angular para crear una aplicación multiplataforma. 
                    Esto permitió optimizar el tiempo de desarrollo y ofrecer una experiencia de usuario 
                    consistente tanto en iOS como en Android, aprovechando los componentes de UI de Ionic 
                    para un aspecto nativo.
                </p><br>
                <p class="standar">
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
    <div id="mockups" class="gridlow">
        <div>
            <img src="/images/p2/img_m1.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
        </div>
        <div class="item item-2">
            <img src="/images/p2/img_m2.webp" class="tarjeta-proyecto " alt="Imagen del proyecto" >
        </div>
        <div>
           <img src="/images/p2/img_m3.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
        </div>
        <div>
            <img src="/images/p2/img_m5.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
        </div>
    </div>

    <div class="bg-whiteopacity">
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