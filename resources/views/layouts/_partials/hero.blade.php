<section class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center px-6 my-5 md:my-12">
    <div class="flex flex-col justify-center items-cemter md:items-start">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-center md:text-start">
            Convierte cada pendiente en un <span class="text-orange-400">logro</span> que te acerque a tus <span class="text-orange-500">metas</span>
        </h2>
        <p class="text-gray-700 leading-relaxed font-medium mb-6 text-center md:text-start">
            Conecta tus prioridades diarias con los resultados que quieres alcanzar. Organiza, enfócate y avanza paso a paso, porque cada tarea completada es un progreso real hacia tus objetivos más grandes.
        </p>
        <a href="#" class="bg-orange-500 text-center rounded-4xl px-4 py-2 text-white font-medium hover:bg-amber-600 transition-colors duration-300">
            Empieza ya!!
        </a>
    </div>

    <div class="flex items-center justify-center gap-6">
        <div class="flex-shrink-0">
            <picture>
                <source srcset="{{ asset('img/headerTask.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/headerTask.jpg') }}" type="image/jpeg">
                <img src="{{ asset('img/headerTask.jpg') }}" alt="Imagen principal" class="w-36 h-44 md:w-48 md:h-56 object-cover rounded-xl shadow-xl">
            </picture>
        </div>
        
        <div class="flex flex-col gap-6">
            <picture>
                <source srcset="{{ asset('img/headerTask.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/headerTask.jpg') }}" type="image/jpeg">
                <img src="{{ asset('img/headerTask.jpg') }}" alt="Imagen dos" class="w-32 h-36 md:w-48 md:h-48 object-cover rounded-xl shadow-xl">
            </picture>

            <picture>
                <source srcset="{{ asset('img/headerTask.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/headerTask.jpg') }}" type="image/jpeg">
                <img src="{{ asset('img/headerTask.jpg') }}" alt="Imagen tres" class="w-32 h-36 md:w-48 md:h-48 object-cover rounded-xl shadow-xl">
            </picture>
        </div>
    </div>
</section>