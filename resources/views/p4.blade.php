<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App recertario</title>
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
                <h1 class="title">App recertario</h1>
            </div>
            
            <div class="principal">
                <p class="standar">
                    El desarrollo fue construida con el framework Ionic y el entorno Vue 3, 
                    aprovechando componentes modernos e interfaces responsivas para brindar una experiencia 
                    fluida tanto en dispositivos móviles como en entornos web
                </p><br>
                <p class="standar">
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
    <div id="mockups" class="gridlow">
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