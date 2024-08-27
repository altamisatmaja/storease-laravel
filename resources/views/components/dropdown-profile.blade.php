@props([
    'align' => 'right',
])

<div class="relative inline-flex" x-data="{ open: false }">
    <button class="inline-flex  justify-center items-center group gap-x-5" aria-haspopup="true"
        @click.prevent="open = !open" :aria-expanded="open">
        <img class="w-8 h-8 rounded-full" src="https://i.pinimg.com/236x/bd/c1/e5/bdc1e5e427351857e07a44b7eef254b6.jpg"
            width="32" height="32" alt="" />

    </button>
</div>
