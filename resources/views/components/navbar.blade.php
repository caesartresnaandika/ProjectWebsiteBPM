<nav class="bg-gray-800 sticky top-0 z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="shrink-0">
                        <img src="{{ asset('img/logobpm.png') }}" alt="Logo BPM FTI UKDW" class="size-20" />
                    </div>
                    <div class="ml-4 hidden md:block">
                        <div class="text-2xl font-bold text-white">BPM FTI UKDW</div>
                        <div class="text-sm text-gray-300">Kabinet Phronesis Aletheia</div>
                    </div>
                    <div class="ml-4 md:hidden">
                        <div class="text-xl font-bold text-white">BPM FTI UKDW</div>
                        <div class="text-xs text-gray-300">Kabinet Phronesis Aletheia</div>
                    </div>
                </a>
            </div>
            
            <div class="hidden md:block">
                <div class="flex items-baseline space-x-1">
                    {{-- Perubahan dimulai di sini. Perhatikan tambahan kondisi di dalam class --}}
                    <a href="{{ route('home') }}" class="rounded-md px-4 py-3 text-lg font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-white scale-110 font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Home</a>
                    <a href="{{ route('about') }}" class="rounded-md px-4 py-3 text-lg font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'text-white scale-110 font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">About Us</a>
                    <a href="{{ route('struktur') }}" class="rounded-md px-4 py-3 text-lg font-medium transition-colors duration-200 {{ request()->routeIs('struktur') ? 'text-white scale-110 font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Kepengurusan</a>
                    <a href="{{ route('program') }}" class="rounded-md px-4 py-3 text-lg font-medium transition-colors duration-200 {{ request()->routeIs('program') ? 'text-white scale-110 font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Program Kerja</a>
                    <a href="{{ route('kegiatan') }}" class="rounded-md px-4 py-3 text-lg font-medium transition-colors duration-200 {{ request()->routeIs('kegiatan') ? 'text-white scale-110 font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Kegiatan Mahasiswa</a>
                </div>
            </div>
            
            <div class="flex md:hidden">
                <button 
                    type="button" 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500"
                >
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!mobileMenuOpen" class="size-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                    <svg x-show="mobileMenuOpen" class="size-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen" x-transition class="md:hidden" x-cloak>
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
            {{-- Perubahan juga diterapkan di sini untuk versi mobile --}}
            <a href="{{ route('home') }}" class="block rounded-md px-3 py-3 text-base font-medium {{ request()->routeIs('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Home</a>
            <a href="{{ route('about') }}" class="block rounded-md px-3 py-3 text-base font-medium {{ request()->routeIs('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">About Us</a>
            <a href="{{ route('struktur') }}" class="block rounded-md px-3 py-3 text-base font-medium {{ request()->routeIs('struktur') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Struktur Organisasi</a>
            <a href="{{ route('program') }}" class="block rounded-md px-3 py-3 text-base font-medium {{ request()->routeIs('program') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Program Kerja</a>
            <a href="{{ route('kegiatan') }}" class="block rounded-md px-3 py-3 text-base font-medium {{ request()->routeIs('kegiatan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Kegiatan Mahasiswa</a>
        </div>
    </div>
</nav>