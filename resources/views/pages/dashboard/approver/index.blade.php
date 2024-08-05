@extends('layouts.approver.app')

@section('title', 'Approver | Dashboard')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Manajemen Persetujuan</h1>
            </div>
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <a class="invisible" ref="{{ route('admin.dashboard.booking.add') }}">
                    <button
                        class="px-3 py-2 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                        <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden lg:block">Tambah data</span>
                    </button>
                </a>
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
                                                Kendaraan
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Durasi
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Keperluan
                                            </th>
                                            <th scope="col"
                                                class="hidden lg:table-cell px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Asal
                                            </th>
                                            <th scope="col"
                                                class="hidden lg:table-cell px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Tujuan
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Nama Driver
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Status
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-center text-gray-100 ">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200  ">
                                        @foreach ($vehicle_bookings as $vehicle_booking)
                                            <tr>
                                                <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                    {{ $loop->iteration }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                    {{ $vehicle_booking['nama_kendaraan'] }} -
                                                    {{ $vehicle_booking['plat_nomor'] }} </td>
                                                <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                    {{ $vehicle_booking['durasi'] }} hari</td>
                                                <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                    {{ $vehicle_booking['keperluan'] }}</td>
                                                <td
                                                    class="hidden lg:table-cell px-4 py-4 text-sm text-gray-500 text-center ">
                                                    {{ $vehicle_booking['asal'] }}</td>
                                                <td
                                                    class="hidden lg:table-cell px-4 py-4 text-sm text-gray-500 text-center ">
                                                    {{ $vehicle_booking['tujuan'] }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                    {{ $vehicle_booking['nama_driver'] }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500 text-center ">
                                                    {{ $vehicle_booking['approval_status'] }}</td>
                                                <td class="px-4 py-4 text-sm text-center">
                                                    @if ($vehicle_booking['approval_status'] !== 'Disetujui')
                                                        <form
                                                            action="{{ route('approver.dashboard.booking.update-status', $vehicle_booking['approval_processes_id']) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit"
                                                                class="px-3 py-2 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-800 ">Setujui</button>
                                                        </form>
                                                    @else
                                                        <p class="px-3 py-2 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400">
                                                            Disetujui
                                                        </p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
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
