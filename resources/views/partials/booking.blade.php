<section id="contact" class="py-24 px-6 md:px-12 bg-[#F4F4F4] dark:bg-[#001D21] transition-colors duration-500 relative">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row bg-white dark:bg-[#002B32] shadow-2xl overflow-hidden transition-colors duration-500">
        
        <!-- Upande wa Kushoto (Taarifa & Mlima Wa Ukweli) -->
        <div class="md:w-2/5 bg-[#005461] dark:bg-[#003B44] text-white p-12 flex flex-col justify-between relative overflow-hidden transition-colors duration-500">
            
            <!-- === MLIMA WAKO (Umewekwa kama Watermark kwa chini) === -->
            <svg class="absolute bottom-0 right-0 w-64 md:w-80 h-auto opacity-50 pointer-events-none text-[#00B7B5] fill-current" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 78.87">
                <defs><style>.cls-1{fill-rule:evenodd;}</style></defs>
                <title>mountains</title>
                <path class="cls-1" d="M90.4,28.29l.08.24.22.62.08.24L91,30l.08.24.19.56.08.23.18.53.08.23.17.5.08.23L92,33l.07.23.15.44.08.23.14.4.08.23.13.38.08.22.12.35.07.22L93,36l.07.21.11.31.07.21.1.29.07.2.09.26.07.2.09.25.07.19.08.23.06.18.07.21.06.18.07.2.06.17.07.18,0,.17.06.16.06.16,0,.15,0,.16,0,.14.05.15,0,.12,0,.15,0,.11,0,.14,0,.1,0,.13,0,.1,0,.12,0,.09,0,.12,0,.08,0,.11,0,.07,0,.1,0,.07,0,.1,0,.06,0,.09v.06l0,.09,0,0,0,.08v0l0,.09,0,.11v.25h0l0,.18v.5h0V44h0v.08h0v.29h0v.35h0v.13h0v.13h0v.15h0v.16h0v.17h0v.18h0V46h0v.22h0v.24c.07,5,6.36,11,5.2,14.44s4.68,9.9,6.56,14.71H98.63a3.31,3.31,0,0,0-.6-1.91L79.93,44.76l3-4.85,3.65-3.66,3.69-8.1h0l.08.14ZM92.19,27l30.28,48.39a2.17,2.17,0,0,1,.41,1.28,2.21,2.21,0,0,1-2.21,2.21H3.28A3.28,3.28,0,0,1,.53,73.79L47.26,1.66A3.16,3.16,0,0,1,48.37.5,3.29,3.29,0,0,1,52.9,1.55L78.46,42.41l10-15.35a2.07,2.07,0,0,1,.75-.78,2.2,2.2,0,0,1,3,.71ZM52.44,75.58H3.9L14.33,61.79l16-28L39.47,23.2l4.65-10.28,6-9.64h0l.12.2c.88,2.66,1.26,4.11,2,6.25.44,1.23,2.3,3.91,2.67,4.93,5.31,14.76,2.62,9.34,2.69,15.88.08,7.51,9.47,16.45,7.74,21.53-1.93,5.62,8.38,16.22,10.31,23.51Z"/>
            </svg>
            <!-- ================================================= -->

            <div class="relative z-10">
                <h3 class="text-3xl font-light mb-6">Reserve Your <br><span class="font-bold text-[#00B7B5]">Space</span></h3>
                <p class="text-gray-300 font-light mb-10 leading-relaxed">Ready to experience Mount Shabaha? Fill out the form, and our concierge team will reach out to confirm your booking details.</p>
                
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-phone text-[#00B7B5] text-xl"></i>
                        <span class="font-light">+255 672 454 057</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-envelope text-[#00B7B5] text-xl"></i>
                        <span class="font-light">booking.mtshabahaapartment@gmail.com</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-map-location-dot text-[#00B7B5] text-xl"></i>
                        <span class="font-light">Boma ng'ombe,Kilimanjaro-Tanzania</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upande wa Kulia (Fomu) -->
        <div class="md:w-3/5 p-12 relative z-10">
            <h4 class="text-2xl font-bold text-[#005461] dark:text-white mb-8 transition-colors">Booking Request</h4>
            
            <!-- FOMU IMEONGEZEWA ACTION NA CSRF TOKEN KWA AJILI YA KUTUMA EMAIL -->
            <form action="{{ route('booking.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" class="w-full border-b-2 border-gray-200 dark:border-gray-600 py-2 focus:outline-none focus:border-[#018790] transition text-[#005461] dark:text-gray-200 bg-transparent placeholder-gray-400" placeholder="Nice One" required>
                    </div>
                    <div>
                        <label class="block text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" name="email" class="w-full border-b-2 border-gray-200 dark:border-gray-600 py-2 focus:outline-none focus:border-[#018790] transition text-[#005461] dark:text-gray-200 bg-transparent placeholder-gray-400" placeholder="Nice@gmail.com" required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">Phone Number <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" class="w-full border-b-2 border-gray-200 dark:border-gray-600 py-2 focus:outline-none focus:border-[#018790] transition text-[#005461] dark:text-gray-200 bg-transparent placeholder-gray-400" placeholder="+255..." required>
                    </div>
                    <div>
                        <label class="block text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">Total Guests <span class="text-red-500">*</span></label>
                        <input type="number" name="guests" min="1" max="12" class="w-full border-b-2 border-gray-200 dark:border-gray-600 py-2 focus:outline-none focus:border-[#018790] transition text-[#005461] dark:text-gray-200 bg-transparent placeholder-gray-400" placeholder="e.g. 4 (Max 12)" required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">Check-In <span class="text-red-500">*</span></label>
                        <input type="text" id="checkin" name="checkin" class="w-full border-b-2 border-gray-200 dark:border-gray-600 py-2 focus:outline-none focus:border-[#018790] transition text-[#005461] dark:text-gray-200 bg-transparent text-sm placeholder-gray-400 cursor-pointer" placeholder="Select Date" required>
                    </div>
                    <div>
                        <label class="block text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">Check-Out <span class="text-red-500">*</span></label>
                        <input type="text" id="checkout" name="checkout" class="w-full border-b-2 border-gray-200 dark:border-gray-600 py-2 focus:outline-none focus:border-[#018790] transition text-[#005461] dark:text-gray-200 bg-transparent text-sm placeholder-gray-400 cursor-pointer" placeholder="Select Date" required>
                    </div>
                </div>

                <div>
                    <label class="block text-xs uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">Select Space <span class="text-red-500">*</span></label>
                    <select name="space" class="w-full border-b-2 border-gray-200 dark:border-gray-600 py-2 focus:outline-none focus:border-[#018790] transition text-[#005461] dark:text-gray-200 bg-transparent text-sm custom-select" required>
                        <option value="" disabled selected>Choose a package...</option>
                        <option value="penthouse">The Executive Penthouse (Max 2 Guests)</option>
                        <option value="residence">The Grand Residence (Max 8 Guests)</option>
                        <option value="estate">The Exclusive Estate (Max 10 Guests)</option>
                    </select>
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full bg-[#005461] dark:bg-[#018790] text-white py-4 font-bold uppercase tracking-widest text-sm hover:bg-[#018790] dark:hover:bg-[#005461] transition shadow-lg">Submit Request</button>
                </div>
            </form>
        </div>

    </div>
</section>

<!-- SCRIPT YA KALENDA (HAIJAGUSWA KABISA) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // Checkout Picker
        const checkoutPicker = flatpickr("#checkout", {
            dateFormat: "Y-m-d",
            minDate: new Date().fp_incr(1),
            disableMobile: "true"
        });

        // Checkin Picker (ina control Checkout)
        flatpickr("#checkin", {
            dateFormat: "Y-m-d",
            minDate: "today",
            disableMobile: "true",
            onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length > 0) {
                    const minCheckoutDate = new Date(selectedDates[0].getTime());
                    minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);
                    
                    checkoutPicker.set("minDate", minCheckoutDate);
                    
                    if(checkoutPicker.selectedDates[0] && checkoutPicker.selectedDates[0] <= selectedDates[0]) {
                        checkoutPicker.clear();
                    }
                    
                    setTimeout(() => checkoutPicker.open(), 100);
                }
            }
        });
    });
</script>

<!-- STYLE ZA KALENDA (HAZIZJAGUSWA KABISA) -->
<style>
    /* Inabana Select Options */
    select.custom-select option {
        background-color: #ffffff;
        color: #005461;
    }
    html.dark select.custom-select option {
        background-color: #002B32;
        color: #ffffff;
    }

    /* THEME YA KISHUA KWA AJILI YA KALENDA (COMPACT) */
    .flatpickr-calendar {
        font-family: inherit !important;
        border-radius: 8px !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08) !important;
        border: none !important;
        width: 270px !important; 
        padding: 5px !important;
        font-size: 13px !important;
    }
    
    .flatpickr-months .flatpickr-month { height: 40px !important; }
    .flatpickr-current-month { font-size: 100% !important; padding-top: 5px !important; }
    .flatpickr-innerContainer, .flatpickr-rContainer, .flatpickr-days, .dayContainer {
        width: 100% !important; min-width: 100% !important; max-width: 100% !important;
    }

    .flatpickr-day {
        max-width: 35px !important;
        height: 35px !important;
        line-height: 35px !important;
        border-radius: 6px !important;
    }

    /* Rangi za Light Mode */
    .flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange {
        background: #018790 !important;
        border-color: #018790 !important;
        color: white !important;
    }
    .flatpickr-day:hover {
        background: #e6f3f4 !important;
        color: #005461 !important;
    }

    /* === DARK MODE KWA KALENDA === */
    html.dark .flatpickr-calendar {
        background: #001D21 !important;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4) !important;
    }
    html.dark .flatpickr-month { color: #ffffff !important; fill: #ffffff !important; }
    html.dark .flatpickr-weekday { color: #00B7B5 !important; font-weight: 600 !important; }
    html.dark .flatpickr-day { color: #e5e7eb !important; }
    html.dark .flatpickr-day.flatpickr-disabled { color: #1a4248 !important; }
    html.dark .flatpickr-day:hover { background: #003B44 !important; color: white !important; }
    html.dark .flatpickr-day.selected {
        background: #00B7B5 !important;
        border-color: #00B7B5 !important;
        color: #001D21 !important;
        font-weight: bold;
    }
    html.dark .flatpickr-current-month .flatpickr-monthDropdown-months {
        background: #001D21 !important;
        color: white !important;
    }
</style>