@props([
    'align' => 'right',
])

<div class="relative inline-flex" x-data="{ open: false }">
    <button class="inline-flex  justify-center items-center group gap-x-5" aria-haspopup="true" @click.prevent="open = !open"
        :aria-expanded="open">
        <img class="w-8 h-8 rounded-full" src="https://avatars.githubusercontent.com/u/116476102?v=4" width="32" height="32" alt="" />
        <div class="flex items-center truncate">
            <span
                class="truncate text-md font-medium text-white mr-4 group-hover:text-gray-800 ">Admin</span>
            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 " viewBox="0 0 12 12">
                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
            </svg>
        </div>
    </button>
    <div class="origin-top-right z-10 absolute top-full -mr-48 sm:mr-0 min-w-80 bg-white  border border-gray-200  py-1.5 rounded-lg shadow-lg overflow-hidden mt-1 {{ $align === 'right' ? 'right-0' : 'left-0' }}"
        @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
        x-transition:enter="transition ease-out duration-200 transform"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" x-cloak>
        <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-gray-200 ">
            <div class="font-medium text-gray-800 "></div>
            <div class="text-xs text-gray-500  italic">Administrator</div>
        </div>
        <ul>
            <li>
                <a class="font-medium text-sm text-orange-500 hover:text-orange-600 dark:hover:text-orange-400 flex items-center py-1 px-3"
                    href="{{ route('logout') }}" @click="open = false" @focus="open = true"
                    @focusout="open = false">Settings</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="font-medium text-sm text-orange-500 hover:text-orange-600 dark:hover:text-orange-400 flex items-center py-1 px-3"
                        href="{{ route('logout') }}" @click.prevent="$root.submit();" @focus="open = true"
                        @focusout="open = false">
                        {{ __('Sign Out') }}
                    </a>
                </form>
            </li>
        </ul>
    </div>
</div>
