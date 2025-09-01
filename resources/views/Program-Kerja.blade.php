@extends('components.layout')

@section('title', 'Program Kerja - BPM FTI UKDW')

@section('content')

    <section class="bg-indigo-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight" data-aos="fade-down">PROGRAM KERJA</h1>
            <p class="mt-4 text-lg md:text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Inisiatif dan kegiatan yang kami rancang untuk mewadahi aspirasi dan mendukung pengembangan seluruh mahasiswa FTI UKDW.
            </p>
        </div>
    </section>

    <main class="py-20 bg-white overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">

            <section>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">
                    <div data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ asset('img/fotoprogramkerja/IMG_3502.JPG') }}" alt="FTI Mendengar" class="w-full h-auto rounded-xl shadow-2xl">
                    </div>

                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <p class="text-indigo-600 font-semibold tracking-wider uppercase">Program Kerja</p>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2">
                            FTI Mendengar
                        </h2>
                        <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                            FTI Mendengar merupakan sebuah acara tahunan yang diselenggarakan oleh BPM FTI UKDW sebagai wujud nyata komitmen kami dalam menjembatani suara hati dan pikiran mahasiswa FTI. Melalui acara ini, kami mengumpulkan, merangkum, dan menyampaikan aspirasi mahasiswa secara langsung kepada jajaran staf dan dosen FTI UKDW dalam sebuah forum diskusi yang terbuka, santun, dan solutif.
                        </p>
                        <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                            Tujuannya adalah menciptakan ruang dialog yang transparan dan konstruktif, di mana setiap keluh kesah, harapan, maupun gagasan dapat didengarkan, ditindaklanjuti, dan dijadikan bahan refleksi bersama untuk perbaikan berkelanjutan di lingkungan FTI. Dengan semangat kolaborasi, kami percaya bahwa banyak masalah dapat dipecahkan dan peluang dapat diciptakan ketika semua pihak—dari mahasiswa hingga pimpinan—duduk bersama, saling mendengar, dan bergerak untuk perubahan yang lebih baik.
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">
                    <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" class="md:order-first">
                        <p class="text-indigo-600 font-semibold tracking-wider uppercase">Program Kerja</p>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2">
                            MAKRAB FTI 2025
                        </h2>
                        <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                            Malam Keakraban (MAKRAB) FTI adalah momen istimewa yang kami rancang untuk mempererat tali persaudaraan antar lembaga kemahasiswaan di Fakultas Teknologi Informasi. Acara ini menjadi wadah bagi mahasiswa baru untuk mengenal lebih dekat kakak tingkat serta seluruh keluarga besar FTI dalam suasana yang santai, hangat, dan penuh kebersamaan.
                        </p>
                        <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                            Dengan berbagai kegiatan seru dan inspiratif, tujuan utama MAKRAB adalah membangun fondasi solidaritas yang kuat, menghilangkan sekat antar angkatan, dan menciptakan kenangan tak terlupakan di awal perjalanan perkuliahan. Kami percaya, keakraban adalah kunci untuk menciptakan lingkungan kampus yang suportif dan kolaboratif.
                        </p>
                    </div>

                    <div data-aos="fade-left" data-aos-duration="1000" class="md:order-last">
                        <img src="{{ asset('img/fotoprogramkerja/IMG_2685.JPG') }}" alt="MAKRAB FTI" class="w-full h-auto rounded-xl shadow-2xl">
                    </div>
                </div>
            </section>
        </div>
        
    </main>

@endsection