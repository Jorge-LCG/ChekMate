@extends('layouts.landing')

@section('title', 'Página principal')

@section('content')
    <section class="px-6 py-10 bg-gray-50 rounded-lg shadow" id="servicio">
        <x-section-header
            title="Nuestros Servicios en"
            description="ChekMate te ayuda a mantener tus tareas bajo control y visualizar tu progreso con un calendario simple e intuitivo."
        />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <x-service-card
                icon="fa-solid fa-list-check"
                title="Gestión de Tareas" 
                description="Crea, organiza y marca tus tareas fácilmente con nuestra interfaz intuitiva y eficiente."
                badge="Más productividad"
            />
            
            <x-service-card
                icon="fa-solid fa-calendar-days"
                title="Calendario Integrado" 
                description="Visualiza tus pendientes en un calendario práctico y nunca pierdas de vista tus fechas importantes."
                badge="Mejor organización"
            />
            
            <x-service-card 
                icon="fa-solid fa-bell"
                title="Enfoque y Recordatorios" 
                description="Mantente al día y no olvides lo importante con nuestro sistema de notificaciones inteligente."
                badge="Sin olvidos"
            />
        </div>
    </section>

    <section class="mt-5 md:mt-16 p-6 max-w-4xl mx-auto" id="contacto">
        <x-section-header
            title="Contáctanos en"
            description="Estamos aquí para ayudarte. Déjanos tu mensaje y te responderemos pronto"
        />

        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nombre completo</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                        placeholder="Ingresa tu nombre completo"
                    />
                </div>
                        
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Teléfono <span class="text-orange-500">(opcional)</span></label>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                        placeholder="+51 999 999 999"
                    />
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Correo electrónico</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg"
                    placeholder="ejemplo@correo.com"
                />
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Mensaje</label>
                <textarea 
                    id="content" 
                    name="content" 
                    rows="5"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg resize-none"
                >
                </textarea>
            </div>

            <div class="text-center pt-4">
                <button type="submit" class="cursor-pointer inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-medium px-8 py-3 rounded-full transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-paper-plane mr-2"></i>
                    Enviar mensaje
                </button>
            </div>
        </form>
    </section>
@endsection