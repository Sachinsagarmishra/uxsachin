<?php include 'header.php'; ?>

<!-- Content Section -->
<section class="min-h-screen pt-32 pb-24 px-6 md:px-12 bg-[#fcfcfc] relative z-30">
    <div class="max-w-custom mx-auto mb-4 md:mb-32 text-center">
        <h2 class="section-title text-[38px] md:text-[40px] tracking-[-2px] text-gray-900 pt-8 mb-4 md:mb-16 px-4 wavy-hover justify-center" id="products-wavy"></h2>
        <script>
            const pTitle = "Digital Products";
            const pEl = document.getElementById('products-wavy');
            pEl.innerHTML = pTitle.split('').map((char, i) => 
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
</section>

<?php include 'footer.php'; ?>
