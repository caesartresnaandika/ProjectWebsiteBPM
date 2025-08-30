<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <title>@yield('title', 'BPM FTI UKDW - Kabinet Prhonesis Aletheia')</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
        .dropdown-enter-active, .dropdown-leave-active {
            transition: all 0.2s ease;
        }
        .dropdown-enter-from, .dropdown-leave-to {
            opacity: 0;
            transform: translateY(-10px);s
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: false, // Agar animasi berjalan setiap kali di-scroll
        anchorPlacement: 'center', // TAMBAHKAN BARIS INI
        mirror: false //memastikan animasi berjalan selalu dari start dan tidak ada mirror di animasinya 
      });
    </script>
</body>
</html>