<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-center py-16">
    <h1 class="text-4xl font-bold text-gray-800">Pesanan Berhasil!</h1>
    <p class="mt-4 text-lg text-gray-600">Terima kasih telah memesan. Kami akan segera memproses pesanan Anda.</p>
    <a href="{{ route('order') }}" class="mt-6 inline-block bg-black text-white py-3 px-6 rounded-lg hover:bg-gray-700 transition duration-300">
        Kembali ke Halaman Pemesanan
    </a>
</body>
</html>
