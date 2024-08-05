@extends('layouts.admin.app')

@section('title', 'Admin | Pemesanan')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Yuk, tambah data pemesanan!</h1>
            </div>
            <div class="grid invisible grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <a href="{{ route('admin.dashboard.booking.add') }}">
                    <button
                        class="px-3 py-2 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                        <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden lg:block">Tambah data</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="text-xl text-black">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="text-xl text-black">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="text-xl text-black">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mx-auto w-full max-w-full">
        <form action="{{ route('admin.dashboard.booking.store') }}" method="POST"
            class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
            @csrf
            <div class="">
                <div class="justify-between flex">
                    <label for="durasi" class="block text-gray-800 text-md font-semibold mb-2">Durasi *</label>
                    <p class="block text-gray-600 text-md font-medium mb-2">dalam hari</p>
                </div>
                <input type="number" name="durasi" id="durasi" value="{{ old('durasi') }}" required
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
            </div>
            <div>
                <label for="booked_at" class="block text-gray-800 text-md font-semibold mb-2">Tanggal pakai *</label>
                <input type="date" name="booked_at" id="booked_at" value="{{ old('booked_at') }}" required
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600"
                    min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
            </div>
            <div class="col-span-2">
                <label for="keperluan" class="block text-gray-800 text-md font-semibold mb-2">Keperluan*</label>
                <textarea name="keperluan" id="keperluan" required
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">{{ old('keperluan') }}</textarea>
            </div>
            <div class="my-2">
                <label for="start_from_mining_id" class="block text-gray-800 text-md font-semibold mb-2">Pool asal *</label>
                <select name="start_from_mining_id" id="start_from_mining_id"
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                    @foreach ($mining_states as $state)
                        <option value="{{ $state->id }}">{{ $state->nama_tambang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-2">
                <label for="end_to_mining_id" class="block text-gray-800 text-md font-semibold mb-2">Pool tujuan *</label>
                <select name="end_to_mining_id" id="end_to_mining_id"
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                    @foreach ($mining_states as $state)
                        <option value="{{ $state->id }}">{{ $state->nama_tambang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-2">
                <label for="employee_id" class="block text-gray-800 text-md font-semibold mb-2">Nama Driver *</label>
                <select name="employee_id" id="employee_id"
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->nama_lengkap }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-2">
                <label for="vehicle_id" class="block text-gray-800 text-md font-semibold mb-2">Kendaraan *</label>
                <select name="vehicle_id" id="vehicle_id"
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}">{{ $vehicle->nama }}, {{ $vehicle->plat_nomor }}</option>
                    @endforeach
                </select>
            </div>

            <div class="my-2">
                <label for="num_approvers" class="block text-gray-800 text-md font-semibold mb-2">Masukkan jumlah
                    penyetuju</label>
                <input type="number" id="num_approvers" min="2" max="5" required
                    placeholder="Masukkan jumlah penyetuju"
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
            </div>
            <div class="my-2">
                <label for="" class="invisible block text-gray-800 text-md font-semibold mb-2"> p</label>
                <button type="button" onclick="addApproverFields()"
                    class="w-full text-md px-4 py-3 border-2 border-orange-600 rounded-lg text-gray-800 focus:ring-orange-600">Set
                    jumlah</button>
            </div>

            <div id="approvers-container" class="col-span-2 my-2"></div>

            <div class="col-span-2">
                <button
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-100 focus:ring-orange-600 bg-orange-600"
                    type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const approvers = @json($approvers);
        let usedApprovers = [];

        function addApproverFields() {
            const numApprovers = document.getElementById('num_approvers').value;
            const container = document.getElementById('approvers-container');
            container.innerHTML = '';
            usedApprovers = [];

            for (let i = 0; i < numApprovers; i++) {
                const approverDiv = document.createElement('div');
                approverDiv.classList.add('approver', 'mb-4');

                const approverIdLabel = document.createElement('label');
                approverIdLabel.innerText = `Approver tahap ${i + 1}`;
                approverIdLabel.classList.add('block', 'text-gray-800', 'text-md', 'font-semibold', 'mb-2');

                const approverIdSelect = document.createElement('select');
                approverIdSelect.name = `approvers[${i}][approver_id]`;
                approverIdSelect.required = true;
                approverIdSelect.classList.add('w-full', 'text-md', 'px-4', 'py-3', 'border-2', 'border-gray-200',
                    'rounded-lg', 'text-gray-700', 'focus:ring-orange-600');
                approverIdSelect.onchange = () => updateApproverOptions(i);

                const defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.innerText = 'Pilih Approver';
                approverIdSelect.appendChild(defaultOption);

                approvers.forEach(approver => {
                    const option = document.createElement('option');
                    option.value = approver.id;
                    option.innerText = approver.nama_lengkap;
                    approverIdSelect.appendChild(option);
                });

                const levelLabel = document.createElement('label');
                levelLabel.innerText = `Level ${i + 1}`;
                levelLabel.classList.add('block', 'text-gray-800', 'text-md', 'font-medium', 'my-2');

                const levelInput = document.createElement('input');
                levelInput.type = 'number';
                levelInput.name = `approvers[${i}][level]`;
                levelInput.value = i + 1;
                levelInput.required = true;
                levelInput.classList.add('hidden', 'w-full', 'text-md', 'px-4', 'py-3', 'border-2', 'border-gray-200',
                    'rounded-lg', 'text-gray-700', 'focus:ring-orange-600');

                approverDiv.appendChild(approverIdLabel);
                approverDiv.appendChild(approverIdSelect);
                approverDiv.appendChild(levelLabel);
                approverDiv.appendChild(levelInput);

                container.appendChild(approverDiv);
            }
        }

        function updateApproverOptions(currentIndex) {
            usedApprovers = [];
            for (let i = 0; i <= currentIndex; i++) {
                const select = document.querySelector(`[name="approvers[${i}][approver_id]"]`);
                const value = select.value;
                if (value) {
                    usedApprovers.push(value);
                }
            }
            for (let i = 0; i < document.querySelectorAll('.approver').length; i++) {
                const select = document.querySelector(`[name="approvers[${i}][approver_id]"]`);
                const currentVal = select.value;
                console.log(currentVal);
                const options = select.querySelectorAll('option');
                options.forEach(option => {
                    if (usedApprovers.includes(option.value) && option.value !== currentVal) {
                        option.disabled = true;
                    } else {
                        option.disabled = false;
                    }
                });
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            if ('{{ old('num_approvers') }}') {
                document.getElementById('num_approvers').value = '{{ old('num_approvers') }}';
                addApproverFields();
            }
        });
    </script>
@endsection
