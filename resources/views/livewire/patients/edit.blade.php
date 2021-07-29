<form class="w-full max-w-lg" wire:submit.prevent="submit">
    <input type="hidden" name="patient_id" wire:model="patient.id">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                First Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('patient.first_name') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                type="text"
                wire:model="patient.first_name"
            >
            @error('patient.first_name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Last Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('patient.last_name') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                type="text"
                wire:model="patient.last_name"
            >
            @error('patient.last_name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Email
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('patient.email') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                type="email"
                wire:model="patient.email"
            >
            @error('patient.email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Date of Birth
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('patient.birthday') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                type="date"
                wire:model="patient.birthday"
            >
            @error('patient.birthday')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Medical History
            </label>
            <textarea
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('patient.medical_history') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                wire:model="patient.medical_history"
            ></textarea>
            @error('patient.medical_history')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Allergies
            </label>
            <textarea
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('patient.allergies') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                wire:model="patient.allergies"
            ></textarea>
            @error('patient.allergies')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Family Background
            </label>
            <textarea
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('patient.family_background') border-red-500 @else border-gray-200 focus:border-gray-500 @enderror"
                wire:model="patient.family_background"
            ></textarea>
            @error('patient.family_background')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div>
        <button
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit"
        >
            Update
        </button>
    </div>
</form>
