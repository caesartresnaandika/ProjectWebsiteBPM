@extends('components.layout')

@section('title', 'Divisi BPM FTI 2025 - BPM FTI UKDW')

@section('content')

    {{-- ====================================================== --}}
    {{-- ============== BAGIAN DIVISI BPH (BARU) ============== --}}
    {{-- ====================================================== --}}
    <div class="relative bg-gray-100 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisibph/background.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-l from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div data-aos="flip-left" data-aos-duration="1000" class="relative w-full max-w-md mx-auto aspect-[4/5] md:order-first" x-data="{...}">
                        {{-- Isi slider BPH Anda (tidak berubah) --}}
                    </div>
                    
                    <div class="text-left md:text-right md:order-last" data-aos="fade-left" data-aos-duration="1000">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi BPH
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Badan Pengurus Harian (BPH) adalah inti dari organisasi...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ========================================================== --}}
    {{-- ============== BAGIAN DIVISI ASPIRASI (LAMA) ============== --}}
    {{-- ========================================================== --}}
    <div class="relative bg-gray-100 overflow-hidden">
    
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisiaspirasi/background.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    
                    <div class="text-left" data-aos="zoom-in-right" data-aos-duration="900">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi Aspirasi
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Aspirasi adalah jembatan antara mahasiswa dengan pihak fakultas...
                        </p>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" class="relative w-full max-w-md mx-auto aspect-[4/5]" x-data="{...}">
                        {{-- Isi slider Aspirasi Anda (tidak berubah) --}}
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- ============== BAGIAN DIVISI DESGRAF ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisidesgraf/background.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-l from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div data-aos="fade-right" data-aos-duration="1000" class="relative w-full max-w-md mx-auto aspect-[4/5] md:order-first" x-data="{...}">
                        {{-- Isi slider DesGraf Anda (tidak berubah) --}}
                    </div>
                    
                    <div class="text-left md:text-right md:order-last" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi DesGraf
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Desain Grafis adalah kreator visual yang mentransformasi ide...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- ============== BAGIAN DIVISI KEORGANISASIAN ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
    
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisikeorganisasian/background.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div class="text-left" data-aos="zoom-in-up" data-aos-duration="800">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi Keorganisasian
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Keorganisasian adalah garda penjamin mutu dan akuntabilitas...
                        </p>
                    </div>

                    <div data-aos="zoom-in-down" data-aos-duration="800" data-aos-delay="200" class="relative w-full max-w-md mx-auto aspect-[4/5]" x-data="{...}">
                        {{-- Isi slider Keorganisasian Anda (tidak berubah) --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============== BAGIAN DIVISI LEGVO ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisilegvo/wajib_isi1.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-l from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div data-aos="flip-right" data-aos-duration="1000" class="relative w-full max-w-md mx-auto aspect-[4/5] md:order-first" x-data="{...}">
                        {{-- Isi slider Legvo Anda (tidak berubah) --}}
                    </div>
                    
                    <div class="text-left md:text-right md:order-last" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi Legvo
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Legislasi dan Advokasi adalah penjaga hak, aturan, dan suara kebenaran...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============== BAGIAN DIVISI RINOV ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
    
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisirinov/Isi wajib.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div class="text-left" data-aos="fade-up-right" data-aos-duration="900">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi Rinov
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Riset dan Inovasi (RINOV) adalah wadah bagi para pemikir visioner...
                        </p>
                    </div>

                    <div data-aos="fade-up-left" data-aos-duration="900" data-aos-delay="200" class="relative w-full max-w-md mx-auto aspect-[4/5]" x-data="{...}">
                        {{-- Isi slider Rinov Anda (tidak berubah) --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection