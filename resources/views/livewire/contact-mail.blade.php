<div>
    @if (session('success'))
        <div class="p-2 mb-4 font-medium text-center text-green-700 bg-green-100 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    <form class="space-y-6" wire:submit='save' novalidate>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nombre completo</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                    placeholder="Ingresa tu nombre completo"
                    wire:model='form.name'
                />
                <div>
                    @error('form.name') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
                    
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Teléfono <span class="text-orange-500">(opcional)</span></label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                    placeholder="999 999 999"
                    wire:model='form.phone'
                />
                <div>
                    @error('form.phone') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
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
                wire:model='form.email'
            />
            <div>
                @error('form.email') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Mensaje</label>
            <textarea 
                id="content" 
                name="content" 
                rows="5"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg resize-none"
                wire:model='form.content'
            >
            </textarea>
            <div>
                @error('form.content') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="text-center pt-4">
            <button type="submit" class="cursor-pointer inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-medium px-8 py-3 rounded-full transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                <i class="fa-solid fa-paper-plane mr-2"></i>
                Enviar mensaje
            </button>
        </div>
    </form>
</div>
