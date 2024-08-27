@extends('layouts.admin.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div>
        <section class="py-24 flex items-center justify-center ">
            <div class="mx-auto max-w-[43rem]">
                <div class="text-center">
                    <p class="text-lg font-medium leading-8 text-primarybase">Selamat datang, admin!</p>
                    <h1 class="mt-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-black">Dashboard storease.
                    </h1>
                    <p class="mt-3 text-lg leading-relaxed text-slate-400">Kelola dan manajemen konten-konten yang ada di
                        website profile — storease.</p>
                </div>

                <div class="mt-6 flex items-center justify-center gap-4">
                    <a href="{{ route('admin.dashboard.partner') }}"
                        class="transform rounded-md bg-primarybase px-5 py-3 font-medium text-white transition-colors hover:bg-indigo-700">Tambah
                        vendor</a>
                    <a href="{{ route('admin.dashboard.cms.hero') }}"
                        class="transform rounded-md border border-slate-200 px-5 py-3 font-medium text-slate-900 transition-colors hover:bg-slate-50">
                        Kelola hero section </a>
                </div>
            </div>
        </section>
    </div>
@endsection
