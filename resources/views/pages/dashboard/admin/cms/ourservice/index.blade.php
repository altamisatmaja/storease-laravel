@extends('layouts.admin.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Kelola servis anda</h1>
            </div>

            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <a href="{{ route('admin.dashboard.cms.ourservice.create') }}">
                    <button
                        class="px-3 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                        <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden lg:block p-2 ">Tambah services</span>
                    </button>
                </a>
            </div>
        </div>

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
                                                <input type="checkbox" class="text-blue-500 border-gray-300 rounded   ">
                                                <button class="flex items-center gap-x-2">
                                                    <span>No</span>
                                                </button>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Layanan
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Owner
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Provinsi Vendor
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200  ">
                                    @foreach ($ourservices as $ourservice)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700  whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <span>{{ $loop->iteration }}</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">Jan
                                                6, 2022</td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 ">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <h2 class="text-sm font-normal">Paid</h2>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                <div class="flex items-center gap-x-2">
                                                    <img class="object-cover w-8 h-8 rounded-full"
                                                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                                        alt="">
                                                    <div>
                                                        <h2 class="text-sm font-medium text-gray-800  ">Arthur
                                                            Melo</h2>
                                                        <p class="text-xs font-normal text-gray-600 ">
                                                            authurmelo@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                Monthly subscription</td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-6">
                                                    <button
                                                        class="text-gray-500 transition-colors duration-200   hover:text-indigo-500 focus:outline-none">
                                                        Archive
                                                    </button>

                                                    <button
                                                        class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Download
                                                    </button>
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
