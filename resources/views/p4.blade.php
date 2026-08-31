<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('icon.ico') }}">
    <title>App recertario</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-new">
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
                <h1 class="title">App recertario</h1>
            </div>
            
            <div class="bg-white/70 backdrop-blur-md p-6 sm:p-8 rounded-2xl shadow-md space-y-4 text-slate-700 leading-relaxed text-base sm:text-lg">
                <p>
                    El desarrollo fue construida con el framework Ionic y el entorno Vue 3, 
                    aprovechando componentes modernos e interfaces responsivas para brindar una experiencia 
                    fluida tanto en dispositivos móviles como en entornos web
                </p><br>
                <p >
                    Durante el proceso de desarrollo, se diseñaron vistas basadas en ejemplos 
                    encontrados en línea, lo que permitió establecer una referencia visual del producto final y 
                    facilitar la implementación de la interfaz. Entre las principales funcionalidades destacan la 
                    visualización de un carrusel de recetas, la clasificación por categorías (desayuno, comida y cena), 
                    la posibilidad de agregar recetas a una lista de favoritos y la opción de compartir 
                    recetas mediante el API de Capacitor/Share.
                    Además, la aplicación utiliza LocalStorage para almacenar de forma persistente 
                    las recetas guardadas por el usuario, garantizando que la información permanezca 
                    disponible incluso después de cerrar la aplicación. Este proyecto combina diseño, usabilidad 
                    y funcionalidad, integrando tecnologías web modernas con buenas prácticas de desarrollo frontend.
                </p>
            </div>
        </div>
        <div id="tools" class="bg-whiteopacity">
            <h1 class="subtitle">
                Herramientas y tecnologías utilizadas
            </h1>
            <ul class="list-disc pl-8 standar">
                <li>Framework Híbrido: Ionic Framework. </li>
                <li>Framework JavaScript: Vue.js.</li>
                <li>Paquetes Nativos / Capacitors:capacitor/share</li>
            </ul>
        </div>
    </main>
    <div id="mockups" class="grid grid-cols-1 md:grid-cols-4 gap-6 p-4 sm:p-6 my-8">
            <div>
                <img src="/images/p4/img_r1.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
            </div>
            <div>
                <img src="/images/p4/img_r2.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
            </div>
            <div>
                <img src="/images/p4/img_r3.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
            </div>
            <div>
                <img src="/images/p4/img_r4.webp" class="tarjeta-proyecto" alt="Imagen del proyecto" >
            </div>
    </div>

    <div class="bg-whiteopacity">
    <iframe
        class="aspect-video w-full rounded-lg" 
        src="https://www.youtube.com/embed/RgKele9BRNQ?feature=share" 
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