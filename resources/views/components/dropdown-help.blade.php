<div class="relative inline-flex" x-data="{ open: false }">
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf

        <a class="font-medium text-sm text-white hover:text-white flex items-center py-1 px-3"
            href="{{ route('logout') }}" @click.prevent="$root.submit();" @focus="open = true" @focusout="open = false">
            {{ __('Sign Out') }}
        </a>
    </form>
</div>
