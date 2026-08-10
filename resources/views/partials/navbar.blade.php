<!-- WhatsApp Floating Button -->
<a href="https://wa.me/255672454057" target="_blank" class="fixed bottom-6 right-6 z-[60] bg-[#25D366] text-white w-12 h-12 md:w-16 md:h-16 flex items-center justify-center rounded-full shadow-2xl hover:scale-110 transition-all duration-300 animate-bounce-slow">
    <i class="fa-brands fa-whatsapp text-3xl md:text-4xl"></i>
</a>

<!-- Navbar -->
<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 50); if(window.pageYOffset > 50) open = false;"
     :class="scrolled ? 'bg-white/90 dark:bg-[#002B32]/95 shadow-lg text-[#005461] dark:text-white py-3' : 'bg-transparent text-white py-5'"
     data-aos="fade-down" data-aos-duration="800" 
     class="fixed w-full z-50 backdrop-blur-md px-6 md:px-12 flex justify-between items-center transition-all duration-500">
    
    <a href="#" data-aos="fade-right" data-aos-delay="200" class="flex items-center">
        <img src="assets/images/shabaha.png" alt="Shabaha Logo" 
             :class="scrolled ? 'brightness-100' : 'brightness-0 invert'" 
             class="h-12 md:h-16 w-auto object-contain transition-all duration-300">
    </a>

    <!-- Desktop Menu -->
    <div data-aos="fade-left" data-aos-delay="400" class="hidden md:flex space-x-8 text-[11px] font-bold uppercase tracking-[0.2em] items-center">
        <a href="#apartments" class="hover:text-[#00B7B5] transition duration-300">Residences</a>
        <a href="#amenities" class="hover:text-[#00B7B5] transition duration-300">Amenities</a>
        <a href="#gallery" class="hover:text-[#00B7B5] transition duration-300">Gallery</a>
        <a href="#contact" class="hover:text-[#00B7B5] transition duration-300">Contact</a>
        
        <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-black/10 dark:hover:bg-white/10 transition-all">
            <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
            <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
        </button>

        <a href="#contact" :class="scrolled ? 'bg-[#005461] text-white hover:bg-[#018790]' : 'border border-white text-white hover:bg-white hover:text-[#005461]'" class="px-6 py-2.5 transition duration-300">Book a Space</a>
    </div>

    <!-- Mobile Right Actions -->
    <div class="flex items-center space-x-4 md:hidden">
        
        <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-black/10 dark:hover:bg-white/10 transition-all">
            <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
            <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
        </button>

        <!-- Hamburger Button -->
        <button @click="open = !open" class="w-10 h-10 flex flex-col justify-center items-center relative focus:outline-none transition-transform duration-300 active:scale-95">
            <span class="w-7 h-[2px] bg-current transition-all duration-300 ease-in-out absolute" :class="open ? 'rotate-45 translate-y-0' : '-translate-y-2'"></span>
            <span class="w-7 h-[2px] bg-current transition-all duration-300 ease-in-out absolute" :class="open ? 'opacity-0 scale-x-0' : 'opacity-100'"></span>
            <span class="w-7 h-[2px] bg-current transition-all duration-300 ease-in-out absolute" :class="open ? '-rotate-45 translate-y-0' : 'translate-y-2'"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-5"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-5"
         @click.away="open = false" 
         class="absolute top-full left-0 w-full bg-[#002B32] shadow-2xl md:hidden p-8 flex flex-col space-y-6 text-center font-bold uppercase tracking-widest text-white z-50 border-t border-white/10">
        <a href="#apartments" @click="open = false" class="hover:text-[#00B7B5] transition duration-300">Residences</a>
        <a href="#amenities" @click="open = false" class="hover:text-[#00B7B5] transition duration-300">Amenities</a>
        <a href="#gallery" @click="open = false" class="hover:text-[#00B7B5] transition duration-300">Gallery</a>
        <a href="#contact" @click="open = false" class="hover:text-[#00B7B5] transition duration-300">Contact</a>
        <a href="#contact" @click="open = false" class="bg-[#00B7B5] text-[#001D21] py-3 rounded shadow transition duration-300 hover:bg-white">Book a Space</a>
    </div>
</nav>

<style>
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .animate-bounce-slow { animation: bounce-slow 3s infinite; }
</style>