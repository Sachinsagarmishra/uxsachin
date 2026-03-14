<?php include 'header.php'; ?>

<!-- Content Section -->
<section class="min-h-screen pt-20 md:pt-32 pb-24 px-6 md:px-12 bg-white relative z-30">
    <div class="max-w-custom mx-auto mb-4 md:mb-32">
        <div class="text-center mb-16 md:mb-24 px-4">
            <h1 class="serif-font text-[40px] md:text-6xl text-gray-900 mb-0 md:mb-4 font-bold tracking-tight pt-8">Digital Products</h1>
            <p class="text-gray-500 text-base md:text-lg max-w-2xl mx-auto mt-4 md:mt-0">Explore some of our impactful digital products and platforms, showcasing key features and business value.</p>
        </div>

        <?php
        $projects = [
            [
                'image' => 'images/projects/Bytbots.webp', // Placeholder image until Figma thumbnails are provided
                'category' => 'FIGMA PLUGIN',
                'title' => 'AI Nano Banana Pro',
                'features' => [
                    'Generate high-quality AI images, ad creatives, and UI/UX mockups directly in Figma.',
                    'Boost your design workflow by removing the need for external AI generation tools.',
                    'Generate consistent style assets across your entire UI canvas.'
                ],
                'link' => 'https://www.figma.com/community/plugin/1607697366009792735/ai-nano-banana-pro-figma-plugin-for-ai-image-generation-ad-creatives-ui-ux-mockups',
                'button_text' => 'View Plugin'
            ],
            [
                'image' => 'images/projects/Auslese Automation.webp', // Placeholder
                'category' => 'FIGMA PLUGIN',
                'title' => 'PDF Pages Importer',
                'features' => [
                    'Import multi-page PDF documents effortlessly straight into your Figma files.',
                    'Auto-convert imported pages into perfectly sized and aligned Figma frames.',
                    'Retain high-resolution vector and image quality during the import process.'
                ],
                'link' => 'https://www.figma.com/community/plugin/1594021113746022956/pdf-pages-importer',
                'button_text' => 'View Plugin'
            ],
            [
                'image' => 'images/projects/Organity.webp', // Placeholder
                'category' => 'FIGMA PLUGIN',
                'title' => 'CSS Exporter - Copy Properties',
                'features' => [
                    'Extract Production-ready CSS styles directly from any Figma node.',
                    'Automatically compile shadows, borders, typography, and flexbox layouts into clean CSS.',
                    'Bridge the gap between design and development by instantly copying styles to your clipboard.'
                ],
                'link' => 'https://www.figma.com/community/plugin/1594096844440707811/css-exporter-copy-properties',
                'button_text' => 'View Plugin'
            ],
            [
                'image' => 'images/projects/Sorbet & co.webp', // Placeholder
                'category' => 'WORDPRESS PLUGIN',
                'title' => 'Brand Support Chatbot',
                'features' => [
                    'Integrate an automated AI-powered support chatbot directly into any WordPress site.',
                    'Provide instant 24/7 customer support and automated lead generation capabilities.',
                    'Easily customize the chatbot appearance to perfectly match your brand aesthetics.'
                ],
                'link' => 'https://wordpress.org/plugins/brand-support-chatbot/',
                'button_text' => 'View Plugin'
            ]
        ];
        ?>

        <div class="flex flex-col gap-12 w-full max-w-6xl mx-auto">
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
                    <h3 class="text-2xl md:text-3xl lg:text-[2rem] font-medium text-gray-900 leading-tight mb-4">
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

                    <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank" rel="noopener noreferrer" class="group bg-[#0f172a] text-white px-6 py-3 md:px-8 md:py-4 rounded-full font-bold text-xs md:text-sm w-fit transition-all hover:bg-black overflow-hidden uppercase inline-block">
                        <div class="relative overflow-hidden h-4 md:h-5">
                            <span class="block transition-transform duration-500 group-hover:-translate-y-full"><?php echo htmlspecialchars($project['button_text']); ?></span>
                            <span class="block absolute top-0 left-0 w-full translate-y-full transition-transform duration-500 group-hover:translate-y-0"><?php echo htmlspecialchars($project['button_text']); ?></span>
                        </div>
                    </a>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
