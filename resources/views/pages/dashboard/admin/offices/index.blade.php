@extends('layouts.admin.app')

@section('title', 'Admin | Kantor')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Manajemen Kantor</h1>
            </div>
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <button
                    class="px-3 py-2 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                    <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden lg:block">Tambah kantor</span>
                </button>
            </div>
        </div>
        <div>
            <div class="grid grid-cols-1">
                <div class="flex flex-col">
                    <div class="lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 ">
                                    <thead class="bg-orange-600 ">
                                        <tr>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Nama kantor
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Wilayah
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Provinsi
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Tipe kantor
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200  ">
                                        <tr>
                                            <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                1</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                Kantor Nickel V1</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                Jawa Bali</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                Jawa Timur</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                Kantor Pusat</td>
                                            <td class="px-4 py-4 text-sm text-center">
                                                <button
                                                    class="text-gray-500 px-1 transition-colors duration-200   hover:text-indigo-500 focus:outline-none">
                                                    Ubah
                                                </button>
                                                <button
                                                    class="text-gray-500 px-1 transition-colors duration-200   hover:text-indigo-500 focus:outline-none">
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
