<div id="preloader" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-white transition-opacity duration-700">
    <div class="mb-8 animate-pulse">
        <!-- Hapa nimeongeza ukubwa uwe mkubwa zaidi (w-80 / w-96) ili iwe kubwa kuliko line ya chini -->
        <img src="assets/images/preloader.png" alt="Loading..." class="w-80 md:w-96 h-auto object-contain">
    </div>
    <div class="w-64 h-1.5 bg-gray-100 rounded-full overflow-hidden">
        <div id="progress-bar" class="h-full bg-[#00B7B5] w-0 transition-all duration-300 ease-linear"></div>
    </div>
</div>

<script>
    // 1. ZUIA BROWSER KUKUMBUKA SCROLL POSITION
    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }

    // 2. LAZIMISHA WEBSITE IANZE JUU KABISA KABLA HAIJAFUNGUKA
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
    window.scrollTo(0, 0);

    (function() {
        const preloader = document.getElementById('preloader');
        const progressBar = document.getElementById('progress-bar');
        let isHidden = false;

        function hidePreloader() {
            if (isHidden) return;
            isHidden = true;
            
            progressBar.style.width = '100%';
            
            // Hakikisha tena ipo juu kabla ya kuficha pazia
            window.scrollTo(0, 0);
            
            setTimeout(() => {
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                    // AOS inaanza
                    if (typeof AOS !== 'undefined') {
                        AOS.init({ duration: 800, once: true, offset: 50, easing: 'ease-in-out' });
                        AOS.refresh();
                    }
                }, 700);
            }, 300);
        }

        window.addEventListener('load', hidePreloader);
        setTimeout(hidePreloader, 3000); 
    })();
</script>