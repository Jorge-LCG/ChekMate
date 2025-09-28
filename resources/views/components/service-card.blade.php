@props(['icon', 'title', 'description', 'badge'])

<div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
    <div class="p-6">
        <div class="bg-gradient-to-br from-orange-400 to-orange-500 w-14 h-14 rounded-2xl shadow-md flex items-center justify-center mb-4">
            <i class="{{ $icon }} text-white text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-800">{{ $title }}</h3>
        <p class="text-gray-600 leading-relaxed">{{ $description }}</p>
    </div>
    <div class="bg-gradient-to-r from-orange-50 to-orange-100 px-6 py-4">
        <div class="flex items-center text-orange-500 font-medium">
            <span>{{ $badge }}</span>
            <i class="fa-solid fa-arrow-right ml-2"></i>
        </div>
    </div>
</div>