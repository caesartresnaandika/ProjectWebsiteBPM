<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <title>@yield('title', 'BPM FTI UKDW - Kabinet Prhonesis Aletheia')</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
        .dropdown-enter-active, .dropdown-leave-active {
            transition: all 0.2s ease;
        }
        .dropdown-enter-from, .dropdown-leave-to {
            opacity: 0;
            transform: translateY(-10px);
        }
        .section {
            min-height: 100vh;
            display: flex; 
            flex-direction: column;
            justify-content: center;
        }
        .section-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
    </style>
    @stack('styles')
</head>
<body class="h-full" x-data="{ mobileMenuOpen: false, profileMenuOpen: false }">
    <div class="min-h-full">
        @include('components.navbar')
        
        <main>
            @yield('content')
        </main>
        
        @include('components.footer')
    </div>

    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log("✅ Halaman Selesai Dimuat. Mencari elemen parallax...");

            var parallaxElements = document.querySelectorAll('.parallax-effect');
            
            console.log("🔍 Ditemukan:", parallaxElements.length, "elemen dengan class 'parallax-effect'.");

            if (parallaxElements.length > 0) {
                new simpleParallax(parallaxElements, {
                    delay: .4,
                    transition: 'cubic-bezier(0,0,0,1)',
                    overflow: true,
                    scale: 1.6
                });
                console.log("🚀 Animasi Parallax Berhasil Diinisialisasi!");
            } else {
                console.log("⚠️ Tidak ada elemen untuk dianimasikan. Cek class 'parallax-effect' di file HTML Anda.");
            }
        });
    </script>
</body>
</html>