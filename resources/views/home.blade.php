@extends('components.layout')

@section('title', 'Home - BPM FTI UKDW')

@section('content')

    <section id="home" class="relative h-screen flex items-center justify-center text-center overflow-hidden bg-gray-500" x-data="{
            activeSlide: 1,
            slides: [
                '{{ asset('img/fotobersama1.JPG') }}',
                '{{ asset('img/fotobersama2.JPG') }}',
                '{{ asset('img/fotobersama3.JPG') }}'
            ],
            loop() {
                setInterval(() => {
                    this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1
                }, 10000)
            }
        }" x-init="loop()">

        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlide === index + 1" 
                 x-transition:enter="transition-opacity ease-in-out duration-1000" 
                 x-transition:enter-start="opacity-0" 
                 x-transition:enter-end="opacity-100" 
                 x-transition:leave="transition-opacity ease-in-out duration-1000" 
                 x-transition:leave-start="opacity-100" 
                 x-transition:leave-end="opacity-0" 
                 class="absolute inset-0">
                <img :src="slide" alt="Background Image" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
        </template>

        <div class="relative z-10 p-4 text-white">
            <h1 class="text-4xl md:text-7xl font-extrabold mb-4" data-aos="fade-down" data-aos-duration="700">Selamat Datang di BPM FTI UKDW</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="700">Kabinet Prhonesis Aletheia - Wadah aspirasi dan pengembangan mahasiswa FTI UKDW</p>
        </div>

        <div class="absolute z-20 flex justify-between w-full top-1/2 -translate-y-1/2 px-4">
            <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="bg-white/20 text-white rounded-full p-2 hover:bg-white/40 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="bg-white/20 text-white rounded-full p-2 hover:bg-white/40 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </button>
        </div>
    </section>

    
    <section id="about" class="bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                
                <!-- Animasi Teks: Muncul dari kanan -->
                <div data-aos="fade-left" data-aos-duration="800">
                    <p class="text-yellow-500 font-semibold tracking-wider uppercase">Tentang BPM FTI UKDW</p>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-2 mb-6">Kabinet Prhonesis Aletheia</h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        Badan Perwakilan Mahasiswa Fakultas Teknologi Informasi (BPM FTI) UKDW merupakan lembaga legislatif yang menjadi jembatan untuk menampung dan memperjuangkan aspirasi seluruh mahasiswa FTI. Kabinet Prhonesis Aletheia berkomitmen untuk proaktif dan transparan dalam mendukung pengembangan mahasiswa.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('about') }}" class="inline-block bg-gray-900 text-white font-semibold py-3 px-8 rounded-lg hover:bg-gray-700 transition text-center">Lihat Selengkapnya</a>
                    </div>
                </div>

                <!-- Animasi Gambar: Muncul dari kiri dengan efek zoom -->
                <div class="flex justify-center items-center" data-aos="zoom-in-left" data-aos-duration="800">
                    <div class="bg-white p-4 rounded-lg shadow-2xl transform -rotate-2 hover:rotate-0 hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('img/logobpm.png') }}" alt="Logo BPM FTI UKDW" class="max-w-xs md:max-w-sm rounded">
                        <p class="text-center mt-3 font-semibold text-gray-700">Logo Resmi BPM FTI UKDW</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section id="structure" class="section bg-gray-50 overflow-hidden">
        <div class="section-content">
            <div> 
                <!-- Animasi Judul: Zoom out -->
                <div data-aos="zoom-out">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">Struktur Organisasi</h2>
                    <p class="text-gray-700 text-center max-w-3xl mx-auto mb-12">
                        BPM FTI UKDW terdiri dari berbagai divisi yang bekerja sama untuk mewujudkan visi dan misi organisasi.
                    </p>
                </div>
            
                <!-- Animasi Kartu: Muncul dari bawah -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up" data-aos-duration="900">
                    <h3 class="text-2xl font-semibold text-indigo-700 mb-6 text-center">Kabinet Prhonesis Aletheia</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Tambahkan delay berbeda untuk setiap kartu agar muncul satu per satu -->
                        <div class="text-center p-4 bg-indigo-50 rounded-lg" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-24 h-24 mx-auto bg-indigo-200 rounded-full mb-4 flex items-center justify-center"><span class="text-indigo-700 font-bold">Ketua</span></div>
                            <h4 class="font-semibold text-gray-800">Ketua BPM</h4>
                            <p class="text-gray-600">Pimpinan tertinggi organisasi</p>
                        </div>
                        <div class="text-center p-4 bg-indigo-50 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-24 h-24 mx-auto bg-indigo-200 rounded-full mb-4 flex items-center justify-center"><span class="text-indigo-700 font-bold">Wakil</span></div>
                            <h4 class="font-semibold text-gray-800">Wakil Ketua</h4>
                            <p class="text-gray-600">Mendampingi ketua dalam menjalankan tugas</p>
                        </div>
                        <div class="text-center p-4 bg-indigo-50 rounded-lg" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-24 h-24 mx-auto bg-indigo-200 rounded-full mb-4 flex items-center justify-center"><span class="text-indigo-700 font-bold">Sekretaris</span></div>
                            <h4 class="font-semibold text-gray-800">Sekretaris</h4>
                            <p class="text-gray-600">Mengelola administrasi organisasi</p>
                        </div>
                    </div>
                </div>
            
                <div class="text-center" data-aos="fade-up">
                    <a href="{{ route('struktur') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300">Lihat Struktur Lengkap</a>
                </div>
            </div>
        </div>
    </section> --}}
    
@endsection