<p class="px-2 border-b-2 pb-2 border-gray-200 uppercase text-sm font-bold text-[#f4b0c7]">Main</p>
<ul class="space-y-2 pt-2">
    <li
        class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-hoverbase hover:text-white duration-200">
        <a href="{{ route('admin.dashboard') }}" class="block text-textbase hover:text-white truncate transition">
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
        <a class="block rounded-lg pl-3 pr-3 py-2 text-textbase hover:bg-hoverbase  truncate transition @if (!in_array(Request::segment(1), ['pengajuan'])) {{ 'hover:text-white ' }} @endif"
            href="#0" @click.prevent="open = !open; sidebarExpanded = true">
            <div class="flex items-center justify-between">
                <div class="flex items-center duration-200">
                    <svg class="hover:text-white" xmlns="http://www.w3.org/2000/svg" height="30px"
                        viewBox="0 -960 960 960" width="30px" fill="currentColor">
                        <path class="hover:text-white" fill-rule="evenodd" clip-rule="evenodd"
                            d="M229.41-160.67q-49.41 0-84.08-34.61-34.66-34.61-34.66-84.05H73.33q-14.16 0-23.75-9.59Q40-298.5 40-312.67v-420.66q0-27 19.83-46.84Q79.67-800 106.67-800h506q27.5 0 47.08 19.58 19.58 19.59 19.58 47.09v98H756q15.83 0 30 7.08t23.33 19.58l104 138.34q3.34 4.16 5 9.16 1.67 5 1.67 10.84v137.66q0 14.17-9.58 23.75-9.59 9.59-23.75 9.59H846q0 49.33-34.59 84-34.59 34.66-84 34.66t-84.08-34.61q-34.66-34.61-34.66-84.05H348q0 49.33-34.59 84-34.59 34.66-84 34.66Zm-.08-66.66q21.67 0 36.84-15.17 15.16-15.17 15.16-36.83 0-21.67-15.16-36.84-15.17-15.16-36.84-15.16-21.66 0-36.83 15.16-15.17 15.17-15.17 36.84 0 21.66 15.17 36.83 15.17 15.17 36.83 15.17ZM106.67-346H132q17-24 41.69-38.33 24.7-14.34 55-14.34Q259-398.67 284-384q25 14.67 42 38h286.67v-387.33h-506V-346Zm620.66 118.67q21.67 0 36.84-15.17 15.16-15.17 15.16-36.83 0-21.67-15.16-36.84-15.17-15.16-36.84-15.16-21.66 0-36.83 15.16-15.17 15.17-15.17 36.84 0 21.66 15.17 36.83 15.17 15.17 36.83 15.17Zm-48-202.67H860L756-568.67h-76.67V-430ZM360-540Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Vendor</span>
                </div>

            </div>
        </a>
        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
            <ul class="pl-8 mt-2 " :class="open ? '!block' : 'hidden'">
                <li class="mb-5 last:mb-0">
                    <a class="block pl-3 text-gray-500  hover:text-gray-700  transition truncate"
                        href="{{ route('admin.dashboard.category') }}">
                        <div class="flex items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#6b7280">
                                <path
                                    d="M440-440H240q-17 0-28.5-11.5T200-480q0-17 11.5-28.5T240-520h200v-200q0-17 11.5-28.5T480-760q17 0 28.5 11.5T520-720v200h200q17 0 28.5 11.5T760-480q0 17-11.5 28.5T720-440H520v200q0 17-11.5 28.5T480-200q-17 0-28.5-11.5T440-240v-200Z" />
                            </svg>
                            <span class="text-lg font-medium ml-2">Kategori</span>
                        </div>
                    </a>
                </li>
                <li class="mb-5 last:mb-0">
                    <a class="block pl-3 text-gray-500  hover:text-gray-700  transition truncate"
                        href="{{ route('admin.dashboard.partner.pengajuan.tambah') }}">
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
                        href="{{ route('admin.dashboard.partner') }}">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#6b7280">
                                <path
                                    d="M480-120q-126 0-223-76.5T131-392q-4-15 6-27.5t27-14.5q16-2 29 6t18 24q24 90 99 147t170 57q117 0 198.5-81.5T760-480q0-117-81.5-198.5T480-760q-69 0-129 32t-101 88h70q17 0 28.5 11.5T360-600q0 17-11.5 28.5T320-560H160q-17 0-28.5-11.5T120-600v-160q0-17 11.5-28.5T160-800q17 0 28.5 11.5T200-760v54q51-64 124.5-99T480-840q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480q0 75-28.5 140.5t-77 114q-48.5 48.5-114 77T480-120Zm40-376 100 100q11 11 11 28t-11 28q-11 11-28 11t-28-11L452-452q-6-6-9-13.5t-3-15.5v-159q0-17 11.5-28.5T480-680q17 0 28.5 11.5T520-640v144Z" />
                            </svg>
                            <span class="text-lg font-medium ml-2">Master Data</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <p class="px-2 border-b-2 pb-2 border-gray-200 uppercase text-sm font-bold text-[#f4b0c7]">CMS: Web Profile</p>
    <div class="space-y-2">
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-hoverbase hover:text-white duration-200">
            <a href="{{ route('admin.dashboard.cms.hero') }}"
                class="block text-textbase hover:text-white truncate transition">
                <div class="flex items-center hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="currentColor" class="hover:text-white">
                        <path class="hover:text-white"
                            d="M160-240h640v-320H520v-160H160v480Zm0 80q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80v-480 480Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Hero</span>
                </div>
            </a>
        </li>
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-hoverbase ">
            <a class="block text-textbase  truncate transition" href="{{ route('admin.dashboard.cms.about') }}">
                <div class="flex items-center hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="currentColor" class="hover:text-white">
                        <path class="hover:text-white"
                            d="M300-300h160v-160H300v160Zm0-200h160v-160H300v160Zm200 200h160v-160H500v160Zm0-200h160v-160H500v160ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">About</span>
                </div>
            </a>
        </li>
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-hoverbase ">
            <a class="block text-textbase  truncate transition" href="{{ route('admin.dashboard.cms.ourservice') }}">
                <div class="flex items-center hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="currentColor" class="hover:text-white">
                        <path class="hover:text-white"
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm560-200H200v120h560v-120Zm-100-80h100v-360H660v360Zm-460 0h100v-360H200v360Zm180 0h200v-360H380v360Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Our Service</span>
                </div>
            </a>
        </li>
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-hoverbase ">
            <a class="block text-textbase  truncate transition" href="{{ route('admin.dashboard.cms.portofolio') }}">
                <div class="flex items-center hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="currentColor" class="hover:text-white">
                        <path class="hover:text-white"
                            d="M240-320h360v-200H240v200Zm420-120h60v-200H360v60h300v140ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Portofolio</span>
                </div>
            </a>
        </li>
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-hoverbase ">
            <a class="block text-textbase  truncate transition" href="{{ route('admin.dashboard.cms.testimoni') }}">
                <div class="flex items-center hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="currentColor" class="hover:text-white">
                        <path class="hover:text-white"
                            d="M460-420h200v-80H460v80Zm-60 60v-200h320v200H400ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H160v400Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Testimoni</span>
                </div>
            </a>
        </li>
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-hoverbase ">
            <a class="block text-textbase  truncate transition" href="{{ route('admin.dashboard.cms.footer') }}">
                <div class="flex items-center hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="currentColor" class="hover:text-white">
                        <path class="hover:text-white"
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-520h560v-120H200v120Zm560 80H200v360h560v-360Zm-560-80v80-80Zm0 0v-120 120Zm0 80v360-360Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Footer</span>
                </div>
            </a>
        </li>
    </div>
    <p class="px-2 border-b-2 pb-2 border-gray-200 uppercase text-sm font-bold text-[#f4b0c7]">AUTH</p>
    <div class="space-y-2">
        <li
            class="pl-3 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] hover:bg-hoverbase ">
            <form action="{{ route('logout') }}" method="POST"
                class="block text-textbase  truncate transition hover:text-white">
                @csrf
                @method('POST')
                <button class="flex items-center hover:text-white" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="currentColor">
                        <path
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                    </svg>
                    <span class="text-lg font-medium ml-4">Logout</span>
                </button>
                <form />
        </li>
    </div>
</ul>
