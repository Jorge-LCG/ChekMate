<div class="relative">
    <div class="flex items-center justify-between p-6">
        <a href="{{ route('chekmate') }}" class="flex items-center justify-center">
            <i class="fa-solid fa-clipboard-list text-2xl text-orange-500"></i>
            <h1 class="text-xl md:text-2xl font-extrabold">ChekMate</h1>
        </a>

        <button class="md:hidden bg-orange-500 rounded-lg py-1 px-2 hover:bg-amber-600 transition-colors duration-300 cursor-pointer" id="menu-btn">
            <i class="fa-solid fa-bars text-white"></i>
        </button>
        
        <nav class="hidden md:flex items-center justify-center gap-4 font-medium">
            <a href="{{ route('chekmate') }}" class="text-orange-500 hover:text-amber-600 transition-colors duration-300">Inicio</a>
            <a href="#servicio" class="hover:text-orange-500 transition-colors duration-300">Nuestro Servicio</a>
            <a href="#contacto" class="hover:text-orange-500 transition-colors duration-300">Contáctanos</a>
        </nav>

        <a href="#" class="hidden md:flex text-xs md:text-sm bg-orange-500 rounded-4xl px-3 py-2 text-white font-medium hover:bg-amber-600 transition-colors duration-300">Iniciar Sesión</a>
    </div>

    <nav id="menu-mobile" class="md:hidden hidden bg-white border-t border-gray-200 px-6 py-4">
        <div class="flex flex-col space-y-1.5 font-medium">
            <a href="{{ route('chekmate') }}" class="text-orange-500 py-2 hover:text-amber-600 transition-colors duration-300">Inicio</a>
            <a href="#servicio" class="py-2 hover:text-orange-500 transition-colors duration-300">Nuestro Servicio</a>
            <a href="#contacto" class="py-2 hover:text-orange-500 transition-colors duration-300">Contáctanos</a>
            <a href="#" class="py-2 hover:text-orange-500 transition-colors duration-300">Iniciar Sesión</a>
        </div>
    </nav>
</div>