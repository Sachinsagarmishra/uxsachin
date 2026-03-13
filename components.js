const headerContent = `
<nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
    <!-- Desktop & Mobile Nav -->
    <div class="nav-pill flex items-center gap-2 md:gap-4 px-4 md:px-8 py-3 rounded-full text-[10px] md:text-sm font-medium text-gray-600">
        <a href="index.html" class="nav-link-anime hover:text-black transition-colors wavy-hover">
            <span style="--i:1">H</span><span style="--i:2">o</span><span style="--i:3">m</span><span style="--i:4">e</span>
        </a>
        <span class="text-gray-300">|</span>
        <a href="#" class="nav-link-anime hover:text-black transition-colors wavy-hover">
            <span style="--i:1">P</span><span style="--i:2">o</span><span style="--i:3">r</span><span style="--i:4">t</span><span style="--i:5">f</span><span style="--i:6">o</span><span style="--i:7">l</span><span style="--i:8">i</span><span style="--i:9">o</span>
        </a>
        <span class="text-gray-300">|</span>
        <a href="#" class="nav-link-anime hover:text-black transition-colors wavy-hover">
            <span style="--i:1">A</span><span style="--i:2">b</span><span style="--i:3">o</span><span style="--i:4">u</span><span style="--i:5">t</span>
        </a>
        <span class="text-gray-300">|</span>
        <a href="#" class="nav-link-anime hover:text-black transition-colors wavy-hover">
            <span style="--i:1">C</span><span style="--i:2">l</span><span style="--i:3">i</span><span style="--i:4">e</span><span style="--i:5">n</span><span style="--i:6">t</span><span style="--i:7">s</span>
        </a>
        <span class="text-gray-300">|</span>
        <a href="#" class="nav-link-anime hover:text-black transition-colors wavy-hover">
            <span style="--i:1">C</span><span style="--i:2">o</span><span style="--i:3">n</span><span style="--i:4">t</span><span style="--i:5">a</span><span style="--i:6">c</span><span style="--i:7">t</span>
        </a>
    </div>
</nav>`;

const footerContent = `
<footer class="mt-32 pt-10 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm gap-4">
    <p>© 2026 Sachin Sagar. All rights reserved.</p>
    <div class="flex gap-8">
        <a href="#" class="hover:text-black">Instagram</a>
        <a href="#" class="hover:text-black">LinkedIn</a>
        <a href="#" class="hover:text-black">Dribbble</a>
    </div>
</footer>`;

document.addEventListener("DOMContentLoaded", () => {
    const headerPlaceholder = document.getElementById('header-placeholder');
    const footerPlaceholder = document.getElementById('footer-placeholder');

    if (headerPlaceholder) headerPlaceholder.innerHTML = headerContent;
    if (footerPlaceholder) footerPlaceholder.innerHTML = footerContent;
});
