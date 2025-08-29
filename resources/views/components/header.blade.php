@if(isset($title))
    <title>{{ $title }} - BPM FTI UKDW</title>
@else
    <title>BPM FTI UKDW - Kabinet Prhonesis Aletheia</title>
@endif

<meta name="description" content="@yield('description', 'Badan Perwakilan Mahasiswa Fakultas Teknologi Informasi Universitas Kristen Duta Wacana')">
<meta name="keywords" content="@yield('keywords', 'BPM, FTI, UKDW, Mahasiswa, Organisasi')">

@stack('meta')