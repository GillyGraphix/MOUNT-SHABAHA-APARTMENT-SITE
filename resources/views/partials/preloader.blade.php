<div id="preloader" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-white transition-opacity duration-700">
    <div class="mb-8 animate-pulse">
        <svg class="w-16 h-16 text-[#005461]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
            <path d="M2 17l10 5 10-5"></path>
            <path d="M2 12l10 5 10-5"></path>
        </svg>
    </div>
    <div class="w-48 h-1 bg-gray-100 rounded-full overflow-hidden">
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