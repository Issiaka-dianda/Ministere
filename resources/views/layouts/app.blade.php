<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENA - Ministère de l'Éducation Nationale</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <script>
          tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'burkina-red': '#DC2626',
                        'burkina-yellow': '#EAB308',
                        'burkina-green': '#16A34A'
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-white">

   @include('layouts.navigation')
    <!-- Hero Section with Carousel -->

    

    @yield('content')
    
    @include('layouts.footer')
  



    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = mobileMenuButton.querySelector('i');
        
        mobileMenuButton.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('hidden');
            menuIcon.setAttribute('data-lucide', isOpen ? 'menu' : 'x');
            lucide.createIcons();
        });
        
        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 20) {
                header.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-gray-200');
                header.classList.remove('bg-white', 'shadow-sm', 'border-b-2', 'border-yellow-400');
            } else {
                header.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-gray-200');
                header.classList.add('bg-white', 'shadow-sm', 'border-b-2', 'border-yellow-400');
            }
        });
        
        // Hero carousel
        let currentSlide = 0;
        const slides = document.querySelectorAll('#hero-slides > div');
        const indicators = document.querySelectorAll('#hero-slides + div button');
        
        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => {
                slide.classList.add('opacity-0', 'absolute', 'inset-0');
                slide.classList.remove('opacity-100');
            });
            
            // Show selected slide
            slides[index].classList.remove('opacity-0', 'absolute', 'inset-0');
            slides[index].classList.add('opacity-100');
            
            // Update indicators
            indicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.classList.add('bg-red-500', 'w-8');
                    indicator.classList.remove('bg-white/50', 'w-3');
                } else {
                    indicator.classList.remove('bg-red-500', 'w-8');
                    indicator.classList.add('bg-white/50', 'w-3');
                }
            });
            
            currentSlide = index;
        }
        
        // Auto-rotate slides
        function nextSlide() {
            const nextIndex = (currentSlide + 1) % slides.length;
            showSlide(nextIndex);
        }
        
        // Set up auto-rotation
        let slideInterval = setInterval(nextSlide, 5000);
        
        // Pause on hover
        const heroSection = document.querySelector('#accueil');
        heroSection.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });
        
        heroSection.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 5000);
        });
    </script>
</body>
</html>