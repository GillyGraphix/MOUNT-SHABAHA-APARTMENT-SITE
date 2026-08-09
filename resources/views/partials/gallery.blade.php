<section id="gallery" class="py-24 bg-white dark:bg-[#001D21] transition-colors duration-500 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16" data-aos="fade-up">
            <h4 class="text-[#00B7B5] uppercase tracking-[0.2em] font-bold mb-3 text-sm">Visual Journey</h4>
            <h2 class="text-4xl md:text-5xl font-light mb-4 text-[#005461] dark:text-white">Our Exclusive <span class="font-bold">Gallery</span></h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 h-[600px] md:h-[700px]">
            
            <a href="/assets/images/gallery/shabaha1.jpg" data-fslightbox="gallery" class="col-span-2 row-span-2 relative overflow-hidden rounded-xl group shadow-lg">
                <img src="/assets/images/gallery/shabaha1.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Feature 1">
                <div class="absolute inset-0 bg-[#005461]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                    <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                </div>
            </a>
            
            @for ($i = 2; $i <= 4; $i++)
                <a href="/assets/images/gallery/shabaha{{ $i }}.jpg" data-fslightbox="gallery" class="relative overflow-hidden rounded-xl group shadow-lg">
                    <img src="/assets/images/gallery/shabaha{{ $i }}.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Feature {{ $i }}">
                    <div class="absolute inset-0 bg-[#005461]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-2xl"></i>
                    </div>
                </a>
            @endfor
            
            <a href="/assets/images/gallery/shabaha5.jpg" data-fslightbox="gallery" class="relative overflow-hidden rounded-xl group shadow-lg flex items-center justify-center cursor-pointer">
                <img src="/assets/images/gallery/shabaha5.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 brightness-50" alt="More">
                <span class="absolute text-white font-bold text-lg tracking-widest uppercase transition-all duration-300 group-hover:scale-110">View All</span>
            </a>
        </div>
    </div>
</section>

<div class="hidden">
    @for ($i = 6; $i <= 11; $i++)
        <a href="/assets/images/gallery/shabaha{{ $i }}.jpg" data-fslightbox="gallery"></a>
    @endfor
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.1/index.min.js"></script>