<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan | ZamJoper</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="flex justify-between items-center py-4 px-10 bg-white shadow-md fixed w-full z-10">
        <div class="text-2xl font-bold">ZamJoper.STD</div>
        <div class="space-x-8 text-lg">
            <a href="/" class="text-gray-700 font-medium hover:text-black transition duration-300">Home</a>
            <a href="#" class="text-gray-700 font-medium hover:text-black transition duration-300">Blog</a>
            <a href="#" class="text-gray-700 font-medium hover:text-black transition duration-300">About</a>
            <a href="#" class="text-gray-700 font-medium hover:text-black transition duration-300">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative h-80 bg-cover bg-center" style="background-image: url('{{ asset('images/ayam.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center">
            <h1 class="text-4xl md:text-5xl font-bold">Pemesanan Layanan</h1>
            <p class="text-lg md:text-2xl mt-4">Pilih layanan yang Anda inginkan dan isi detail di bawah ini.</p>
        </div>
    </div>

    <!-- Form Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Form Pemesanan Layanan</h2>

            <form action="{{ route('submit-order') }}" method="POST" class="space-y-8">
                @csrf
                <!-- Nama Lengkap -->
                <div class="flex flex-col lg:flex-row gap-6">
                    <div class="flex-1">
                        <label for="full-name" class="block text-lg font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="full-name" name="full_name" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black" placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <!-- Email -->
                    <div class="flex-1">
                        <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black" placeholder="Masukkan email Anda">
                    </div>
                </div>

                <!-- Pilihan Layanan -->
                <div>
                    <label for="service" class="block text-lg font-medium text-gray-700">Pilih Layanan</label>
                    <select id="service" name="service" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
                        <option value="product-photography">Product Photography</option>
                        <option value="influencer-marketing">Influencer Marketing</option>
                        <option value="photography-and-marketing">Photography & Influencer Marketing</option>
                    </select>
                </div>

                <!-- Pesan -->
                <div>
                    <label for="message" class="block text-lg font-medium text-gray-700">Pesan / Detail Layanan</label>
                    <textarea id="message" name="message" rows="4" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black" placeholder="Tuliskan pesan atau detail tambahan tentang pesanan Anda"></textarea>
                </div>

                <!-- Button -->
                <div class="flex justify-center">
                    <button type="submit" class="bg-black text-white py-3 px-6 rounded-lg font-bold hover:bg-gray-700 transition duration-300">
                        Kirim Pemesanan → 
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Contact Support Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-left">
            <h2 class="text-2xl font-bold text-gray-800">Butuh Bantuan?</h2>
            <p class="mt-4 text-gray-600 text-lg">
                Jika Anda memiliki pertanyaan lebih lanjut atau membutuhkan bantuan, silakan hubungi kami melalui email di bawah ini.
            </p>
            <p class="mt-4 text-gray-800 font-semibold">email@example.com</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow-md py-6">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Brand Name -->
            <div class="text-xl font-bold text-gray-800">
                ZamJoper.STD
            </div>
            <!-- Social Media Icons -->
            <div class="flex space-x-4">
                <a href="#" class="text-gray-600 hover:text-gray-800 text-2xl flex items-center justify-center">
                    <i class="uil uil-facebook"></i> <!-- Ikon Facebook -->
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-800 text-2xl flex items-center justify-center">
                    <i class="uil uil-linkedin"></i> <!-- Ikon LinkedIn -->
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-800 text-2xl flex items-center justify-center">
                    <i class="uil uil-twitter"></i> <!-- Ikon Twitter -->
                </a>
            </div>
        </div>
        <!-- Copyright Section -->
        <div class="bg-gray-50 py-4 mt-4 text-center text-gray-500 text-sm">
            Copyright © 2024 | ZamJoper
        </div>
    </footer>

</body>
</html>
