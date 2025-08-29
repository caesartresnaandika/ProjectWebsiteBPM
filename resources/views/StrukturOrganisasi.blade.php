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
                            <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                                Badan Pengurus Harian (BPH) adalah inti dari organisasi yang bertanggung jawab atas koordinasi dan manajemen seluruh kegiatan BPM FTI. Kami memastikan visi dan misi organisasi berjalan selaras dan efektif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============== BAGIAN DIVISI ASPIRASI ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
    
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisiaspirasi/background.png') }}" alt="Background" class="object-cover w-full h-200 opacity-30">
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
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
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

    {{-- ============== BAGIAN DIVISI DESGRAF ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisidesgraf/background.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-l from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        {{-- Konten Utama --}}
        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div x-data="{
                        activeSlide: 1,
                        slides: [
                            { img: '{{ asset('img/fotodivisidesgraf/Divisi DesGraf.png') }}', name: 'Foto Bersama Divisi DesGraf' },
                            { img: '{{ asset('img/fotodivisidesgraf/Dean Abiyoga Kanugraha.png') }}', name: 'Dean Abiyoga Kanugraha' },
                            { img: '{{ asset('img/fotodivisidesgraf/Andriano Kurniawan Ladjeba.png') }}', name: 'Andriano Kurniawan Ladjeba' },
                            { img: '{{ asset('img/fotodivisidesgraf/Natalie Neysa Jessica Soesanto.png') }}', name: 'Natalie Neysa Jessica Soesanto' }
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
                            Divisi DesGraf
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Desain Grafis adalah kreator visual yang mentransformasi ide dan informasi menjadi karya visual yang impactful. Kami bertugas untuk merancang, mengembangkan, dan mengelola seluruh materi komunikasi visual—mulai dari poster, konten media sosial, hingga branding acara—guna memperkuat identitas BPM FTI UKDW dan memastikan setiap pesan tersampaikan dengan jelas, kreatif, dan profesional kepada seluruh mahasiswa.
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

        {{-- Konten Utama --}}
        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div class="text-left">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi Keorganisasian
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Keorganisasian adalah garda penjamin mutu dan akuntabilitas program kerja di lingkungan FTI UKDW. Kami bertugas untuk memantau, mengevaluasi, dan mendampingi pelaksanaan setiap program kerja—mulai dari perencanaan, eksekusi, hingga pelaporan—guna memastikan seluruh kegiatan berjalan sesuai tujuan, tepat waktu, dan memberikan dampak nyata bagi mahasiswa. Bersama kami, program tidak hanya selesai, tetapi juga bermakna dan berintegritas.
                        </p>
                    </div>

                    <div x-data="{
                        activeSlide: 1,
                        slides: [
                            { img: '{{ asset('img/fotodivisikeorganisasian/Keorganisasian.png') }}', name: 'Foto Bersama Divisi Keorganisasian' },
                            { img: '{{ asset('img/fotodivisikeorganisasian/Clara Dian Ajeng Saputri.png') }}', name: 'Clara Dian Ajeng Saputri' },
                            { img: '{{ asset('img/fotodivisikeorganisasian/Fibrin Iren Six Tambunan.png') }}', name: 'Fibrin Iren Six Tambunan' },
                            { img: '{{ asset('img/fotodivisikeorganisasian/Morenza.png') }}', name: 'Morenza' },
                            { img: '{{ asset('img/fotodivisikeorganisasian/Sean Alexio Satriawan.png') }}', name: 'Sean Alexio Satriawan' }
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

    {{-- ============== BAGIAN DIVISI LEGVO ============= --}}
    <div class="relative bg-gray-100 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/fotodivisilegvo/wajib_isi1.png') }}" alt="Background" class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-l from-gray-100 via-gray-100/80 to-transparent"></div>
        </div>

        {{-- Konten Utama --}}
        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div x-data="{
                        activeSlide: 1,
                        slides: [
                            { img: '{{ asset('img/fotodivisilegvo/Legvo.png') }}', name: 'Foto Bersama Divisi DesGraf' },
                            { img: '{{ asset('img/fotodivisilegvo/Daniko Sutopo.png') }}', name: 'Daniko Sutopo' },
                            { img: '{{ asset('img/fotodivisilegvo/Anjani Thabita Tahiya.png') }}', name: 'Anjani Thabita Tahiya' },
                            { img: '{{ asset('img/fotodivisilegvo/Hizkia Angilina Damayanti.png') }}', name: 'Hizkia Angilina Damayanti' }
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
                            Divisi Legvo
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Legislasi dan Advokasi adalah penjaga hak, aturan, dan suara kebenaran di lingkungan FTI UKDW. Kami bertugas untuk memastikan setiap keputusan yang diambil adil, terstruktur, dan mengacu pada nilai-nilai demokrasi. Melalui penyusunan regulasi, pengawasan proses legislasi, serta pendampingan advokasi aspirasi mahasiswa, kami memperjuangkan transparansi, keadilan, dan kepastian hukum demi terwujudnya tata kelola kampus yang partisipatif dan responsif.
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

        {{-- Konten Utama --}}
        <div class="relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div class="text-left">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 tracking-tight">
                            Divisi Rinov
                        </h1>
                        <p class="mt-6 text-2xl text-gray-600 leading-relaxed">
                            Divisi Riset dan Inovasi (RINOV) adalah wadah bagi para pemikir visioner dan agen perubahan di FTI UKDW! Kami hadir untuk mengembangkan budaya berpikir kritis dan inovatif di lingkungan FTI. Ide-ide gila, pemikiran progresif, serta solusi disruptif? Serahkan pada kami! Bersama RINOV, kami mendorong eksplorasi tanpa batas, riset berdampak, dan terobosan teknologi yang tidak hanya menjawab tantangan hari ini, tetapi juga menciptakan masa depan yang lebih cerah dan penuh kemungkinan.
                    </div>

                    <div x-data="{
                        activeSlide: 1,
                        slides: [
                            { img: '{{ asset('img/fotodivisirinov/Rinov.png') }}', name: 'Foto Bersama Divisi Riset dan Inovasi' },
                            { img: '{{ asset('img/fotodivisirinov/Caesar Tresna Andika.png') }}', name: 'Caesar Tresna Andika' },
                            { img: '{{ asset('img/fotodivisirinov/Dave Aryanda Agape.png') }}', name: 'Dave Aryanda Agape' },
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

@endsection