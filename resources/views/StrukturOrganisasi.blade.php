@extends('components.layout')

@section('title', 'Divisi BPM FTI 2025 - BPM FTI UKDW')

@section('content')

{{-- Bagian Wrapper Utama dengan Background --}}
<div class="relative bg-gray-100 overflow-hidden">
    
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/fotodivisiaspirasi/background.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-gray-100 via-gray-100/80 to-transparent"></div>
    </div>


    {{-- ============== BAGIAN DIVISI BPH ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisibph/background.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-l from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        {{-- Konten Utama --}}
        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div x-data="{
                        activeSlide: 1,
                        slides: [
                            { img: '{{ asset('img/fotodivisibph/divisi BPH.png') }}', name: 'Foto Bersama Divisi BPH' },
                            { img: '{{ asset('img/fotodivisibph/Christian Bagas Narendra Putra.png') }}', name: 'Christian Bagas Narendra Putra' },
                            { img: '{{ asset('img/fotodivisibph/Debora Patricia Sharon Rembet.png') }}', name: 'Debora Patricia Sharon Rembet' },
                            { img: '{{ asset('img/fotodivisibph/Mario Kevin Kristianto.png') }}', name: 'Mario Kevin Kristianto' },
                            { img: '{{ asset('img/fotodivisibph/Mauren Thesalonika Preyer Papuas.png') }}', name: 'Mauren Thesalonika Preyer Papuas' },
                            { img: '{{ asset('img/fotodivisibph/Nicholas Dwinat.png') }}', name: 'Nicholas Dwinat' }
                        ],
                        loop() {
                            setInterval(() => {
                                this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1
                            }, 5000)
                        }
                    }" x-init="loop()" class="relative w-full max-w-md mx-auto aspect-[4/5] md:order-first">

                        <template x-for="(slide, index) in slides" :key="index">
                            <div x-show="activeSlide === index + 1"
                                x-transition:enter="transition ease-in-out duration-500"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in-out duration-500"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute inset-0 flex flex-col items-center justify-center">
                                
                                <img :src="slide.img" :alt="slide.name" class="object-cover w-full h-full rounded-2xl shadow-2xl">
                                <div class="absolute bottom-4 left-4 bg-black/50 text-white text-sm font-semibold p-2 rounded-lg" x-text="slide.name"></div>
                            </div>
                        </template>

                        <div class="absolute -bottom-12 left-1/2 -translate-x-1/2 flex items-center space-x-3">
                            <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="bg-white/50 hover:bg-white text-gray-700 p-2 rounded-full shadow-md transition">&lt;</button>
                            <div class="flex space-x-2">
                                <template x-for="i in slides.length" :key="i">
                                    <button @click="activeSlide = i" :class="{'bg-gray-800': activeSlide === i, 'bg-gray-300': activeSlide !== i}" class="w-3 h-3 rounded-full transition"></button>
                                </template>
                            </div>
                            <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="bg-white/50 hover:bg-white text-gray-700 p-2 rounded-full shadow-md transition">&gt;</button>
                        </div>
                    </div>
                    
                    <div class="text-left md:text-right md:order-last">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi BPH
                        </h1>
                        <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                            Badan Pengurus Harian (BPH) adalah inti dari organisasi yang bertanggung jawab atas koordinasi dan manajemen seluruh kegiatan BPM FTI. Kami memastikan visi dan misi organisasi berjalan selaras dan efektif.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- ============== BAGIAN DIVISI ASPIRASI ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
    
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/fotodivisiaspirasi/background.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-gray-100 via-gray-100/80 to-transparent"></div>
    </div>

    {{-- Konten Utama --}}
    <div class="relative z-10 min-h-screen flex items-center">
        <div class="container mx-auto px-6 py-16 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <div class="text-left">
                    <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                        Divisi Aspirasi
                    </h1>
                    <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                        Divisi Aspirasi adalah jembatan antara mahasiswa dengan pihak fakultas. Kami bertugas untuk menampung, menyalurkan, dan memperjuangkan seluruh aspirasi mahasiswa FTI UKDW demi terciptanya lingkungan akademik yang lebih baik dan responsif.
                    </p>
                </div>

                <div x-data="{
                    activeSlide: 1,
                    slides: [
                        { img: '{{ asset('img/fotodivisiaspirasi/Divisi Aspirasi.png') }}', name: 'Foto Bersama Divisi Aspirasi' },
                        { img: '{{ asset('img/fotodivisiaspirasi/Bagas Kris Seto Anggoro.png') }}', name: 'Bagas Kris Seto Anggoro' },
                        { img: '{{ asset('img/fotodivisiaspirasi/Dex Bennett.png') }}', name: 'Dex Bennett' },
                        { img: '{{ asset('img/fotodivisiaspirasi/Komang Aditya.png') }}', name: 'Komang Aditya' },
                        { img: '{{ asset('img/fotodivisiaspirasi/Petrus Jou Bona Ray Sira Nainggolan.png') }}', name: 'Petrus Jou Bona Ray Sira Nainggolan' }
                    ],
                    loop() {
                        setInterval(() => {
                            this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1
                        }, 5000)
                    }
                }" x-init="loop()" class="relative w-full max-w-md mx-auto aspect-[4/5]">

                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="activeSlide === index + 1"
                             x-transition:enter="transition ease-in-out duration-500"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             x-transition:leave="transition ease-in-out duration-500"
                             x-transition:leave-start="opacity-100 transform scale-100"
                             x-transition:leave-end="opacity-0 transform scale-95"
                             class="absolute inset-0 flex flex-col items-center justify-center">
                            
                            <img :src="slide.img" :alt="slide.name" class="object-cover w-full h-full rounded-2xl shadow-2xl">
                            <div class="absolute bottom-4 left-4 bg-black/50 text-white text-sm font-semibold p-2 rounded-lg" x-text="slide.name"></div>
                        </div>
                    </template>

                    <div class="absolute -bottom-12 left-1/2 -translate-x-1/2 flex items-center space-x-3">
                        <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="bg-white/50 hover:bg-white text-gray-700 p-2 rounded-full shadow-md transition">&lt;</button>
                        <div class="flex space-x-2">
                            <template x-for="i in slides.length" :key="i">
                                <button @click="activeSlide = i" :class="{'bg-gray-800': activeSlide === i, 'bg-gray-300': activeSlide !== i}" class="w-3 h-3 rounded-full transition"></button>
                            </template>
                        </div>
                        <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="bg-white/50 hover:bg-white text-gray-700 p-2 rounded-full shadow-md transition">&gt;</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection