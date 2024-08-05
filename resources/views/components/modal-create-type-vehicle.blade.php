<!-- Search button -->
<div x-data="{ formTypeOpen: false }" class="relative">
    <!-- Button -->
    <button
        class="px-3 py-2 lg:gap-x-2 font-medium text-sm inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2 border-gray-200 hover:border-gray-300 text-gray-400"
        @click.prevent="formTypeOpen = true"
        aria-controls="modal-create-type-vehicle">
        <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
            <path
                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
        </svg>
        <span class="hidden lg:block">Tambah jenis</span>
    </button>
    <!-- Modal backdrop -->
    <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-40 transition-opacity" x-show="formTypeOpen"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak></div>
    <!-- Modal dialog -->
    <div id="modal-create-type-vehicle"
        class="fixed inset-0 z-50 overflow-hidden flex items-center top-20 mb-4 justify-center px-4 sm:px-6"
        role="dialog" aria-modal="true" x-show="formTypeOpen" x-transition:enter="transition ease-in-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in-out duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4" x-cloak>
        <div class="bg-white border border-transparent overflow-auto max-w-2xl w-full max-h-full rounded-lg shadow-lg"
            @click.outside="formTypeOpen = false" @keydown.escape.window="formTypeOpen = false">
            <!-- Search form -->
            <form class="border-b border-gray-200">
                <div class="relative">
                    <div class="bg-white p-4 rounded-lg w-full">
                        <h1 class="text-xl font-semibold mb-4">Tambah jenis</h1>
                        <p class="text-gray-600 mb-6">Jangan khawatir, data ini masih bisa diubah apabila terdapat kesalahan.</p>
                        <div class="mb-4">
                            <input type="text" placeholder="Masukkan nama type"
                                class="text-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:border-blue-500" />
                        </div>
                        <div class="grid grid-cols-2 gap-x-3 w-full">
                            <button type="submit" @click.prevent="formTypeOpen = false"
                                class="w-full text-gray-800 px-4 py-2 rounded-lg hover:bg-orange-600 ring-1 ring-orange-600 hover:text-white focus:outline-none">Save</button>
                            <button type="submit"
                                class="w-full bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-400 focus:outline-none">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
