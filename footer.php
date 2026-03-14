
<footer class="mt-32 pt-10 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm gap-4">
    <p>© 2026 Sachin Sagar. All rights reserved.</p>
    <div class="flex gap-8">
        <a href="#" class="hover:text-black">Instagram</a>
        <a href="#" class="hover:text-black">LinkedIn</a>
        <a href="#" class="hover:text-black">Dribbble</a>
    </div>
</footer>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/lenis@1.0.45/dist/lenis.min.js"></script>
    
    
    <script>
        // --- Smooth Scroll (Lenis) ---
        const lenis = new Lenis()
        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }
        requestAnimationFrame(raf)

        // --- Click Sound & Spark Effect ---
        // const clickSound = new Audio('images/Sachin-Product-Designer-best-in-new-delhi-in-dwarka.mp3');
        
        function createSparks(x, y) {
            const sparkCount = 12;
            const container = document.body;
            
            for (let i = 0; i < sparkCount; i++) {
                const spark = document.createElement('div');
                spark.style.position = 'fixed';
                spark.style.left = x + 'px';
                spark.style.top = y + 'px';
                spark.style.width = '4px';
                spark.style.height = '4px';
                spark.style.backgroundColor = '#6639E4';
                spark.style.borderRadius = '50%';
                spark.style.pointerEvents = 'none';
                spark.style.zIndex = '10000';
                container.appendChild(spark);
                
                const angle = (i / sparkCount) * Math.PI * 2;
                const velocity = 50 + Math.random() * 100;
                const destinationX = Math.cos(angle) * velocity;
                const destinationY = Math.sin(angle) * velocity;
                
                gsap.to(spark, {
                    x: destinationX,
                    y: destinationY,
                    opacity: 0,
                    scale: 0.5,
                    duration: 0.8,
                    ease: "power2.out",
                    onComplete: () => spark.remove()
                });
            }
        }

        window.addEventListener('click', (e) => {
            // clickSound.currentTime = 0;
            // clickSound.play().catch(e => console.log("Audio playback waiting for user interaction."));
            createSparks(e.clientX, e.clientY);
        });

        // --- Custom Cursor (GSAP) ---
        const dot = document.querySelector('.cursor-dot');
        const outline = document.querySelector('.cursor-outline');

        window.addEventListener('mousemove', (e) => {
            gsap.to(dot, {
                x: e.clientX,
                y: e.clientY,
                duration: 0
            });
            gsap.to(outline, {
                x: e.clientX,
                y: e.clientY,
                duration: 0.15
            });
        });

        // Hover effect for links and buttons
        const interactiveElements = document.querySelectorAll('a, button, .logo-grid div');
        interactiveElements.forEach((el) => {
            el.addEventListener('mouseenter', () => {
                outline.classList.add('cursor-hover');
            });
            el.addEventListener('mouseleave', () => {
                outline.classList.remove('cursor-hover');
            });
        });
    </script>
</body>

</html>