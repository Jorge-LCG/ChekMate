<div class="bg-black rounded-t-lg shadow-sm p-4">
    <div class="w-full mx-auto max-w-screen-xl p-4 text-center md:flex md:items-center md:justify-between">
        <span class="text-sm text-white text-center md:text-start">
            © {{ now()->year }} <a href="{{ route('chekmate') }}" class="hover:underline text-orange-500 font-medium">ChekMate™</a>. Todos los derechos reservados.
        </span>
        <ul class="flex flex-wrap items-center justify-center mt-3 text-sm font-medium text-white sm:mt-0">
            <li>
                <a href="{{ route('chekmate') }}" class="hover:underline me-4 md:me-6">Inicio</a>
            </li>
            <li>
                <a href="#servicio" class="hover:underline me-4 md:me-6">Nuestro Servicio</a>
            </li>
            <li>
                <a href="#contacto" class="hover:underline">Contáctanos</a>
            </li>
        </ul>
    </div>
</div>