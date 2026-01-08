<header class="bg-black w-full h-auto py-4 flex flex-row justify-between items-center px-4 sm:px-5 fixed top-0 left-0 z-50">
    <!-- Logo -->
    <div class="flex-1">
        <h1 class="text-amber-300 text-2xl sm:text-3xl md:text-4xl font-bold">
            <a href="#accueil" class="hover:text-amber-400 transition duration-300">Garage THETE</a>
        </h1>
    </div>

    <!-- Menu Desktop (caché sur mobile) -->
    <div class="hidden md:flex flex-row gap-6 lg:gap-8">
        <a href="#accueil" 
           class="text-amber-300 font-bold text-lg lg:text-xl hover:text-amber-400 transition duration-300 
                  relative after:content-[''] after:absolute after:left-0 after:-bottom-1 
                  after:w-0 after:h-0.5 after:bg-amber-400 after:transition-all after:duration-300 
                  hover:after:w-full">
            Accueil
        </a>
        <a href="#about" 
           class="text-amber-300 font-bold text-lg lg:text-xl hover:text-amber-400 transition duration-300 
                  relative after:content-[''] after:absolute after:left-0 after:-bottom-1 
                  after:w-0 after:h-0.5 after:bg-amber-400 after:transition-all after:duration-300 
                  hover:after:w-full">
            A propos
        </a>
        <a href="#services" 
           class="text-amber-300 font-bold text-lg lg:text-xl hover:text-amber-400 transition duration-300 
                  relative after:content-[''] after:absolute after:left-0 after:-bottom-1 
                  after:w-0 after:h-0.5 after:bg-amber-400 after:transition-all after:duration-300 
                  hover:after:w-full">
            Services
        </a>
        <a href="#avis" 
           class="text-amber-300 font-bold text-lg lg:text-xl hover:text-amber-400 transition duration-300 
                  relative after:content-[''] after:absolute after:left-0 after:-bottom-1 
                  after:w-0 after:h-0.5 after:bg-amber-400 after:transition-all after:duration-300 
                  hover:after:w-full">
            Avis
        </a>
        <a href="#contact" 
           class="text-amber-300 font-bold text-lg lg:text-xl hover:text-amber-400 transition duration-300 
                  relative after:content-[''] after:absolute after:left-0 after:-bottom-1 
                  after:w-0 after:h-0.5 after:bg-amber-400 after:transition-all after:duration-300 
                  hover:after:w-full">
            Contact
        </a>
    </div>

    <!-- Bouton Hamburger (visible uniquement sur mobile) -->
    <div class="md:hidden">
        <button id="menu-toggle" 
                class="text-amber-300 p-2 rounded-lg hover:bg-gray-800 transition duration-300 focus:outline-none focus:ring-2 focus:ring-amber-400">
            <svg id="menu-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Menu Mobile (caché par défaut) -->
    <div id="mobile-menu" 
         class="md:hidden hidden absolute top-full left-0 w-full bg-black shadow-lg py-4 px-6 space-y-4 transform transition-all duration-300 ease-in-out">
        <a href="#accueil" 
           class="block text-amber-300 font-bold text-xl py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-amber-400 transition duration-300 ">
            Accueil
        </a>
        <a href="#about" 
           class="block text-amber-300 font-bold text-xl py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-amber-400 transition duration-300 ">
            A propos
        </a>
        <a href="#services" 
           class="block text-amber-300 font-bold text-xl py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-amber-400 transition duration-300 ">
            Services
        </a>
        <a href="#avis" 
           class="block text-amber-300 font-bold text-xl py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-amber-400 transition duration-300 ">
            Avis
        </a>
        <a href="#contact" 
           class="block text-amber-300 font-bold text-xl py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-amber-400 transition duration-300 ">
            Contact
        </a>
    </div>
</header>

<!-- CSS pour le smooth scroll -->
<style>
html {
    scroll-behavior: smooth;
    scroll-padding-top: 80px; /* Compense la hauteur de la navbar */
}

/* Pour les sections avec navbar fixe */
section {
    scroll-margin-top: 80px;
}

/* Animation pour le menu mobile */
#mobile-menu {
    max-height: 0;
    overflow: hidden;
}

#mobile-menu.active {
    max-height: 500px;
}
</style>

<!-- Script pour le menu mobile et smooth scroll -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    // Toggle menu mobile
    menuToggle.addEventListener('click', function() {
        const isExpanded = mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('active');
        
        // Changer l'icône
        if (isExpanded) {
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });
    
    // Fermer le menu quand on clique sur un lien
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('active');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });
    
    // Smooth scroll pour tous les liens
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if(targetElement) {
                // Smooth scroll
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Ajuste pour la navbar fixe
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Fermer le menu si on clique en dehors
    document.addEventListener('click', function(event) {
        if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('active');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });
});
</script>