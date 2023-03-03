<div class="bg-white px-10 py-5 rounded-xl shadow-lg">
    <div class="flex justify-between space-x-8">
        <div>
            <input 
                wire:model="password"
                @if($showPassword) type="text" @else type="password" @endif
                class="w-56 border-2 border-gray-300 py-2 px-4 rounded-lg active:border-none"
                placeholder="Type a password"
            >
            <button
                wire:click="togglePassword"
                @empty($password) disabled @endempty
                class="bg-gray-400 text-white py-2 px-4 border-2 border-gray-300 rounded-lg disabled:opacity-50"
            >
                @if($showPassword) hide @else show @endif
            </button>
        </div>
        <button 
        wire:click="generatePassword"
        class="bg-gray-700 py-2 px-4 text-gray-100 rounded-lg font-bold"
        >Generate password</button>
    </div>
</div>
