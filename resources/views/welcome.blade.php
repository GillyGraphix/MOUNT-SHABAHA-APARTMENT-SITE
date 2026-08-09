<!DOCTYPE html>
<html lang="en" class="scroll-smooth" x-data="{ darkMode: $persist(false) }" :class="darkMode ? 'dark' : ''">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mount Shabaha Apartments | Luxury Stays in Boma Ng'ombe, Kilimanjaro</title>
    <meta name="description" content="Experience ultimate luxury and privacy at Mount Shabaha Apartments in Boma Ng'ombe. Perfectly situated near Kilimanjaro International Airport (KIA), Moshi, and Arusha. Book your exclusive stay today.">
    <meta name="keywords" content="luxury apartments kilimanjaro, serviced apartments boma ng'ombe, accommodation near KIA, hotels near kilimanjaro airport, mount shabaha apartments, airbnb moshi arusha, kilimanjaro places to stay">
    <meta name="author" content="Mount Shabaha Apartments">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mountshabaha.co.tz/"> <meta property="og:title" content="Mount Shabaha Apartments | Luxury Stays in Kilimanjaro">
    <meta property="og:description" content="Exclusive and spacious serviced apartments in Boma Ng'ombe. Minutes away from KIA, Moshi, and Arusha.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=1200"> 

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mount Shabaha Apartments | Luxury Stays">
    <meta name="twitter:description" content="Exclusive serviced apartments in Boma Ng'ombe, Kilimanjaro.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=1200">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style> [x-cloak] { display: none !important; } </style>
</head>

<body x-cloak class="bg-[#F4F4F4] dark:bg-[#001D21] text-[#005461] dark:text-gray-200 font-sans antialiased transition-colors duration-500 overflow-x-hidden">

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
        class="fixed bottom-24 right-6 bg-[#005461] dark:bg-[#00B7B5] text-white w-12 h-12 rounded-full flex items-center justify-center text-xl shadow-2xl hover:scale-110 transition-all duration-300 z-50 border-2 border-transparent dark:border-white/20">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>
</html>