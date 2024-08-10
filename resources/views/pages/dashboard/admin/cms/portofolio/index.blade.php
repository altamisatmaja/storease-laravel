@extends('layouts.admin.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Kelola Portofolio</h1>
            </div>

            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <a href="{{ route('admin.dashboard.cms.portofolio.create') }}">
                    <button
                        class="px-3 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                        <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden lg:block p-2 ">Tambah portofolio</span>
                    </button>
                </a>
            </div>
        </div>

        <!-- Cards -->
        <section class="container mx-auto">
            <div class="flex flex-col">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 ">
                                <thead class="bg-gray-50 ">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            <div class="flex items-center gap-x-3">
                                                <button class="flex items-center gap-x-2">
                                                    <span>No</span>
                                                </button>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            link_social_media_portofolio
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            thumbnail_portofolio
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            hover_portofolio
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200  ">
                                    @foreach ($portofolios as $portofolio)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700  whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <span>{{ $loop->iteration }}</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                {{ $portofolio->link_social_media_portofolio }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                <div class="flex items-center gap-x-2">
                                                    <img class="object-cover w-8 h-8 rounded-full"
                                                        src="{{ asset('uploads/' . $portofolio->thumbnail_portofolio) }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                <div class="flex items-center gap-x-2">
                                                    <img class="object-cover w-8 h-8 rounded-full"
                                                        src="{{ asset('uploads/' . $portofolio->hover_portofolio) }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-6">
                                                    <a
                                                        href="{{ route('admin.dashboard.cms.portofolio.edit', $portofolio->id) }}">
                                                        <button
                                                            class="text-gray-500 transition-colors duration-200   hover:text-indigo-500 focus:outline-none">
                                                            Ubah
                                                        </button>
                                                    </a>

                                                    <form
                                                        action="{{ route('admin.dashboard.cms.portofolio.destroy', $portofolio->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-red-500 transition-colors duration-200 hover:text-red-700 focus:outline-none"
                                                            onclick="return confirm('Are you sure you want to delete this vendor?')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
