<!DOCTYPE html>
<html lang="en" class="scroll-smooth" x-data="{ darkMode: $persist(false) }" :class="darkMode ? 'dark' : ''">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mount Shabaha Apartment | Luxury Stays in Boma Ng'ombe, Kilimanjaro</title>
    <meta name="description" content="Experience ultimate luxury and privacy at Mount Shabaha Apartment in Boma Ng'ombe. Perfectly situated near Kilimanjaro International Airport (KIA), Moshi, and Arusha. Book your exclusive stay today.">
    <meta name="keywords" content="luxury apartment kilimanjaro, serviced apartment boma ng'ombe, accommodation near KIA, hotels near kilimanjaro airport, mount shabaha apartment, airbnb moshi arusha, kilimanjaro places to stay">
    <meta name="author" content="Mount Shabaha Apartment">
    <meta name="robots" content="index, follow">

    <!-- Favicon (Picha ya kwenye tab ya juu) -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Open Graph (WhatsApp / Facebook Preview) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mount-shabaha-apartment.onrender.com/"> 
    <meta property="og:title" content="Mount Shabaha Apartment | Luxury Stays in Kilimanjaro">
    <meta property="og:description" content="Exclusive and spacious serviced apartment in Boma Ng'ombe. Minutes away from KIA, Moshi, and Arusha.">
    <meta property="og:image" content="{{ url('assets/images/link-preview.jpg') }}"> 

    <!-- Twitter Preview -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mount Shabaha Apartment | Luxury Stays">
    <meta name="twitter:description" content="Exclusive serviced apartment in Boma Ng'ombe, Kilimanjaro.">
    <meta name="twitter:image" content="{{ url('assets/images/link-preview.jpg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Alpine Plugins & Core -->
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style> [x-cloak] { display: none !important; } </style>
</head>

<body class="bg-[#F4F4F4] dark:bg-[#001D21] text-[#005461] dark:text-gray-200 font-sans antialiased transition-colors duration-500 overflow-x-hidden">

    <!-- Ujumbe wa Pongezi (Success Alert) Utaonekana hapa kama email imetumwa -->
    @if(session('success'))
        <div x-data="{ show: true }" 
             x-show="show" 
             x-init="setTimeout(() => show = false, 5000)"
             class="fixed top-24 right-6 z-[100] bg-green-500 text-white px-6 py-4 rounded shadow-2xl flex items-center gap-4"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-x-10"
             x-transition:enter-end="opacity-100 translate-x-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 translate-x-0"
             x-transition:leave-end="opacity-0 translate-x-10">
            <i class="fa-solid fa-check-circle text-2xl"></i>
            <div>
                <h4 class="font-bold text-sm uppercase tracking-wider">Success</h4>
                <p class="text-sm font-light">{{ session('success') }}</p>
            </div>
            <button @click="show = false" class="text-white hover:text-gray-200 ml-2 focus:outline-none">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>
    @endif

    @include('partials.preloader')
    
    @include('partials.navbar')

    @include('partials.hero')

    @include('partials.about')

    @include('partials.apartments')

    @include('partials.amenities')

    @include('partials.gallery')

    @include('partials.location')

    @include('partials.booking')

    @include('partials.footer')

    <!-- Kitufe cha Scroll to Top kilichosawazishwa -->
    <button 
        x-data="{ show: false }" 
        @scroll.window="show = window.pageYOffset > 500" 
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-10"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-10"
        type="button" 
        aria-label="Scroll to top"
        class="fixed bottom-24 right-6 bg-[#005461] dark:bg-[#00B7B5] text-white w-12 h-12 rounded-full flex items-center justify-center text-xl shadow-2xl hover:scale-110 transition-all duration-300 z-50 border-2 border-white/25">
        <i class="fa-solid fa-arrow-up text-white"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>