@extends('layouts.admin.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Dashboard</h1>
            </div>

            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2 invisible">
                <button
                    class="px-3 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                    <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden lg:block p-2 ">Tambah partner</span>
                </button>
            </div>
        </div>

        <div class="">
            <form action="{{ route('admin.dashboard.cms.footer.update') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-3">
                    <div class="my-2">
                        <label for="detail_address_storease"
                            class="block text-gray-800 text-lg font-semibold mb-2">Alamat</label>
                        <input type="text" name="detail_address_storease" id="detail_address_storease" required
                            placeholder="Masukkan jumlah penyetuju" value="{{ $contacts->detail_address_storease }}"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                        <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">alamat</span>
                            website!</p>
                    </div>
                    <div class="my-2">
                        <label for="location_storease" class="block text-gray-800 text-lg font-semibold mb-2">Kota</label>
                        <input type="text" name="location_storease" id="location_storease" required
                            placeholder="Masukkan jumlah penyetuju" value="{{ $contacts->location_storease }}"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                        <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">kota</span>
                            website!</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-3">
                    <div class="my-2">
                        <label for="whatsapp_number_storease" class="block text-gray-800 text-lg font-semibold mb-2">Nomor
                            hp</label>
                        <input type="text" name="whatsapp_number_storease" id="whatsapp_number_storease" required
                            placeholder="Masukkan jumlah penyetuju" value="{{ $contacts->whatsapp_number_storease }}"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                        <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">nomor hp</span>
                            website!</p>
                    </div>
                    <div class="my-2">
                        <label for="email_storease" class="block text-gray-800 text-lg font-semibold mb-2">Alamat
                            email</label>
                        <input type="text" name="email_storease" id="email_storease" required
                            placeholder="Masukkan jumlah penyetuju" value="{{ $contacts->email_storease }}"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                        <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">email</span>
                            website!</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-3">
                    <div class="my-2">
                        <label for="operational_schedule_date" class="block text-gray-800 text-lg font-semibold mb-2">Hari
                            kerja</label>
                        <input type="text" name="operational_schedule_date" id="operational_schedule_date" required
                            placeholder="Masukkan jumlah penyetuju" value="{{ $contacts->operational_schedule_date }}"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                        <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">hari kerja</span>
                            website!</p>
                    </div>
                    <div class="my-2">
                        <label for="operational_schedule_hour" class="block text-gray-800 text-lg font-semibold mb-2">Jam
                            kerja</label>
                        <input type="text" name="operational_schedule_hour" id="operational_schedule_hour" required
                            placeholder="Masukkan jumlah penyetuju" value="{{ $contacts->operational_schedule_hour }}"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                        <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">jam kerja</span>
                            website!</p>
                    </div>
                </div>
                <button
                    class="w-full text-md px-4 py-3 mt-2 border-2 border-gray-200 rounded-lg text-gray-100 focus:ring-orange-600 bg-primarybase"
                    type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
