<ul class="space-y-2">
    <li
        class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600 hover:text-white duration-200">
        <a href="{{ route('admin.dashboard') }}" class="block text-gray-800 hover:text-white truncate transition">
            <div class="flex items-center hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                    fill="currentColor" class="hover:text-white">
                    <path fill-rule="evenodd" clip-rule="evenodd" class="hover:text-white"
                        d="M200-520q-33 0-56.5-23.5T120-600v-160q0-33 23.5-56.5T200-840h160q33 0 56.5 23.5T440-760v160q0 33-23.5 56.5T360-520H200Zm0 400q-33 0-56.5-23.5T120-200v-160q0-33 23.5-56.5T200-440h160q33 0 56.5 23.5T440-360v160q0 33-23.5 56.5T360-120H200Zm400-400q-33 0-56.5-23.5T520-600v-160q0-33 23.5-56.5T600-840h160q33 0 56.5 23.5T840-760v160q0 33-23.5 56.5T760-520H600Zm0 400q-33 0-56.5-23.5T520-200v-160q0-33 23.5-56.5T600-440h160q33 0 56.5 23.5T840-360v160q0 33-23.5 56.5T760-120H600ZM200-600h160v-160H200v160Zm400 0h160v-160H600v160Zm0 400h160v-160H600v160Zm-400 0h160v-160H200v160Zm400-400Zm0 240Zm-240 0Zm0-240Z" />
                </svg>
                <span class="text-lg font-medium ml-4">Dashboard</span>
            </div>
        </a>
    </li>
    <li class="mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))]" x-data="{ open: {{ in_array(Request::segment(1), ['pengajuan']) ? 1 : 0 }} }">
        <a class="block rounded-lg pl-3 pr-3 py-2 text-gray-800 hover:bg-orange-600  truncate transition @if (!in_array(Request::segment(1), ['pengajuan'])) {{ 'hover:text-white ' }} @endif"
            href="#0" @click.prevent="open = !open; sidebarExpanded = true">
            <div class="flex items-center justify-between">
                <div class="flex items-center duration-200">
                    <svg class="hover:text-white" xmlns="http://www.w3.org/2000/svg" height="30px"
                        viewBox="0 -960 960 960" width="30px" fill="currentColor">
                        <path class="hover:text-white" fill-rule="evenodd" clip-rule="evenodd"
                            d="M229.41-160.67q-49.41 0-84.08-34.61-34.66-34.61-34.66-84.05H73.33q-14.16 0-23.75-9.59Q40-298.5 40-312.67v-420.66q0-27 19.83-46.84Q79.67-800 106.67-800h506q27.5 0 47.08 19.58 19.58 19.59 19.58 47.09v98H756q15.83 0 30 7.08t23.33 19.58l104 138.34q3.34 4.16 5 9.16 1.67 5 1.67 10.84v137.66q0 14.17-9.58 23.75-9.59 9.59-23.75 9.59H846q0 49.33-34.59 84-34.59 34.66-84 34.66t-84.08-34.61q-34.66-34.61-34.66-84.05H348q0 49.33-34.59 84-34.59 34.66-84 34.66Zm-.08-66.66q21.67 0 36.84-15.17 15.16-15.17 15.16-36.83 0-21.67-15.16-36.84-15.17-15.16-36.84-15.16-21.66 0-36.83 15.16-15.17 15.17-15.17 36.84 0 21.66 15.17 36.83 15.17 15.17 36.83 15.17ZM106.67-346H132q17-24 41.69-38.33 24.7-14.34 55-14.34Q259-398.67 284-384q25 14.67 42 38h286.67v-387.33h-506V-346Zm620.66 118.67q21.67 0 36.84-15.17 15.16-15.17 15.16-36.83 0-21.67-15.16-36.84-15.17-15.16-36.84-15.16-21.66 0-36.83 15.16-15.17 15.17-15.17 36.84 0 21.66 15.17 36.83 15.17 15.17 36.83 15.17Zm-48-202.67H860L756-568.67h-76.67V-430ZM360-540Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Reservasi</span>
                </div>
                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">
                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current   @if (in_array(Request::segment(1), ['pengajuan'])) {{ 'rotate-180' }} @endif"
                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                    </svg>
                </div>
            </div>
        </a>
        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
            <ul class="pl-8 mt-2 " :class="open ? '!block' : 'hidden'">
                <li class="mb-5 last:mb-0">
                    <a class="block pl-3 text-gray-500  hover:text-gray-700  transition truncate"
                        href="{{ route('admin.dashboard.booking') }}">
                        <div class="flex items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#6b7280">
                                <path
                                    d="M440-440H240q-17 0-28.5-11.5T200-480q0-17 11.5-28.5T240-520h200v-200q0-17 11.5-28.5T480-760q17 0 28.5 11.5T520-720v200h200q17 0 28.5 11.5T760-480q0 17-11.5 28.5T720-440H520v200q0 17-11.5 28.5T480-200q-17 0-28.5-11.5T440-240v-200Z" />
                            </svg>
                            <span class="text-lg font-medium ml-2">Pengajuan</span>
                        </div>
                    </a>
                </li>
                <li class="last:mb-0">
                    <a class="block pl-3 text-gray-500  hover:text-gray-700  transition truncate"
                        href="{{ route('admin.dashboard.booking.history') }}">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#6b7280">
                                <path
                                    d="M480-120q-126 0-223-76.5T131-392q-4-15 6-27.5t27-14.5q16-2 29 6t18 24q24 90 99 147t170 57q117 0 198.5-81.5T760-480q0-117-81.5-198.5T480-760q-69 0-129 32t-101 88h70q17 0 28.5 11.5T360-600q0 17-11.5 28.5T320-560H160q-17 0-28.5-11.5T120-600v-160q0-17 11.5-28.5T160-800q17 0 28.5 11.5T200-760v54q51-64 124.5-99T480-840q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480q0 75-28.5 140.5t-77 114q-48.5 48.5-114 77T480-120Zm40-376 100 100q11 11 11 28t-11 28q-11 11-28 11t-28-11L452-452q-6-6-9-13.5t-3-15.5v-159q0-17 11.5-28.5T480-680q17 0 28.5 11.5T520-640v144Z" />
                            </svg>
                            <span class="text-lg font-medium ml-2">Riwayat</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <li
        class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600 hover:text-white duration-200">
        <a href="{{ route('admin.dashboard.schedule-services') }}" class="block text-gray-800  truncate transition">
            <div class="flex items-center hover:text-white">
                <svg class="hover:text-white" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                    width="30px" fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd" class="hover:text-white"
                        d="m480-818 114-114q11-11 28-11t28 11q11 11 11 28t-11 28L508-734q-12 12-28 12t-28-12l-57-56q-12-11-11.5-27.5T395-846q12-12 28.5-12t28.5 12l28 28ZM120-60v-286q0-7 1-14t3-13l75-213q8-24 29-39t47-15h410q26 0 47 15t29 39l75 213q2 6 3 13t1 14v286q0 25-17.5 42.5T780 0q-25 0-42.5-17.5T720-60v-20H240v20q0 25-17.5 42.5T180 0q-25 0-42.5-17.5T120-60Zm112-380h496l-42-120H274l-42 120Zm-32 80v200-200Zm100 160q25 0 42.5-17.5T360-260q0-25-17.5-42.5T300-320q-25 0-42.5 17.5T240-260q0 25 17.5 42.5T300-200Zm360 0q25 0 42.5-17.5T720-260q0-25-17.5-42.5T660-320q-25 0-42.5 17.5T600-260q0 25 17.5 42.5T660-200Zm-460 40h560v-200H200v200Z" />
                </svg>
                <span class="text-lg font-medium ml-4">Jadwal Servis</span>
            </div>
        </a>
    </li>
    <li
        class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600 hover:text-white duration-200">
        <a href="{{ route('admin.dashboard.fuel') }}" class="block text-gray-800 hover:text-white truncate transition">
            <div class="flex items-center hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                    fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd" class="hover:text-white"
                        d="M160-153.33v-620q0-27 19.83-46.84Q199.67-840 226.67-840H486q27 0 46.83 19.83 19.84 19.84 19.84 46.84V-488h56.66q24.75 0 42.38 17.62 17.62 17.63 17.62 42.38v206q0 20.12 14.17 33.73 14.17 13.6 34.5 13.6t34.5-13.6q14.17-13.61 14.17-33.73v-292.67Q756.33-509 745-506.5q-11.33 2.5-23 2.5-40.32 0-68.16-27.84Q626-559.68 626-600q0-31.74 17.83-57.04 17.84-25.29 47.5-34.29L619-763.67q-8.33-8.09-8.33-18.88 0-10.78 8.33-19.12 8-8 18.83-7.83 10.84.17 19.17 8.17L789.33-670q14.34 14.33 22.5 32 8.17 17.67 8.17 38v378q0 42.84-29.54 72.42Q760.91-120 718.12-120q-42.79 0-72.45-29.58Q616-179.16 616-222v-212.67h-63.33v281.34q0 14.16-9.59 23.75-9.58 9.58-23.75 9.58h-326q-14.16 0-23.75-9.58-9.58-9.59-9.58-23.75Zm66.67-401.34H486v-218.66H226.67v218.66ZM722-557.33q17.67 0 30.17-12.5t12.5-30.17q0-17.67-12.5-30.17T722-642.67q-17.67 0-30.17 12.5T679.33-600q0 17.67 12.5 30.17t30.17 12.5ZM226.67-186.67H486V-488H226.67v301.33Zm259.33 0H226.67 486Z" />
                </svg>
                <span class="text-lg font-medium ml-4">BBM</span>
            </div>
        </a>
    </li>
    <li
        class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600 ">
        <a class="block text-gray-800  truncate transition" href="{{ route('admin.dashboard.office') }}">
            <div class="flex items-center hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                    fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd" class="hover:text-white"
                        d="M80-186.67v-586.66q0-27.5 19.58-47.09Q119.17-840 146.67-840h260q27.5 0 47.08 19.58 19.58 19.59 19.58 47.09v96.66h340q27.5 0 47.09 19.59Q880-637.5 880-610v423.33q0 27.5-19.58 47.09Q840.83-120 813.33-120H146.67q-27.5 0-47.09-19.58Q80-159.17 80-186.67Zm66.67 0h96.66v-96.66h-96.66v96.66Zm0-163.33h96.66v-96.67h-96.66V-350Zm0-163.33h96.66V-610h-96.66v96.67Zm0-163.34h96.66v-96.66h-96.66v96.66Zm163.33 490h96.67v-96.66H310v96.66ZM310-350h96.67v-96.67H310V-350Zm0-163.33h96.67V-610H310v96.67Zm0-163.34h96.67v-96.66H310v96.66Zm163.33 490h340V-610h-340v96.67h80v66.66h-80V-350h80v66.67h-80v96.66Zm176.67-260v-66.66h66.67v66.66H650Zm0 163.34V-350h66.67v66.67H650Z" />
                </svg>
                <span class="text-lg font-medium ml-4">Kantor</span>
            </div>
        </a>
    </li>
    <li
        class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600 ">
        <a class="block text-gray-800  truncate transition" href="{{ route('admin.dashboard.vehicle') }}">
            <div class="flex items-center hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                    fill="currentColor">
                    <path
                        d="M444.01-80Q429-80 418.83-90.16q-10.16-10.16-10.16-25.17v-204q0-5.45.66-10.89.67-5.45 2.67-10.78l44.67-129.67q6.66-20.14 24.16-32.74Q498.33-516 520-516h248.67q21.66 0 39.16 12.59 17.5 12.6 24.17 32.74L876.67-341q2 5.33 2.66 10.78.67 5.44.67 10.89v204q0 15.01-10.15 25.17Q859.69-80 844.68-80q-15.01 0-25.18-10.16t-10.17-25.17v-29.34h-330v29.34q0 15.01-10.15 25.17Q459.02-80 444.01-80Zm26.66-286H818l-34.67-103.33h-278L470.67-366Zm-15.34 46.67v128-128Zm64.67 104q16.72 0 28.03-11.31 11.3-11.31 11.3-28.03 0-16.71-11.3-28.02Q536.72-294 520-294t-28.02 11.31q-11.31 11.31-11.31 28.02 0 16.72 11.31 28.03 11.3 11.31 28.02 11.31Zm248.67 0q16.71 0 28.02-11.31Q808-237.95 808-254.67q0-16.71-11.31-28.02Q785.38-294 768.67-294q-16.72 0-28.03 11.31-11.31 11.31-11.31 28.02 0 16.72 11.31 28.03 11.31 11.31 28.03 11.31ZM240-392v-75.33h75.33V-392H240Zm204.67-252.67V-720H520v75.33h-75.33ZM240-236v-75.33h75.33V-236H240Zm0 156v-75.33h75.33V-80H240ZM80-80v-480.67q0-27.5 19.58-47.08 19.59-19.58 47.09-19.58h138v-186q0-27.5 19.58-47.09Q323.83-880 351.33-880h262q27.5 0 47.09 19.58Q680-840.83 680-813.33v200h-66.67v-200h-262v252.66H146.67V-80H80Zm375.33-111.33h378v-128h-378v128Z" />
                </svg>
                <span class="text-lg font-medium ml-4">Kendaraan</span>
            </div>
        </a>
    </li>
    <li
        class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600 ">
        <a class="block text-gray-800  truncate transition" href="{{ route('admin.dashboard.employee') }}">
            <div class="flex items-center hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                    fill="currentColor">
                    <path
                        d="M146.67-146.67v-306.66V-146.67Zm666.66 0V-453.33v306.66Zm-53.33-480q22.67 0 38-15.33 15.33-15.33 15.33-38T798-718q-15.33-15.33-38-15.33T722-718q-15.33 15.33-15.33 38T722-642q15.33 15.33 38 15.33Zm0 66.67q-51 0-85.5-34.5T640-680q0-50 34.5-85t85.5-35q50 0 85 35t35 85q0 51-35 85.5T760-560ZM480.1-666.67q30.23 0 51.73-21 21.5-21 21.5-52.43 0-30.23-21.39-51.73-21.38-21.5-51.94-21.5-31.33 0-52.33 21.39-21 21.38-21 51.94 0 31.33 21 52.33t52.43 21ZM480-600q-59 0-99.5-40.5T340-740q0-58 40.5-99t99.5-41q58 0 99 41t41 99q0 59-41 99.5T480-600ZM306.67-425q0 33.09 35 77.21Q376.67-303.67 480-210q101.83-92.56 137.58-136.11 35.75-43.56 35.75-78.89 0-29-18.84-48.67-18.85-19.66-46.49-19.66-16.39 0-31.03 8t-26.64 19.66l-46 47h-9l-46.66-47q-12-11.66-26.5-19.66t-30.39-8q-28.11 0-46.61 19.88-18.5 19.87-18.5 48.45ZM240-425q0-53 38.67-94 38.66-41 93.33-41 30.33 0 59.08 14T480-508q20.18-24 48.42-38 28.25-14 59.58-14 54 0 93 41.17 39 41.16 39 93.83 0 53-38.5 104.5T524-160l-44 40-44-40Q315-270 277.5-321T240-425Zm-40-201.67q22.67 0 38-15.33 15.33-15.33 15.33-38T238-718q-15.33-15.33-38-15.33T162-718q-15.33 15.33-15.33 38T162-642q15.33 15.33 38 15.33ZM483-80v-66.67h330.33v-306.66h-134V-520h134q27.5 0 47.09 19.58Q880-480.83 880-453.33v340q0 14.16-9.58 23.75Q860.83-80 846.67-80H483Zm-336.33-66.67H483V-80H113.33q-14.16 0-23.75-9.58Q80-99.17 80-113.33v-340q0-27.5 19.17-47.09Q118.33-520 146.67-520H280v66.67H146.67v306.66ZM200-560q-51 0-85.5-34.5T80-680q0-50 34.5-85t85.5-35q50 0 85 35t35 85q0 51-35 85.5T200-560Zm280-180Zm-280 60Zm560 0Z" />
                </svg>
                <span class="text-lg font-medium ml-4">Karyawan</span>
            </div>
        </a>
    </li>
    <li
        class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600 ">
        <a class="block text-gray-800  truncate transition" href="{{ route('admin.dashboard.history') }}">
            <div class="flex items-center hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                    fill="currentColor">
                    <path
                        d="M720-40q-58.67 0-105.67-30.17-47-30.16-72-78.16-6-11-1.5-22.77 4.5-11.76 15.5-16.66 11-4.91 22.84-1.07Q591-185 597-174q17 33 49.5 53.5T720-100q58 0 99-41t41-99q0-58-41-99t-99-41q-29 0-54 10.5T622-340h28q13 0 21.5 8.5T680-310q0 13-8.5 21.5T650-280h-96.67q-14.16 0-23.75-9.58-9.58-9.59-9.58-23.75V-410q0-13 8.5-21.5T550-440q13 0 21.5 8.5T580-410v27q27-26 63-41.5t77-15.5q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40ZM186.67-186.67v-586.66 586.66Zm126.66-426.66h333.34q14.16 0 23.75-9.62 9.58-9.62 9.58-23.83 0-14.22-9.58-23.72-9.59-9.5-23.75-9.5H313.33q-14.16 0-23.75 9.62-9.58 9.61-9.58 23.83 0 14.22 9.58 23.72 9.59 9.5 23.75 9.5Zm0 166.66h167.34q14.16 0 23.75-9.61 9.58-9.62 9.58-23.84 0-14.21-9.58-23.71-9.59-9.5-23.75-9.5H313.33q-14.16 0-23.75 9.61-9.58 9.62-9.58 23.84 0 14.21 9.58 23.71 9.59 9.5 23.75 9.5Zm0 166.67h97.34q14.16 0 23.75-9.62 9.58-9.61 9.58-23.83 0-14.22-9.58-23.72-9.59-9.5-23.75-9.5h-97.34q-14.16 0-23.75 9.62-9.58 9.62-9.58 23.83 0 14.22 9.58 23.72 9.59 9.5 23.75 9.5ZM186.67-120q-27.5 0-47.09-19.58Q120-159.17 120-186.67v-586.66q0-27.5 19.58-47.09Q159.17-840 186.67-840h586.66q27.5 0 47.09 19.58Q840-800.83 840-773.33v196q0 14.16-9.62 23.75-9.61 9.58-23.83 9.58-14.22 0-23.72-9.58-9.5-9.59-9.5-23.75v-196H186.67v586.66h196q14.16 0 23.75 9.62 9.58 9.62 9.58 23.83 0 14.22-9.58 23.72-9.59 9.5-23.75 9.5h-196Z" />
                </svg>
                <span class="text-lg font-medium ml-4">Riwayat</span>
            </div>
        </a>
    </li>

    <div class="space-y-2 pt-2 border-t-2 border-gray-200">
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600 ">
            <a class="block text-gray-800  truncate transition" href="{{ route('admin.dashboard') }}">
                <div class="flex items-center hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="currentColor">
                        <path
                            d="M433-80q-27 0-46.5-18T363-142l-9-66q-13-5-24.5-12T307-235l-62 26q-25 11-50 2t-39-32l-47-82q-14-23-8-49t27-43l53-40q-1-7-1-13.5v-27q0-6.5 1-13.5l-53-40q-21-17-27-43t8-49l47-82q14-23 39-32t50 2l62 26q11-8 23-15t24-12l9-66q4-26 23.5-44t46.5-18h94q27 0 46.5 18t23.5 44l9 66q13 5 24.5 12t22.5 15l62-26q25-11 50-2t39 32l47 82q14 23 8 49t-27 43l-53 40q1 7 1 13.5v27q0 6.5-2 13.5l53 40q21 17 27 43t-8 49l-48 82q-14 23-39 32t-50-2l-60-26q-11 8-23 15t-24 12l-9 66q-4 26-23.5 44T527-80h-94Zm7-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Akun</span>
                </div>
            </a>
        </li>
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-orange-600  hover:text-white ">
            <form action="{{ route('logout') }}" method="POST" class="block text-gray-800  truncate transition">
                @csrf
                @method('POST')
                <button class="flex items-center hover:text-white" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="currentColor">
                        <path
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Logout</span>
                </button>
            <form/>
        </li>
    </div>
</ul>
