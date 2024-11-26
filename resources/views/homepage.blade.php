<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZamJoper</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="flex justify-between items-center py-4 px-10 bg-white shadow-md fixed w-full z-10">
        <div class="text-2xl font-bold">ZamJoper.STD</div>
        <div class="space-x-8 text-lg">
            <a href="#" class="text-gray-700 font-medium hover:text-black transition duration-300">Home</a>
            <a href="#" class="text-gray-700 font-medium hover:text-black transition duration-300">Blog</a>
            <a href="#" class="text-gray-700 font-medium hover:text-black transition duration-300">About</a>
            <a href="#" class="text-gray-700 font-medium hover:text-black transition duration-300">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/ayam.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center">
            <h1 class="text-5xl md:text-6xl font-bold">ZamJoper</h1>
            <p class="text-lg md:text-2xl mt-4">asdasdasddasdasdasdsd</p>
            <a href="{{ route('order') }}" class="mt-6 bg-black text-white font-bold py-3 px-6 rounded-lg hover:bg-gray-700 transition duration-300">
        PESAN SEKARANG →
        </a>
        </div>
    </div>

    <!-- Section Header -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between">
                <!-- Main Title -->
                <div class="max-w-2xl">
                    <h1 class="text-4xl lg:text-5xl font-bold leading-tight text-gray-800">
                        Capturing Influence,<br> Crafting Excellence.
                    </h1>
                </div>
                <!-- Subtitle -->
                <div class="mt-6 lg:mt-0 lg:max-w-lg">
                    <p class="text-xl font-semibold text-gray-800">
                        +500 Successful Influencer Campaigns
                    </p>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Elevate your brand with expert influencer marketing and photography services. Let’s create captivating stories together that leave a lasting impression.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Content -->
    <section class="py-10 bg-gray-100">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Product Photography" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-gray-800">Product Photography</h2>
                        <p class="mt-4 text-gray-600">
                            Highlight the studio’s expertise in capturing stunning influencer-style product photos. Showcase your team’s skills in creating visually appealing content.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Influencer Marketing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-gray-800">Influencer Marketing</h2>
                        <p class="mt-4 text-gray-600">
                            Amplify your brand’s reach, connect with your audience authentically, and elevate your online presence. Join us today and start your journey to success!
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Influencer Marketing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-gray-800">Influencer Marketing</h2>
                        <p class="mt-4 text-gray-600">
                            Amplify your brand’s reach, connect with your audience authentically, and elevate your online presence. Join us today and start your journey to success!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section1 -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <!-- Text Content -->
                <div class="lg:w-1/2">
                    <h1 class="text-4xl font-bold text-gray-800">
                        Why Choose Simple Nova Influencer Marketing
                    </h1>
                    <p class="mt-4 text-gray-600 text-lg">
                        We've partnered with a diverse network of influencers across niches and industries, ensuring that your product reaches the right audience. From micro-influencers to macro-influencers, we tailor collaborations to maximize your brand's exposure.
                    </p>
                    <div class="mt-6 space-x-4">
                        <button class="bg-black text-white py-3 px-6 rounded-lg font-bold hover:bg-gray-700 transition duration-300">
                            CONTACT US →
                        </button>
                        <button class="bg-gray-200 text-black py-3 px-6 rounded-lg font-bold hover:bg-gray-300 transition duration-300">
                            LEARN MORE
                        </button>
                    </div>
                </div>
                <!-- Image -->
                <div class="lg:w-1/2">
                    <img src="/mnt/data/image.png" alt="Influencer Marketing" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section2 -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:w-1/2">
                <h1 class="text-4xl font-bold text-gray-800">
                    Why Choose Simple Nova Influencer Marketing
                </h1>
                <p class="mt-4 text-gray-600 text-lg">
                    We've partnered with a diverse network of influencers across niches and industries, ensuring that your product reaches the right audience.
                </p>
                <div class="mt-6 space-x-4">
                    <button class="bg-black text-white py-3 px-6 rounded-lg font-bold hover:bg-gray-700 transition duration-300">
                        CONTACT US →
                    </button>
                    <button class="bg-gray-200 text-black py-3 px-6 rounded-lg font-bold hover:bg-gray-300 transition duration-300">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="lg:w-1/2">
                <img src="assets/images/image.png" alt="Influencer Marketing" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Conatct US -->
 <!-- Hero Section -->
 <section 
    class="relative bg-center text-white text-center flex flex-col justify-center items-center" 
    style="
        background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('images/ayam.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 70vh; /* Mengurangi tinggi elemen */
        overflow: hidden; /* Memastikan bagian bawah yang terpotong tidak terlihat */
    "
>
    <div class="max-w-4xl px-4 md:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Ready to Shine Bright?</h1>
        <p class="text-lg md:text-xl mb-6 max-w-2xl mx-auto">
            Elevate your brand with Enova Studio’s expert influencer marketing and photography services. 
            Let’s create captivating stories together that leave a lasting impression.
        </p>
        <div class="flex flex-col md:flex-row items-center gap-4 bg-white px-6 py-4 rounded-lg shadow-lg">
            <input 
                type="text" 
                placeholder="Ignite your brand’s success today" 
                class="flex-1 py-3 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-black"
            >
            <button 
                class="py-3 px-6 bg-black text-white font-bold rounded-lg hover:bg-gray-700 transition duration-300"
            >
                CONTACT US →
            </button>
        </div>
    </div>
</section>

    <!-- Contact Support Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-left">
            <h2 class="text-2xl font-bold text-gray-800">Contact support</h2>
            <p class="mt-4 text-gray-600 text-lg">
                Let’s connect! Reach out to us today, and let’s turn your ideas into influencer marketing success.
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
