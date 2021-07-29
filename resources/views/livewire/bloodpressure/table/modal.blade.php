<!--Overlay-->
<div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
     :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
    <div
        class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6"
        x-show="showModal"
        @click.outside="showModal = false"

        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
    >

        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Add a New Record</p>
            <div class="cursor-pointer z-50" @click="showModal = false">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                     viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </div>
        </div>

        <form class="w-full max-w-sm" x-show="showModal" wire:submit.prevent="save">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Date
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        type="date"
                        wire:model="date"
                    >
                    @error('date')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Diastolic
                    </label>
                </div>
                <div class="w-20">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        type="number"
                        wire:model="diastolic"
                    >
                    @error('diastolic')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Systolic
                    </label>
                </div>
                <div class="w-20">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        type="number"
                        wire:model="systolic"
                    >
                    @error('systolic')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Pulse
                    </label>
                </div>
                <div class="w-20">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        type="number"
                        wire:model="pulse"
                    >
                    @error('pulse')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Observations
                    </label>
                </div>
                <div class="md:w-2/3">
                    <textarea
                        class="appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 mb-0 leading-tight focus:outline-none border-gray-200 focus:border-gray-500"
                        form="edit-form"
                        wire:model="observations"
                    ></textarea>
                    @error('observations')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end pt-2 space-x-2">
                <button
                    class="text-sm bg-green-300 hover:bg-green-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Save
                </button>
                <button
                    class="text-sm bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                    @click="showModal = false"
                >
                    Close
                </button>
            </div>
        </form>
    </div>
</div>
