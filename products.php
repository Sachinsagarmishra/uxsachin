<?php include 'header.php'; ?>

<!-- Content Section -->
<section class="min-h-screen pt-32 pb-24 px-6 md:px-12 bg-white relative z-30">
    <div class="max-w-custom mx-auto mb-4 md:mb-32">
        <div class="text-center mb-16 md:mb-24">
            <h1 class="section-title text-[38px] md:text-[50px] tracking-[-2px] text-gray-900 pt-8 mb-4 px-4 wavy-hover justify-center" id="products-wavy"></h1>
            <script>
                const pTitle = "Digital Products";
                const pEl = document.getElementById('products-wavy');
                pEl.innerHTML = pTitle.split('').map((char, i) => 
                    `<span style="--i:${i}">${char === ' ' ? '&nbsp;' : char}</span>`
                ).join('');
            </script>
            <p class="text-gray-500 text-base md:text-lg max-w-2xl mx-auto px-4">Explore some of our impactful digital products and platforms, showcasing key features and business value.</p>
        </div>

        <?php
        $projects = [
            [
                'image' => 'images/projects/himalayarudrakshshop.webp',
                'category' => 'ECOM | UI/UX DESIGN',
                'title' => 'Transforming the Rudraksha Shopping Experience',
                'features' => [
                    'End-to-end UX overhaul for a spiritual e-commerce platform.',
                    'Custom product recommendations based on birth details.',
                    'Integrated secure international payment gateways.'
                ]
            ],
            [
                'image' => 'images/projects/Organity.webp',
                'category' => 'ECOM | DIGITAL BRANDING',
                'title' => 'Redesigning the Luxury Beauty Experience',
                'features' => [
                    'Trendy skincare interface focusing on natural ingredients.',
                    'Intelligent skin quiz matching users with the right products.',
                    'Elegant brand identity and seamless checkout flow.'
                ]
            ],
            [
                'image' => 'images/projects/Bytbots.webp',
                'category' => 'SAAS | WEB DESIGN',
                'title' => 'Innovative Web Platform for AI Automation',
                'features' => [
                    'Enterprise dashboard simplifying complex AI workflows.',
                    'Real-time data synchronization with sub-second latency.',
                    'Intuitive drag-and-drop interface for bot creation.'
                ]
            ],
            [
                'image' => 'images/projects/Sorbet & co.webp',
                'category' => 'ECOM | BRAND IDENTITY',
                'title' => 'Elevating the E-commerce Dessert Experience',
                'features' => [
                    'Aesthetically pleasing visual identity representing premium desserts.',
                    'Integrated loyalty and customer reward program.',
                    'Optimized local delivery routing system within checkout.'
                ]
            ],
            [
                'image' => 'images/projects/Wanderoo.webp',
                'category' => 'TRAVEL | APP DESIGN',
                'title' => 'Intuitive App Design for Travel Experiences',
                'features' => [
                    'Seamless booking interface for personalized travel itineraries.',
                    'Interactive maps and location-based discovery features.',
                    'Real-time booking and availability synchronization.'
                ]
            ],
            [
                'image' => 'images/projects/Auslese Automation.webp',
                'category' => 'TECH | UI/UX DESIGN',
                'title' => 'Streamlining Industrial Tech Interfaces',
                'features' => [
                    'B2B platform design tailored for industrial automation clients.',
                    'Complex specification filters for heavy machinery and parts.',
                    'Data-heavy dashboard simplified for operational efficiency.'
                ]
            ],
            [
                'image' => 'images/projects/funding4u.webp',
                'category' => 'FINTECH | PLATFORM DESIGN',
                'title' => 'Building a Trustworthy Financial Platform',
                'features' => [
                    'Secure and transparent interface for financial transactions.',
                    'User-friendly dashboard for tracking funding and investments.',
                    'Automated compliance and KYC verification flows.'
                ]
            ],
            [
                'image' => 'images/projects/frenchfactor.webp',
                'category' => 'ECOM | STORE REDESIGN',
                'title' => 'Revamping the Digital Perfume Storefront',
                'features' => [
                    'Immersive product pages highlighting fragrance notes.',
                    'Optimized mobile conversion funnel reducing cart abandonment.',
                    'Integrated subscription model for recurring purchases.'
                ]
            ],
            [
                'image' => 'images/projects/youshare.webp',
                'category' => 'SOCIAL | APP DESIGN',
                'title' => 'Engaging Social Connectivity Platform',
                'features' => [
                    'Modern feed design focusing on multimedia content sharing.',
                    'Real-time messaging and community engagement tools.',
                    'Customizable user profiles and interaction tracking.'
                ]
            ],
            [
                'image' => 'images/projects/Readwise.webp',
                'category' => 'SAAS | UI DESIGN',
                'title' => 'Optimizing the Reading Architecture',
                'features' => [
                    'Clean, distraction-free typography and reading environment.',
                    'Efficient highlight organization and tagging system.',
                    'Cross-device sync UI tailored for heavy readers.'
                ]
            ]
        ];
        ?>

        <div class="flex flex-col gap-20 md:gap-32 w-full max-w-6xl mx-auto">
            <?php foreach ($projects as $index => $project): ?>
            <?php 
                // Determine if this row should be reversed based on the index (even/odd)
                $isReversed = ($index % 2 !== 0);
                $flexDirectionClass = $isReversed ? 'md:flex-row-reverse' : 'md:flex-row';
            ?>
            <div class="flex flex-col <?php echo $flexDirectionClass; ?> items-center gap-10 md:gap-16 w-full">
                
                <!-- Image Side -->
                <div class="w-full md:w-1/2 group hover-trigger cursor-pointer">
                    <div class="overflow-hidden rounded-2xl aspect-[16/10] bg-gray-50 border border-gray-100 flex items-center justify-center p-2">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-full object-cover rounded-xl transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>
                
                <!-- Content Side -->
                <div class="w-full md:w-1/2 flex flex-col justify-center px-2 text-left">
                    <span class="inline-block bg-gray-100 text-gray-500 text-[10px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest w-fit mb-5">
                        <?php echo htmlspecialchars($project['category']); ?>
                    </span>
                    <h3 class="text-2xl md:text-3xl lg:text-[2rem] font-medium text-gray-900 leading-tight mb-8">
                        <?php echo htmlspecialchars($project['title']); ?>
                    </h3>
                    
                    <ul class="flex flex-col gap-5 mb-10 w-full">
                        <?php foreach($project['features'] as $fIndex => $feature): ?>
                        <li class="flex items-start gap-4">
                            <span class="bg-gray-100 text-[#0f172a] font-bold text-xs h-8 w-8 min-w-[32px] rounded-full flex items-center justify-center mt-0.5">
                                <?php echo sprintf('%02d', $fIndex + 1); ?>
                            </span>
                            <p class="text-gray-600 text-sm md:text-base leading-relaxed"><?php echo htmlspecialchars($feature); ?></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <button class="group bg-[#0f172a] text-white px-6 py-3 md:px-8 md:py-4 rounded-full font-bold text-xs md:text-sm w-fit transition-all hover:bg-black overflow-hidden uppercase">
                        <div class="relative overflow-hidden h-4 md:h-5">
                            <span class="block transition-transform duration-500 group-hover:-translate-y-full">View Case Study</span>
                            <span class="block absolute top-0 left-0 w-full translate-y-full transition-transform duration-500 group-hover:translate-y-0">View Case Study</span>
                        </div>
                    </button>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
