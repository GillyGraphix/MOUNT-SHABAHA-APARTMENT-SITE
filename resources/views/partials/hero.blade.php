<header class="relative h-screen flex flex-col justify-center items-center text-center px-4 md:px-6 overflow-hidden">
    
    <div class="absolute inset-0 bg-gradient-to-b from-[#005461]/80 to-[#000000]/70 z-10"></div>
    
    <div class="absolute top-20 left-4 md:top-8 md:left-8 w-10 md:w-24 h-10 md:h-24 border-t-2 border-l-2 border-[#00B7B5] z-20 pointer-events-none"></div>
    <div class="absolute top-20 right-4 md:top-8 md:right-8 w-10 md:w-24 h-10 md:h-24 border-t-2 border-r-2 border-[#00B7B5] z-20 pointer-events-none"></div>
    <div class="absolute bottom-28 left-4 md:bottom-8 md:left-8 w-10 md:w-24 h-10 md:h-24 border-b-2 border-l-2 border-[#00B7B5] z-20 pointer-events-none"></div>
    <div class="absolute bottom-28 right-4 md:bottom-8 md:right-8 w-10 md:w-24 h-10 md:h-24 border-b-2 border-r-2 border-[#00B7B5] z-20 pointer-events-none"></div>
    
    <div id="hero-slider" class="absolute inset-0 z-0">
        <div class="slider-img absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat bg-fixed transition-opacity duration-1000 ease-in-out opacity-100" style="background-image: url('/assets/images/hero/hero1.jpg');"></div>
        <div class="slider-img absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat bg-fixed transition-opacity duration-1000 ease-in-out opacity-0" style="background-image: url('/assets/images/hero/hero2.jpg');"></div>
        <div class="slider-img absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat bg-fixed transition-opacity duration-1000 ease-in-out opacity-0" style="background-image: url('/assets/images/hero/hero3.jpg');"></div>
        <div class="slider-img absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat bg-fixed transition-opacity duration-1000 ease-in-out opacity-0" style="background-image: url('/assets/images/hero/hero4.jpg');"></div>
    </div>
    
    <div class="relative z-20 max-w-5xl px-4 mt-8" data-aos="zoom-in" data-aos-duration="1200">
        <div class="flex justify-center space-x-1 mb-2 text-[#00B7B5] text-xs"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <h4 class="text-white uppercase tracking-[0.2em] font-bold mb-2 text-[10px] md:text-sm opacity-80"><i class="fa-solid fa-location-dot mr-1 text-[#00B7B5]"></i> BOMA NG'OMBE, KILIMANJARO</h4>
        <h1 class="text-3xl sm:text-5xl md:text-6xl text-white font-black mb-3 leading-tight uppercase">Mount Shabaha <br> <span class="text-[#00B7B5]">Apartment.</span></h1>
        <h3 class="text-sm md:text-2xl text-gray-200 font-light mb-6 md:mb-8">Elevate your standard of <span id="typing-text" class="font-bold text-[#00B7B5] border-r-2 border-[#00B7B5] pr-1 animate-pulse-cursor">Living.</span></h3>
        <a href="#apartments" class="inline-block border border-[#00B7B5] text-white px-8 py-3 uppercase tracking-widest text-[10px] md:text-sm font-bold hover:bg-[#00B7B5] transition duration-300">Discover Our Units</a>

        <div class="flex justify-center space-x-3 mt-8">
            <div class="slider-dot w-2.5 h-2.5 rounded-full bg-white opacity-100 scale-125 transition-all duration-500 shadow-lg"></div>
            <div class="slider-dot w-2.5 h-2.5 rounded-full bg-white opacity-40 transition-all duration-500"></div>
            <div class="slider-dot w-2.5 h-2.5 rounded-full bg-white opacity-40 transition-all duration-500"></div>
            <div class="slider-dot w-2.5 h-2.5 rounded-full bg-white opacity-40 transition-all duration-500"></div>
        </div>
    </div>

    <div class="absolute bottom-6 z-30 w-full max-w-3xl px-4">
        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-full flex justify-around py-3 px-6 text-white">
            <div class="text-center w-1/3">
                <h5 class="font-bold text-[9px] md:text-[10px] tracking-widest">PRIME ACCESS</h5>
                <p class="text-[8px] md:text-[9px] opacity-80">Boma Ng'ombe</p>
            </div>
            <div class="border-l border-white/20"></div>
            <div class="text-center w-1/3">
                <h5 class="font-bold text-[9px] md:text-[10px] tracking-widest">SECURE OASIS</h5>
                <p class="text-[8px] md:text-[9px] opacity-80">24/7 Guarded</p>
            </div>
            <div class="border-l border-white/20"></div>
            <div class="text-center w-1/3">
                <h5 class="font-bold text-[9px] md:text-[10px] tracking-widest">PREMIUM CONNECT</h5>
                <p class="text-[8px] md:text-[9px] opacity-80">Unlimited Wi-Fi</p>
            </div>
        </div>
    </div>
</header>

<style>
    .animate-pulse-cursor { animation: blink 0.8s infinite; }
    @keyframes blink { 0%, 100% { border-color: transparent; } 50% { border-color: #00B7B5; } }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const images = document.querySelectorAll('.slider-img');
        const dots = document.querySelectorAll('.slider-dot');
        let currentIndex = 0;

        setInterval(() => {
            images[currentIndex].classList.remove('opacity-100');
            images[currentIndex].classList.add('opacity-0');
            dots[currentIndex].classList.remove('opacity-100', 'scale-125');
            dots[currentIndex].classList.add('opacity-40');

            currentIndex = (currentIndex + 1) % images.length;

            images[currentIndex].classList.remove('opacity-0');
            images[currentIndex].classList.add('opacity-100');
            dots[currentIndex].classList.remove('opacity-40');
            dots[currentIndex].classList.add('opacity-100', 'scale-125');
        }, 5000);

        // Typing Effect
        const textElement = document.getElementById('typing-text');
        const words = ['Living.', 'Comfort.', 'Luxury.', 'Elegance.', 'Stay.'];
        let wordIndex = 0, charIndex = 0, isDeleting = false;
        function typeEffect() {
            const currentWord = words[wordIndex];
            if (isDeleting) { textElement.innerText = currentWord.substring(0, charIndex - 1); charIndex--; } 
            else { textElement.innerText = currentWord.substring(0, charIndex + 1); charIndex++; }
            let typeSpeed = isDeleting ? 50 : 100;
            if (!isDeleting && charIndex === currentWord.length) { typeSpeed = 3000; isDeleting = true; } 
            else if (isDeleting && charIndex === 0) { isDeleting = false; wordIndex = (wordIndex + 1) % words.length; typeSpeed = 500; }
            setTimeout(typeEffect, typeSpeed);
        }
        typeEffect();
    });
</script>