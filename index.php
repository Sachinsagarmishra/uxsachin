<?php include 'header.php'; ?>


    <!-- Hero Section -->
    <header class="hero-bg min-h-screen pt-24 md:pt-0 flex flex-col items-center relative overflow-hidden">
        <!-- Content shifted up with negative top margin on desktop -->
        <div
            class="max-w-7xl w-full mx-auto px-6 flex flex-col md:flex-row items-center justify-between flex-grow md:-mt-32 relative z-20">

            <!-- Hero Text -->
            <div class="w-full md:w-1/2 flex flex-col items-start gap-4 mb-12 md:mb-0 relative z-20">
                <span class="text-xl md:text-2xl font-medium text-gray-800">I'm Sachin Sagar</span>
                <h1 class="serif-font hero-title italic text-gray-900 wavy-hover" id="hero-wavy">
                    <!-- Split by JS -->
                </h1>
                <script>
                    const title = "Product Designer";
                    const el = document.getElementById('hero-wavy');
                    const words = title.split(' ');
                    let charIndex = 0;
                    el.innerHTML = words.map((word, wIdx) => {
                        const spans = word.split('').map((char, i) => {
                            charIndex++;
                            return `<span style="--i:${charIndex}">${char}</span>`;
                        }).join('');
                        // Add a real space between words using a word-wrapper
                        return `<span class="inline-flex">${spans}</span>` + (wIdx < words.length - 1 ? '<span style="--i:0">&nbsp;</span>' : '');
                    }).join('');
                </script>
                <p class="text-lg md:text-xl text-gray-600 max-w-lg leading-relaxed font-light">
                    Engineer-turned-designer with 4+ years of experience designing scalable digital Brands. I
                    collaborate with teams across industries, using AI and code to bring ideas to life.
                </p>
                <div class="flex flex-row items-center gap-4 md:gap-8 mt-8 w-full md:w-auto">
                    <a href="https://wa.me/918800341992" target="_blank" class="group btn-purple text-white px-6 md:px-10 py-4 md:py-5 rounded-full font-bold transition-all whitespace-nowrap text-sm md:text-base flex-1 md:flex-none overflow-hidden h-fit flex items-center justify-center gap-2">
                        <i class="fa-brands fa-whatsapp text-lg transition-transform duration-500 group-hover:scale-110"></i>
                        <div class="relative overflow-hidden h-5 md:h-6 uppercase">
                            <span class="block transition-transform duration-500 group-hover:-translate-y-full">Contact Me</span>
                            <span class="block absolute top-0 left-0 w-full translate-y-full transition-transform duration-500 group-hover:translate-y-0">Contact Me</span>
                        </div>
                    </a>
                    <a href="#"
                        class="text-black font-bold border-b-2 border-black pb-1 uppercase tracking-wider text-[10px] md:text-sm whitespace-nowrap flex-1 md:flex-none text-center md:text-left">
                        Download Resume
                    </a>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="w-full md:w-1/2 relative flex justify-center md:justify-end h-[500px] md:h-screen">
                <img src="images/sachin.png" alt="Sachin Sagar" class="h-full object-contain z-10 -mt-[50px] md:mt-0">
                <!-- Bottom Soft Shadow for Image -->
                <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-white/30 to-transparent z-15">
                </div>
            </div>

        </div>

        <!-- Decorative Blue Glow reaching behind Clientele -->
        <div
            class="blue-glow absolute -bottom-10 left-1/2 -translate-x-1/2 w-[110%] h-[1000px] z-10 pointer-events-none">
        </div>
    </header>

    <!-- Main Content Section -->
    <section class="white-section -mt-32 relative z-30 py-24 px-6 md:px-12">
        
        <!-- Clientele Section -->
        <div class="max-w-custom mx-auto text-center">
            <h2 class="section-title text-[38px] md:text-[40px] text-gray-900 mb-1 wavy-hover" id="clientele-wavy"></h2>
            <script>
                const cTitle = "Clientele";
                const cEl = document.getElementById('clientele-wavy');
                cEl.innerHTML = cTitle.split('').map((char, i) => 
                    `<span style="--i:${i}">${char}</span>`
                ).join('');
            </script>
            <p class="text-gray-500 font-medium mb-6 md:mb-16 italic text-sm md:text-base">Worked With Over 120+ Brands
                Globally</p>

            <!-- Desktop View: Centered and responsive -->
            <div class="hidden md:block w-full">
                <img src="images/clients/desktop.svg" alt="Our Clientele" class="w-full h-auto mx-auto">
            </div>

            <!-- Mobile View: Bigger Logos & Auto-sliding -->
            <div class="md:hidden slider-container">
                <div class="slider-track">
                    <!-- Set 1 -->
                    <div><img src="images/clients/anikmart.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/fleurons.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/one8_commune.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/french_fector.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/pincode.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/farmerr.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/ozar_luxury.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/startup_movers.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/greenlead.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/sorbet_and_co.svg" class="h-16 w-auto object-contain"></div>
                    <!-- Duplicate -->
                    <div><img src="images/clients/anikmart.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/fleurons.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/one8_commune.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/french_fector.svg" class="h-14 w-auto object-contain"></div>
                    <div><img src="images/clients/pincode.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/farmerr.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/ozar_luxury.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/startup_movers.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/greenlead.svg" class="h-16 w-auto object-contain"></div>
                    <div><img src="images/clients/sorbet_and_co.svg" class="h-16 w-auto object-contain"></div>
                </div>
            </div>
        </div>

        <hr class="hidden md:block border-gray-100 mb-8 md:mb-12 max-w-custom mx-auto">

        <!-- Selected Work -->
        <div class="max-w-custom mx-auto mb-4 md:mb-32 text-center">
            <h2 class="section-title text-[38px] md:text-[40px] tracking-[-2px] text-gray-900 pt-8 mb-4 md:mb-16 px-4 wavy-hover justify-center" id="selected-wavy"></h2>
            <script>
                const sTitle = "Selected Work";
                const sEl = document.getElementById('selected-wavy');
                sEl.innerHTML = sTitle.split('').map((char, i) => 
                    `<span style="--i:${i}">${char === ' ' ? '&nbsp;' : char}</span>`
                ).join('');
            </script>
            
            <?php
            $projects = [
                [
                    'image' => 'images/projects/himalayarudrakshshop.webp',
                    'category' => 'ECOM | UI/UX DESIGN',
                    'title' => 'Transforming the Rudraksha & Gemstone Ordering Journey with a Seamless UX Overhaul'
                ],
                [
                    'image' => 'images/projects/Organity.webp',
                    'category' => 'ECOM | DIGITAL BRANDING',
                    'title' => 'Redesigning the Luxury Beauty Experience for Organity Skin Care'
                ],
                [
                    'image' => 'images/projects/Bytbots.webp',
                    'category' => 'SAAS | WEB DESIGN',
                    'title' => 'Crafting an Innovative Web Platform for Bytbots Automation'
                ],
                [
                    'image' => 'images/projects/Sorbet & co.webp',
                    'category' => 'ECOM | BRAND IDENTITY',
                    'title' => 'Elevating the E-commerce Experience for Sorbet & Co.'
                ],
                [
                    'image' => 'images/projects/Wanderoo.webp',
                    'category' => 'TRAVEL | APP DESIGN',
                    'title' => 'Designing Intuitive Travel Experiences for Wanderoo'
                ],
                [
                    'image' => 'images/projects/Auslese Automation.webp',
                    'category' => 'TECH | UI/UX DESIGN',
                    'title' => 'Streamlining Industrial Tech Interfaces for Auslese Automation'
                ],
                [
                    'image' => 'images/projects/funding4u.webp',
                    'category' => 'FINTECH | PLATFORM DESIGN',
                    'title' => 'Building a Trustworthy Financial Platform for Funding4u'
                ],
                [
                    'image' => 'images/projects/frenchfactor.webp',
                    'category' => 'ECOM | STORE REDESIGN',
                    'title' => 'Revamping the Digital Storefront for French Factor Perfumes'
                ],
                [
                    'image' => 'images/projects/youshare.webp',
                    'category' => 'SOCIAL | APP DESIGN',
                    'title' => 'Creating Engaging Social Connectivity for YouShare'
                ],
                [
                    'image' => 'images/projects/Readwise.webp',
                    'category' => 'SAAS | UI DESIGN',
                    'title' => 'Optimizing the Reading Architecture for Readwise'
                ]
            ];
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-12 md:gap-y-20">
                <?php foreach ($projects as $project): ?>
                <div class="flex flex-col gap-6 group hover-trigger cursor-pointer">
                    <div class="overflow-hidden rounded-2xl aspect-[16/10] bg-gray-50 border border-gray-100">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="flex flex-col gap-4 px-2 text-left">
                        <span class="inline-block bg-gray-100 text-gray-500 text-[10px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest w-fit">
                            <?php echo htmlspecialchars($project['category']); ?>
                        </span>
                        <h3 class="text-[1.25rem] md:text-3xl font-medium text-gray-900 leading-tight">
                            <?php echo htmlspecialchars($project['title']); ?>
                        </h3>
                        <button class="group bg-[#0f172a] text-white px-6 py-3 md:px-8 md:py-4 rounded-full font-bold text-xs md:text-sm w-fit transition-all hover:bg-black overflow-hidden uppercase">
                            <div class="relative overflow-hidden h-4 md:h-5">
                                <span class="block transition-transform duration-500 group-hover:-translate-y-full">Read Case Study</span>
                                <span class="block absolute top-0 left-0 w-full translate-y-full transition-transform duration-500 group-hover:translate-y-0">Read Case Study</span>
                            </div>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        
<?php include 'footer.php'; ?>
