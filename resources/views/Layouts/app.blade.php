<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <!-- Link ke file CSS Tailwind dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Link ke icon jika diperlukan -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-black text-white p-4">
            <h1 class="text-2xl">Website Pemesanan</h1>
        </header>

        <!-- Konten Halaman -->
        <main>
            @yield('content')  <!-- Tempat untuk konten spesifik halaman -->
        </main>

        <!-- Footer -->
        <footer class="bg-black text-white text-center p-4 mt-10">
            <p>&copy; 2024 Semua Hak Dilindungi</p>
        </footer>
    </div>
</body>
</html>
