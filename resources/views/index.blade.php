<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <title>Garage THETE</title>
        <style>
            html {
                scroll-behavior: smooth;
                scroll-padding-top: 80px; /* Compense la navbar fixe */
            }
            
            section {
                scroll-margin-top: 80px; /* Pour les ancres avec navbar fixe */
            }
            
            /* Animation personnalisée pour plus de contrôle */
            .smooth-scroll {
                scroll-behavior: smooth;
                transition: scroll-behavior 0.3s ease-in-out;
            }
            
            /* Pour désactiver le smooth scroll sur certains éléments si nécessaire */
            .no-smooth-scroll {
                scroll-behavior: auto;
            }
        </style>
    </head>
    <body class="bg-white">
        <x-Navbar />

        <!-- Section Accueil -->
        <section
            id="accueil"
            class="relative w-full h-screen min-h-[600px] bg-cover bg-center bg-fixed"
            style="background-image: url('/images/img1.jpg');">

            <!-- Overlay sombre -->
            <div class="absolute inset-0 bg-black/60"></div>

            <!-- Contenu -->
            <div class="relative w-full h-full flex flex-col justify-center items-center gap-y-6 px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-white font-bold leading-tight">
                    Garage THETE
                </h1>
                <p class="text-white text-lg sm:text-xl md:text-2xl lg:text-3xl max-w-2xl mx-auto">
                    Réparateur depuis 2007
                </p>
                <a href="#about"
                   class="text-gray-900 bg-amber-300 hover:bg-amber-400 px-6 sm:px-8 md:px-10 lg:px-12 py-2 sm:py-3 md:py-4
                          font-bold text-sm sm:text-base md:text-lg rounded-lg transition-all duration-300
                          transform hover:scale-105 hover:shadow-lg">
                    Voir plus
                </a>
            </div>
        </section>

        <!-- Section À propos -->
        <section id="about" class="bg-white py-12 md:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12 xl:gap-16">
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[500px] rounded-2xl overflow-hidden shadow-xl">
                            <img src="/images/img1.jpg"
                                 alt="Garage THETE"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    
                    <!-- Texte -->
                    <div class="w-full lg:w-1/2">
                        <x-title title="Réparer, c'est prendre soin" color="black" class="text-center lg:text-left"/>
                        <div class="space-y-4 mt-6">
                            <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                                Le garage THETE appartient en fait à Mr. THETE - un patron joyeux avec une obsession presque folle pour les voitures. Lui et son équipe de spécialistes ont appris à traduire cette nature obsessionnelle en un service impressionnant, réparant avec une beaucoup de finesse.
                            </p>
                            <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                                Mr. THETE et le reste de son garage s'engagent à prendre soin de votre voiture avec un service et des réparations de premier ordre, car plus une voiture dure longtemps, mieux c'est pour vous, pour l'environnement et pour votre automobile.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Services -->
        <section id="services" class="bg-black py-12 md:py-16 lg:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Titre de la section -->
                <div class="text-center mb-8 md:mb-12">
                    <x-title title="Les Services" color="white" class="mb-4"/>
                    <p class="text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
                        Découvrez tous nos services pour entretenir et améliorer votre véhicule
                    </p>
                </div>

                <!-- Carrousel infini - Version mobile et desktop -->
                <div class="relative overflow-hidden">
                    <!-- Premier set -->
                    <div class="flex animate-infinite-scroll gap-2 py-4">
                        <!-- Card 1 -->
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Maintenance"
                                description="Des contrôles réguliers pour maintenir la haute performance de votre voiture"
                                image="/images/img1.jpg"
                            />
                        </div>
                        
                        <!-- Card 2 -->
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Réparations"
                                description="Un service de qualité qui garantit des trajets fluides et sûrs"
                                image="/images/img2.jpg"
                            />
                        </div>
                        
                        <!-- Card 3 -->
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Pièces/accessoires"
                                description="Pièces intérieures et extérieurs haut de gamme pour un style remarquable"
                                image="/images/img3.jpg"
                            />
                        </div>
                        
                        <!-- Card 4 -->
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Diagnostic"
                                description="Analyse complète de votre véhicule avec technologies de pointe"
                                image="/images/img4.jpg"
                            />
                        </div>
                        
                        <!-- Card 5 -->
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Carrosserie"
                                description="Rénovation et peinture pour redonner vie à votre véhicule"
                                image="/images/img5.jpg"
                            />
                        </div>
                        
                        <!-- Duplication pour l'effet infini -->
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Maintenance"
                                description="Des contrôles réguliers pour maintenir la haute performance de votre voiture"
                                image="/images/img1.jpg"
                            />
                        </div>
                        
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Réparations"
                                description="Un service de qualité qui garantit des trajets fluides et sûrs"
                                image="/images/img2.jpg"
                            />
                        </div>
                        
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Pièces/accessoires"
                                description="Pièces intérieures et extérieurs haut de gamme pour un style remarquable"
                                image="/images/img3.jpg"
                            />
                        </div>
                        
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Diagnostic"
                                description="Analyse complète de votre véhicule avec technologies de pointe"
                                image="/images/img4.jpg"
                            />
                        </div>
                        
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Carrosserie"
                                description="Rénovation et peinture pour redonner vie à votre véhicule"
                                image="/images/img5.jpg"
                            />
                        </div>

                        <!-- Duplication supplémentaire pour mobile -->
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Maintenance"
                                description="Des contrôles réguliers pour maintenir la haute performance de votre voiture"
                                image="/images/img1.jpg"
                            />
                        </div>
                        
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Réparations"
                                description="Un service de qualité qui garantit des trajets fluides et sûrs"
                                image="/images/img2.jpg"
                            />
                        </div>
                        
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Pièces/accessoires"
                                description="Pièces intérieures et extérieurs haut de gamme pour un style remarquable"
                                image="/images/img3.jpg"
                            />
                        </div>
                        
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Diagnostic"
                                description="Analyse complète de votre véhicule avec technologies de pointe"
                                image="/images/img4.jpg"
                            />
                        </div>
                        
                        <div class="min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                            <x-services-card
                                titre="Carrosserie"
                                description="Rénovation et peinture pour redonner vie à votre véhicule"
                                image="/images/img5.jpg"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Avis -->
        <section id="avis" class="py-12 md:py-16 lg:py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8 md:mb-12">
                    <x-title title="Ce que disent nos clients" color="black" class="mb-4"/>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Avis 1 -->
                    <x-avis-card
                        name="Vincent et Carole"
                        description="Tip top ! Un passage à l'improviste suite à une ampoule xénon HS, une prise en charge immédiate avec remplacement dans la foulée, affaire réglée en 30 min pour un prix très raisonnable au regard de celui proposé par BMW. Merci à toute l'équipe pour l'accueil et votre sympathie ! A très vite"
                        image="/images/vincent.png"
                    />

                    <!-- Avis 2 -->
                    <x-avis-card
                        name="Julien Lefebvre"
                        description="Super garage super patron, je recommande fortement. Toujours à l'écoute du client et ne change pas des pièces pour rien. Garage très très honnête."
                        image="/images/julien.png"
                    />

                    <!-- Avis 3 -->
                    <x-avis-card
                        name="Marion Cara"
                        description="Un super garage .Très sympathique. Bon conseil. A pu prendre ma voiture à l'improviste. Prix très correct. Je recommande ce garage."
                        image="/images/marion.png"
                    />

                    <!-- Avis 4 -->
                    <x-avis-card
                        name="Sandrine Dumont"
                        description="Très sympathique et compétent. Un pro qui se débrouille pour dépanner le client. Recherche les pièces. Prix justes. À conseiller vivement pour les possesseurs de voitures anciennes, voir de collection."
                        image="/images/sandrine.png"
                    />
                </div>
            </div>
        </section>

        <!-- Section Contact -->
        <section
            id="contact"
            class="relative w-full min-h-[500px] lg:min-h-[600px] bg-cover bg-center bg-fixed"
            style="background-image: url('/images/img1.jpg');"
        >
            <!-- Overlay sombre -->
            <div class="absolute inset-0 bg-black/70"></div>

            <!-- Contenu -->
            <div class="relative z-10 w-full h-full px-4 sm:px-6 lg:px-8 py-12 md:py-16 lg:py-20 flex flex-col justify-center text-white">
                <div class="max-w-7xl mx-auto w-full">
                    <!-- Titre -->
                    <div class="mb-8 md:mb-12 lg:mb-16 text-center">
                        <x-title title="Contact" color="white"/>
                    </div>

                    <!-- Infos -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                        
                        <!-- Horaires -->
                        <div class="bg-black/40 p-6 rounded-xl backdrop-blur-sm">
                            <h3 class="font-bold text-lg md:text-xl uppercase mb-4 pb-2 border-b border-amber-300">
                                Horaires
                            </h3>
                            <ul class="space-y-2 text-gray-200 text-sm md:text-base">
                                <li class="flex justify-between">
                                    <span>Lundi :</span>
                                    <span class="font-medium">07:00–12:00, 14:00–19:00</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Mardi :</span>
                                    <span class="font-medium">07:00–12:00, 14:00–19:00</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Mercredi :</span>
                                    <span class="font-medium">07:00–12:00, 14:00–19:00</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Jeudi :</span>
                                    <span class="font-medium">07:00–12:00, 14:00–19:00</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Vendredi :</span>
                                    <span class="font-medium">07:00–12:00, 14:00–19:00</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Samedi :</span>
                                    <span class="font-medium text-amber-300">Fermé</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Dimanche :</span>
                                    <span class="font-medium text-amber-300">Fermé</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Adresse -->
                        <div class="bg-black/40 p-6 rounded-xl backdrop-blur-sm">
                            <h3 class="font-bold text-lg md:text-xl uppercase mb-4 pb-2 border-b border-amber-300">
                                Adresse
                            </h3>
                            <div class="text-gray-200 text-sm md:text-base">
                                <p class="mb-3">
                                    <a href="https://www.google.com/maps/place/Garage+THETE/@45.9530728,4.7471647,17z/data=!3m1!4b1!4m6!3m5!1s0x47f4900c77064ac1:0x72d39aa7beac9c58!8m2!3d45.9530691!4d4.7497396!16s%2Fg%2F1v830fyw?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="hover:text-amber-300 transition-colors duration-300 underline">
                                        1323 Av. des Helvètes<br>
                                        01600 Saint-Bernard
                                    </a>
                                </p>
                                <div class="mt-4">
                                    <a href="https://www.google.com/maps/place/Garage+THETE/@45.9530728,4.7471647,17z"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="inline-flex items-center bg-amber-300 hover:bg-amber-400 text-white px-4 py-2 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        Voir sur Google Maps
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Téléphone -->
                        <div class="bg-black/40 p-6 rounded-xl backdrop-blur-sm md:col-span-2 lg:col-span-1">
                            <h3 class="font-bold text-lg md:text-xl uppercase mb-4 pb-2 border-b border-amber-300">
                                Téléphone
                            </h3>
                            <div class="text-gray-200">
                                <p class="text-2xl md:text-3xl font-bold mb-4">
                                    <a href="tel:0474000194"
                                        class="hover:text-amber-300 transition-colors duration-300">
                                        04 74 00 01 94
                                    </a>
                                </p>
                                <div class="mt-6">
                                    <a href="tel:0474000194"
                                        class="inline-flex items-center bg-amber-300 hover:bg-amber-400 text-white px-4 py-2 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        Appeler maintenant
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-black py-8 md:py-10 lg:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-white mb-4">
                    <a href="/mentions-legales"
                        class="hover:text-amber-300 transition-colors duration-300 underline text-sm md:text-base">
                        Mentions Légales
                    </a>
                </p>
                <p class="text-gray-400 text-sm md:text-base">
                    © {{ date('Y') }} | Thomas GROSSAT
                </p>
                <div class="mt-4 text-gray-500 text-xs md:text-sm">
                    Garage automobile professionnel - Tous droits réservés
                </div>
            </div>
        </footer>

        <!-- Script pour l'animation Tailwind -->
        <script>
            const style = document.createElement('style');
            style.textContent = `
                
                @keyframes infinite-scroll-mobile {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-33.333%); } /* Plus lent sur mobile */
                }

                @keyframes infinite-scroll-desktop {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-50%); }
                }

                .animate-infinite-scroll {
                    animation: infinite-scroll-mobile 120s linear infinite;
                    width: max-content;
                }

                @media (min-width: 768px) {
                    .animate-infinite-scroll {
                        animation: infinite-scroll-desktop 80s linear infinite;
                    }
                }

                .animate-infinite-scroll:hover {
                    animation-play-state: paused;
                }

                /* Masquer la scrollbar */
                .relative {
                    -ms-overflow-style: none;  /* IE and Edge */
                    scrollbar-width: none;  /* Firefox */
                }

                .relative::-webkit-scrollbar {
                    display: none;  /* Chrome, Safari and Opera */
                }

            `;
            document.head.appendChild(style);
        </script>
    </body>
</html>