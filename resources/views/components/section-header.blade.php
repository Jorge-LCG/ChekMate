@props(['title', 'description'])

<div class="text-center max-w-3xl mx-auto mb-12">
    <h2 class="font-bold text-3xl mb-4">
        {{ $title }} <span class="text-orange-500">ChekMate</span>
    </h2>
    <p class="text-gray-600 font-medium text-lg leading-relaxed">
        {{ $description }}
    </p>
</div>