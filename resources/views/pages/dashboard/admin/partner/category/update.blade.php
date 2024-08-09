@extends('layouts.admin.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Dashboard</h1>
            </div>

            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2 invisible">
                <a href="{{ route('admin.dashboard.partner.category.create') }}">
                    <button
                        class="px-3 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                        <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden lg:block p-2 ">Tambah vendor</span>
                    </button>
                </a>
            </div>
        </div>


        <div class="mx-auto w-full max-w-full">
            <form action="{{ route('admin.dashboard.partner.category.update', $category->slug) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="category_name">Nama Kategori *</label>
                        <input type="category_name" name="category_name" id="category_name"
                            placeholder="Masukkan nama kategori" value="{{ $category->category_name }}"
                            class="border p-2 rounded w-full h-10" />
                        @error('category_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-xl font-semibold text-white outline-none">
                        Ubah
                    </button>
                </div>
            </form>


        </div>
    @endsection
