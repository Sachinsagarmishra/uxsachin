<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sachin Sagar — Product Designer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;1,500&display=swap"
        rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Smooth Scroll & Cursor CSS -->
    <style>
        html.lenis, html.lenis body {
            height: auto;
        }
        .lenis-smooth {
            scroll-behavior: auto !important;
        }
        .lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        /* Custom Cursor CSS */
        .cursor-dot {
            width: 8px;
            height: 8px;
            background-color: #6639E4;
            position: fixed;
            top: 0;
            left: 0;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
        }
        .cursor-outline {
            width: 40px;
            height: 40px;
            border: 1px solid rgba(102, 57, 228, 0.5);
            position: fixed;
            top: 0;
            left: 0;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s, background-color 0.3s;
        }
        
        /* Hide default cursor on desktop */
        @media (min-width: 768px) {
            body { cursor: none; }
            a, button, [role="button"] { cursor: none; }
        }
        
        /* Cursor hover state */
        .cursor-hover {
            width: 60px;
            height: 60px;
            background-color: rgba(102, 57, 228, 0.1);
            border-color: #6639E4;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #fcfcfc;
            overflow-x: hidden;
        }

        .serif-font {
            font-family: 'Playfair Display', serif;
            font-weight: 500;
        }

        .hero-title {
            font-size: 3.5rem;
            /* Default for mobile */
            line-height: 1.1;
        }

        @media (min-width: 768px) {
            .hero-title {
                font-size: 74.76px;
            }
        }
        .section-title {
            font-family: 'DM Sans', sans-serif;
            letter-spacing: -1px;
            font-style: normal !important;
        }

        /* Wavy Text Effect */
        .wavy-hover {
            display: inline-flex;
            flex-wrap: wrap; /* For mobile responsiveness */
            padding-bottom: 0.2em; /* Prevents descenders like 'g' from cutting */
        }
        .wavy-hover span {
            display: inline-block;
            transition: transform 0.3s cubic-bezier(0.33, 1, 0.68, 1);
            pointer-events: none;
        }
        .wavy-hover:hover span {
            animation: wavy-text 0.5s ease-in-out forwards;
            animation-delay: calc(0.03s * var(--i));
        }
        @keyframes wavy-text {
            0% { transform: translateY(0); }
            30% { transform: translateY(-20%); }
            100% { transform: translateY(0); }
        }

        .max-w-custom {
            max-width: 85rem;
        }
        .hero-bg {
            background-image: url('images/Bg2.png');
            background-size: cover;
            background-position: center;
        }

        .blue-glow {
            background-image: url('images/bluebg.png');
            background-size: cover;
            background-position: center;
        }

        .nav-pill {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        }

        .white-section {
            border-top-left-radius: 100px;
            border-top-right-radius: 100px;
            background: #ffffff;
            position: relative;
            z-index: 10;
        }

        /* Consistency in radius for mobile as well */
        @media (max-width: 768px) {
            .white-section {
                border-top-left-radius: 60px;
                border-top-right-radius: 60px;
                padding-top: 40px !important;
                padding-bottom: 40px !important;
            }
        }

        .btn-purple {
            background: #6639E4;
            box-shadow: 0 10px 20px rgba(102, 57, 228, 0.3);
        }

        .btn-purple:hover {
            background: #5628D3;
            transform: translateY(-2px);
        }

        /* Slider Styles for Mobile */
        .slider-container {
            overflow: hidden;
            width: 100%;
            position: relative;
            padding: 10px 0;
            /* Reduced padding */
        }

        .slider-track {
            display: flex;
            gap: 20px;
            /* Reduced gap between logos */
            width: calc(250px * 20);
            animation: scroll 25s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-250px * 10));
            }
        }

        .slider-track div {
            flex-shrink: 0;
            width: 180px;
            /* Increased container width for bigger logos */
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="selection:bg-indigo-100">

    <!-- Custom Cursor Elements -->
    <div class="cursor-dot hidden md:block"></div>
    <div class="cursor-outline hidden md:block"></div>

    
<nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
    <!-- Desktop & Mobile Nav -->
    <div class="nav-pill flex items-center gap-2 md:gap-4 px-4 md:px-8 py-3 rounded-full text-[10px] md:text-sm font-medium text-gray-600">
        <a href="index.php" class="nav-link-anime hover:text-black transition-colors wavy-hover">
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
            <span style="--i:1">P</span><span style="--i:2">r</span><span style="--i:3">o</span><span style="--i:4">d</span><span style="--i:5">u</span><span style="--i:6">c</span><span style="--i:7">t</span><span style="--i:8">s</span>
        </a>
    </div>
</nav>
