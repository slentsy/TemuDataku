<x-app-layout>
    <div class="py-12">
        <div class="">
            <div class="flex flex-row items-start">
                <div class="flex flex-col w-full">
                    <h1 class="text-[#035D37] font-black text-3xl">
                        🎯 TemuDataku: Platform Praktik Data
                        Science untuk Semua
                    </h1>
                    <p class="mt-5 text-[22px]">
                        Platform belajar data science secara mandiri dengan bantuan katalog latihan praktis. Cocok untuk kamu yang belajar otodidak atau sedang cari pengalaman sebelum terjun ke dunia kerja.
                    </p>
                    <div class="mt-5">
                        <img src="{{ asset('images/mentor-2.webp') }}" alt="About Us" class="rounded-lg shadow-lg w-full object-cover h-[550px]">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Latihan Real-World -->
    <div class="mt-5">
        <div class="">
            <h2 class="text-[#035D37] font-black text-3xl">
                📚 Latihan Real-World & Katalog Terstruktur
            </h2>
            <p class="mt-5 text-[22px]">
                Di TemuDataku, kamu bisa memilih topik seperti Machine Learning, Data Analysis, hingga NLP. Materi dikemas dalam bentuk latihan nyata yang dapat langsung kamu praktikkan, lengkap dengan deskripsi, harga, dan status ketersediaan.
            </p>
            
            <!-- Grid untuk 3 gambar -->
            <div class="mt-10 grid grid-cols-3 justify-items-center">
                <div class="text-center">
                    <img src="{{ asset('images/mentor-4.webp') }}" alt="Mentoring" class="rounded-lg shadow-lg w-[320px] h-[320px] object-cover mb-4">
                    <h3 class="text-xl font-semibold text-[#035D37]">Mentoring</h3>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/practice.webp') }}" alt="Practice" class="rounded-lg shadow-lg w-[320px] h-[320px] object-cover mb-4">
                    <h3 class="text-xl font-semibold text-[#035D37]">Practice</h3>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/bootcamp.webp') }}" alt="Bootcamp" class="rounded-lg shadow-lg w-[320px] h-[320px] object-cover mb-4">
                    <h3 class="text-xl font-semibold text-[#035D37]">Bootcamp</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Section dengan gambar di kiri dan teks di kanan -->
    <div class="py-12 mt-10 mb-10">
        <div class="">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
                <div>
                    <img src="{{ asset('images/mentor-1.jpeg') }}" alt="Real-World Training" class="rounded-lg shadow-lg w-[450px] h-[360px] object-cover">
                </div>
                <div>
                    <h2 class="text-[#035D37] font-black text-[32px]">
                        💡 Platform Edukasi Data Science & AI #1
                    </h2>
                    <p class="mt-10 text-[22px] mb-10">
                        TemuDataku adalah platform mentoring data science terpersonalisasi yang menghubungkan Anda dengan mentor berpengalaman untuk mempercepat perjalanan belajar Anda. Sesi 1-on-1 dan kelompok kecil yang terjangkau, ditambah dengan latihan data praktis, memberdayakan Anda untuk menguasai analisis data, machine learning, dan bidang serupa.
                    </p>
                    @guest
                    <a href="{{ route('register') }}" class="mt-10 bg-[#035D37] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#024429] transition-colors">
                        Mulai Sekarang
                    </a>
                    @else
                    <a href="{{ route('mentoring') }}" class="mt-10 bg-[#035D37] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#024429] transition-colors">
                        Mulai Sekarang
                    </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</x-app-layout>