<?php include 'header.php'; ?>

<!-- Content Section -->
<section class="min-h-screen pt-32 pb-24 px-6 md:px-12 bg-white relative z-30">
    <div class="max-w-7xl mx-auto mb-16">
        <div class="text-center mb-12">
            <h1 class="serif-font text-[40px] md:text-6xl text-gray-900 mb-4 font-bold tracking-tight">Our Clients</h1>
            <p class="text-gray-500 text-base md:text-lg max-w-2xl mx-auto">We've had the pleasure of working with these amazing brands and organizations across various industries.</p>
        </div>

        <!-- Filter Tabs -->
        <style>
            .hide-scrollbar::-webkit-scrollbar { display: none; }
        </style>
        <div class="flex overflow-x-auto md:flex-wrap md:justify-center gap-3 mb-16 pb-2 hide-scrollbar" style="scrollbar-width: none; -ms-overflow-style: none;">
            <button class="filter-btn active bg-[rgb(73,20,206)] text-white px-6 py-2 rounded-full text-sm font-medium transition-colors whitespace-nowrap hover:bg-[rgb(73,20,206)] hover:text-white" data-filter="all">Show All</button>
            <button class="filter-btn bg-gray-200 hover:bg-[rgb(73,20,206)] hover:text-white text-gray-800 px-6 py-2 rounded-full text-sm font-medium transition-colors whitespace-nowrap" data-filter="fmcg">FMCG</button>
            <button class="filter-btn bg-gray-200 hover:bg-[rgb(73,20,206)] hover:text-white text-gray-800 px-6 py-2 rounded-full text-sm font-medium transition-colors whitespace-nowrap" data-filter="tech">Tech & Education</button>
            <button class="filter-btn bg-gray-200 hover:bg-[rgb(73,20,206)] hover:text-white text-gray-800 px-6 py-2 rounded-full text-sm font-medium transition-colors whitespace-nowrap" data-filter="fashion">Fashion & Decor & Skincare</button>
            <button class="filter-btn bg-gray-200 hover:bg-[rgb(73,20,206)] hover:text-white text-gray-800 px-6 py-2 rounded-full text-sm font-medium transition-colors whitespace-nowrap" data-filter="travel">Travel</button>
            <button class="filter-btn bg-gray-200 hover:bg-[rgb(73,20,206)] hover:text-white text-gray-800 px-6 py-2 rounded-full text-sm font-medium transition-colors whitespace-nowrap" data-filter="crm">CRMs & ERPs</button>
        </div>

        <?php
        $clients = [
            ['image' => 'images/clients/farmerr.svg', 'name' => 'Farmerr', 'category' => 'fmcg'],
            ['image' => 'images/clients/ruchoks.svg', 'name' => 'Ruchoks', 'category' => 'fmcg'],
            ['image' => 'images/clients/secondaid.svg', 'name' => 'Second Aid', 'category' => 'fmcg'],
            ['image' => 'images/clients/greenlead.svg', 'name' => 'Greenlead', 'category' => 'fmcg'],
            ['image' => 'images/clients/anikmart.svg', 'name' => 'Anikmart', 'category' => 'fmcg'],
            ['image' => 'images/clients/bindwel.svg', 'name' => 'Bindwel', 'category' => 'fmcg'],
            ['image' => 'images/clients/one8_commune.svg', 'name' => 'One8 Commune', 'category' => 'fmcg'],

            ['image' => 'images/clients/Thinkedufy.svg', 'name' => 'Thinkedufy', 'category' => 'tech'],
            ['image' => 'images/clients/auslese_automation.svg', 'name' => 'Auslese Automation', 'category' => 'tech'],
            ['image' => 'images/clients/bytbots.svg', 'name' => 'Bytbots', 'category' => 'tech'],
            ['image' => 'images/clients/catoppersexamination.svg', 'name' => 'CA Toppers Examination', 'category' => 'tech'],
            ['image' => 'images/clients/presidency_university.svg', 'name' => 'Presidency University', 'category' => 'tech'],
            ['image' => 'images/clients/cnn-robotics.svg', 'name' => 'CNN Robotics', 'category' => 'tech'],
            ['image' => 'images/clients/funding4u.svg', 'name' => 'Funding4u', 'category' => 'tech'],
            ['image' => 'images/clients/ns_financial_services.svg', 'name' => 'NS Financial Services', 'category' => 'tech'],
            ['image' => 'images/clients/pincode.svg', 'name' => 'Pincode', 'category' => 'tech'],

            ['image' => 'images/clients/Silversaaj.svg', 'name' => 'Silversaaj', 'category' => 'fashion'],
            ['image' => 'images/clients/fleurons.svg', 'name' => 'Fleurons', 'category' => 'fashion'],
            ['image' => 'images/clients/french_fector.svg', 'name' => 'French Factor', 'category' => 'fashion'],
            ['image' => 'images/clients/ozar_luxury.svg', 'name' => 'Ozar Luxury', 'category' => 'fashion'],
            ['image' => 'images/clients/samay_watches.svg', 'name' => 'Samay Watches', 'category' => 'fashion'],
            ['image' => 'images/clients/sorbet_and_co.svg', 'name' => 'Sorbet & Co', 'category' => 'fashion'],
            ['image' => 'images/clients/himalaya_rudraksha_kendra.svg', 'name' => 'Himalaya Rudraksha', 'category' => 'fashion'],
            ['image' => 'images/clients/maviyom.svg', 'name' => 'Maviyom', 'category' => 'fashion'],

            ['image' => 'images/clients/lekobe_adventures_and_safari.svg', 'name' => 'Lekobe Adventures', 'category' => 'travel'],
            ['image' => 'images/clients/wanderoo.svg', 'name' => 'Wanderoo', 'category' => 'travel'],

            ['image' => 'images/clients/adtech_plus.svg', 'name' => 'Adtech Plus', 'category' => 'crm'],
            ['image' => 'images/clients/hyrefast.svg', 'name' => 'Hyrefast', 'category' => 'crm'],
            ['image' => 'images/clients/startup_movers.svg', 'name' => 'Startup Movers', 'category' => 'crm'],
            ['image' => 'images/clients/familtree.svg', 'name' => 'Familtree', 'category' => 'crm'],
            ['image' => 'images/clients/Boonit.co.uk.svg', 'name' => 'Boonit', 'category' => 'crm'],
        ];
        ?>

        <!-- Client Grid with Border Lines -->
        <div class="border-t border-l border-gray-200 flex flex-wrap" id="client-grid">
            <?php foreach ($clients as $client): ?>
            <div class="client-card w-1/2 md:w-1/3 lg:w-1/5 aspect-[4/3] flex items-center justify-center p-8 border-r border-b border-gray-200 transition-all duration-300" data-category="<?php echo $client['category']; ?>">
                <img src="<?php echo htmlspecialchars($client['image']); ?>" alt="<?php echo htmlspecialchars($client['name']); ?>" class="max-h-20 max-w-full object-contain filter w-auto">
            </div>
            <?php endforeach; ?>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterBtns = document.querySelectorAll('.filter-btn');
                const clientCards = document.querySelectorAll('.client-card');

                filterBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        // Remove active styling from all
                        filterBtns.forEach(b => {
                            b.classList.remove('bg-[rgb(73,20,206)]', 'text-white');
                            b.classList.add('bg-gray-200', 'text-gray-800');
                        });
                        
                        // Add active styling to clicked
                        this.classList.remove('bg-gray-200', 'text-gray-800');
                        this.classList.add('bg-[rgb(73,20,206)]', 'text-white');

                        const filterValue = this.getAttribute('data-filter');

                        clientCards.forEach(card => {
                            if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                                card.style.display = 'flex';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });
                });
            });
        </script>
    </div>
</section>

<?php include 'footer.php'; ?>
