@extends('components.layout')

@section('title', 'Tentang Kami - BPM FTI UKDW')

@section('content')

    <section class="bg-indigo-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight" data-aos="fade-down">TENTANG KAMI</h1>
            <p class="mt-4 text-lg md:text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Mengenal lebih dekat Badan Perwakilan Mahasiswa FTI UKDW dan semangat di balik Kabinet Phronesis Aletheia.
            </p>
        </div>
    </section>

    <main class="py-20 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <section class="text-center">
                <div data-aos="zoom-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">FILOSOFI KABINET</h2>
                    <p class="mt-3 text-lg text-indigo-700 font-semibold">PHRONESIS ALETHEIA</p>
                    <div class="mt-4 max-w-3xl mx-auto text-gray-600 text-lg">
                        <p>
                            Nama "Phronesis Aletheia" bukan sekadar julukan, melainkan fondasi nilai yang menjiwai setiap gerak langkah kami. Ini adalah sinergi dari dua konsep Yunani kuno yang membentuk identitas dan komitmen kami.
                        </p>
                    </div>
                </div>

                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                    <div class="bg-gray-50 rounded-xl p-8 shadow-sm" data-aos="fade-up" data-aos-duration="600">
                        <h3 class="text-2xl font-semibold text-gray-900">Phronesis</h3>
                        <p class="mt-3 text-gray-600">
                            Merepresentasikan kebijaksanaan praktis; kemampuan untuk menalar dan bertindak secara etis dan efektif dalam setiap situasi. Ini adalah komitmen kami untuk membuat keputusan yang cerdas, relevan, dan berdampak positif bagi mahasiswa.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-8 shadow-sm" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                        <h3 class="text-2xl font-semibold text-gray-900">Aletheia</h3>
                        <p class="mt-3 text-gray-600">
                            Melambangkan kebenaran yang hakiki dan keterbukaan. Nilai ini mendorong kami untuk selalu bertindak dengan integritas, transparansi, dan kejujuran dalam menyalurkan aspirasi serta menyajikan informasi yang otentik.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-8 shadow-sm" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                        <h3 class="text-2xl font-semibold text-gray-900">Sinergi Keduanya</h3>
                        <p class="mt-3 text-gray-600">
                            Sebagai Phronesis Aletheia, kami mengusung kebijaksanaan yang berlandaskan kebenaran. Setiap inisiatif dan keputusan tidak hanya dirancang untuk efektif, tetapi juga dipastikan akuntabel, jujur, dan dapat dipertanggungjawabkan.
                        </p>
                    </div>
                </div>
            </section>

            <section class="mt-20 pt-16 border-t border-gray-200">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center" data-aos="fade-up">Visi & Misi</h2>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="text-center md:text-left" data-aos="fade-right" data-aos-duration="800">
                        <h3 class="text-2xl font-semibold text-indigo-700">Visi</h3>
                        <p class="mt-4 text-xl text-gray-700 leading-relaxed">
                            "Mewujudkan BPM FTI sebagai rumah bagi seluruh mahasiswa dan sivitas akademika FTI UKDW dalam menyalurkan aspirasi serta menjunjung tinggi nilai-nilai kedutawacanaan."
                        </p>
                    </div>
                    <div class="text-center md:text-left" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <h3 class="text-2xl font-semibold text-indigo-700">Misi</h3>
                        <p class="mt-4 text-xl text-gray-700 leading-relaxed">
                            "Menampung, menyalurkan dan memperjuangkan aspirasi mahasiswa dan sivitas akademika serta meningkatkan kapasitas dan kualitas sumber daya mahasiswa FTI UKDW."
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </main>

@endsection