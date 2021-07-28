<form class="w-full max-w-lg" wire:submit.prevent="submit">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Full Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                type="text"
                wire:model="name"
            >
            @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Email
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('email') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                type="email"
                wire:model="email"
            >
            @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Password
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('password') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                type="password"
                wire:model="password"
            >
            @error('password')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                Role
            </label>
            <div class="relative">
                <select
                    class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model="role_id"
                >
                    <option style="display: none;" label=" ">Select a role</option>
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role_id')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div>
        <button
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit"
        >
            Create
        </button>
    </div>
</form>
