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

        <livewire:contact-mail />
    </section>
@endsection