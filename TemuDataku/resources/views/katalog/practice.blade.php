<x-app-layout>
    <div class="py-12">
        <div class="">
            <div class="flex flex-row items-start">
                <div class="flex flex-col w-full">
                    <h1 class="text-[#035D37] font-black text-3xl">
                        🎓 Mentoring: Belajar Langsung dari Ahli
                    </h1>
                    <p class="mt-5 text-[22px]">
                        Program mentoring memberikan kamu akses untuk belajar langsung dari mentor berpengalaman di bidang data science, machine learning, dan teknologi lainnya.
                    </p>
                    <div class="mt-5">
                        <img src="{{ asset('images/mentor-2.webp') }}" alt="Mentoring Banner" class="rounded-lg shadow-lg w-full object-cover h-[550px]">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Katalog Mentoring -->
    <div class="mt-10 mb-16">
        <div class="">
            <h2 class="text-[#035D37] font-black text-3xl">
                📋 Daftar Program Practice
            </h2>
            <p class="mt-5 text-[22px]">
                Pada practice ini kamu akan mendapatkan pengalaman praktik mengolah data secara langsung dengan beragam studi kasus dan data yang disediakan.
            </p>

            @if($katalog->isEmpty())
                <p class="mt-10 text-lg text-gray-600">Belum ada program mentoring yang tersedia saat ini.</p>
            @else
                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach($katalog as $item)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('images/practice_coding.jpg' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-[240px] object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-[#035D37] mb-2">{{ $item->judul }}</h3>
                                <p class="text-gray-700 text-[16px] mb-4">{{ Str::limit($item->deskripsi, 200) }}</p>
                                @if ($item->harga == 0)
                                    <p class="text-yellow-600 font-semibold">Coming Soon</p>
                                @else
                                    <p class="text-[#035D37] font-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
