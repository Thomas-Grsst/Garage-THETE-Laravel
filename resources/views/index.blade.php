<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <title>Garage THETE</title>
        
    </head>
    <body>
        <x-Navbar />

        <div
            id="accueil"
            class="relative w-full h-screen bg-cover bg-center"
            style="background-image: url('/images/img1.jpg');">

            <!-- Overlay sombre -->
            <div class="absolute inset-0 bg-black/60"></div>

            <!-- Contenu -->
            <div class="relative w-full h-full flex flex-col justify-center items-center gap-y-6">
                <h1 class="text-8xl text-white font-bold">Garage THETE</h1>
                <p class="text-white text-2xl">Réparateur depuis 2007</p>
                <a href="#about" class="text-white bg-amber-300 px-12 py-2 font-bold">
                    Voir plus
                </a>
            </div>
        </div>

        <div id="about" class="bg-white grid grid-cols-2 m-20 h-100 gap-8">
            <div
                class="relative w-2xl h-2xl bg-cover bg-center"
                style="background-image: url('/images/img1.jpg');">
            </div>
            <div>
                <x-title title="Réparer, c’est prendre soin" color="black" class=""/>
                <p class="mt-6 w-2xl">Le garage de THETE appartient en fait à Mr. THETE - un patron joyeux avec une obsession presque folle pour les voitures. Lui et son équipe de spécialistes ont appris à traduire cette nature obsessionnelle en un service impressionnant, réparant avec une telle finesse.</p>
                <br/>
                <p class="w-2xl">Mr. THETE et le reste de son garage s’engagent à prendre soin des voitures avec un service et des réparations de premier ordre, car plus une voiture dure longtemps, mieux c’est pour vous, pour l’environnement et pour votre automobile.</p>
            </div>
            
        </div>



        <div id="services" class="bg-black py-10">
            <!-- Titre de la section -->
            <div class="text-center mb-8">
                <x-title title="Les Services" color="white"/>
                <p class="text-gray-300 max-w-2xl mx-auto mt-2">
                    Découvrez tous nos services pour entretenir et améliorer votre véhicule
                </p>
            </div>

            <!-- Carrousel infini -->
            <div class="relative overflow-hidden">
                <!-- Premier set -->
                <div class="flex animate-infinite-scroll space-x-6 py-4">
                    <!-- Card 1 -->
                    <x-services-card
                        titre="Maintenance"
                        description="Des contrôles réguliers pour maintenir la haute performance de votre voiture"
                        image="/images/img1.jpg"
                    />
                    
                    <!-- Card 2 -->
                    <x-services-card
                        titre="Réparations"
                        description="Un service de qualité qui garantit des trajets fluides et sûrs"
                        image="/images/img2.jpg"
                    />
                    
                    <!-- Card 3 -->
                    <x-services-card
                        titre="Pièces/accessoires"
                        description="Pièces intérieures et extérieurs haut de gamme pour un style remarquable"
                        image="/images/img3.jpg"
                    />
                    
                    <!-- Card 4 -->
                    <x-services-card
                        titre="Diagnostic"
                        description="Analyse complète de votre véhicule avec technologies de pointe"
                        image="/images/img4.jpg"
                    />
                    
                    <!-- Card 5 -->
                    <x-services-card
                        titre="Carrosserie"
                        description="Rénovation et peinture pour redonner vie à votre véhicule"
                        image="/images/img5.jpg"
                    />
                    
                    <!-- Duplication pour l'effet infini (mêmes cartes) -->
                    <x-services-card
                        titre="Maintenance"
                        description="Des contrôles réguliers pour maintenir la haute performance de votre voiture"
                        image="/images/img1.jpg"
                    />
                    
                    <x-services-card
                        titre="Réparations"
                        description="Un service de qualité qui garantit des trajets fluides et sûrs"
                        image="/images/img2.jpg"
                    />
                    
                    <x-services-card
                        titre="Pièces/accessoires"
                        description="Pièces intérieures et extérieurs haut de gamme pour un style remarquable"
                        image="/images/img3.jpg"
                    />
                    
                    <x-services-card
                        titre="Diagnostic"
                        description="Analyse complète de votre véhicule avec technologies de pointe"
                        image="/images/img4.jpg"
                    />
                    
                    <x-services-card
                        titre="Carrosserie"
                        description="Rénovation et peinture pour redonner vie à votre véhicule"
                        image="/images/img5.jpg"
                    />
                </div>
            </div>
        </div>



        <div id="avis" class="h-100 mb-12">
            <div class="mt-8 mb-8">
                <x-title color="black" title="Ce que disent nos client"/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 m-20">
                <x-avis-card
                    name="Vincent et Carole"
                    description="Tip top ! Un passage à l'improviste suite à une ampoule xénon HS, une prise en charge immédiate avec remplacement dans la foulée, affaire réglée en 30 min pour un prix très raisonnable au regard de celui proposé par BMW.
                                Merci à toute l'équipe pour l'accueil et votre sympathie ! A très vite"
                    image="/images/img2.jpg"
                />

                <x-avis-card
                    name="Vincent et Carole"
                    description="Tip top ! Un passage à l'improviste suite à une ampoule xénon HS, une prise en charge immédiate avec remplacement dans la foulée, affaire réglée en 30 min pour un prix très raisonnable au regard de celui proposé par BMW.
                                Merci à toute l'équipe pour l'accueil et votre sympathie ! A très vite"
                    image="/images/img2.jpg"
                />

                <x-avis-card
                    name="Vincent et Carole"
                    description="Tip top ! Un passage à l'improviste suite à une ampoule xénon HS, une prise en charge immédiate avec remplacement dans la foulée, affaire réglée en 30 min pour un prix très raisonnable au regard de celui proposé par BMW.
                                Merci à toute l'équipe pour l'accueil et votre sympathie ! A très vite"
                    image="/images/img2.jpg"
                />

                <x-avis-card
                    name="Vincent et Carole"
                    description="Tip top ! Un passage à l'improviste suite à une ampoule xénon HS, une prise en charge immédiate avec remplacement dans la foulée, affaire réglée en 30 min pour un prix très raisonnable au regard de celui proposé par BMW.
                                Merci à toute l'équipe pour l'accueil et votre sympathie ! A très vite"
                    image="/images/img2.jpg"
                />
            </div>
        </div>



        <div
            id="contact"
            class="relative w-full h-100 bg-cover bg-center"
            style="background-image: url('/images/img1.jpg');"
        >
            <!-- Overlay sombre -->
            <div class="absolute inset-0 bg-black/70"></div>

            <!-- Contenu -->
            <div class="relative z-10 w-full h-full px-12 py-16 flex flex-col justify-between text-white">
                
                <!-- Titre -->
                <div class="mb-16">
                    <x-title title="Contact" color="white"/>
                </div>

                <!-- Infos -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-sm">
                    
                    <!-- Horaires -->
                    <div>
                        <h3 class="font-bold uppercase mb-3">Horaires</h3>
                        <ul class="space-y-1 text-gray-200">
                            <li>Lundi : 07:00–12:00, 14:00–19:00</li>
                            <li>Mardi : 07:00–12:00, 14:00–19:00</li>
                            <li>Mercredi : 07:00–12:00, 14:00–19:00</li>
                            <li>Jeudi : 07:00–12:00, 14:00–19:00</li>
                            <li>Vendredi : 07:00–12:00, 14:00–19:00</li>
                            <li>Samedi : Fermé</li>
                            <li>Dimanche : Fermé</li>
                        </ul>
                    </div>

                    <!-- Adresse -->
                    <div>
                        <h3 class="font-bold uppercase mb-3">Adresse</h3>
                        <p class="text-gray-200 underline"><a href="https://www.google.com/maps/place/Garage+THETE/@45.9530728,4.7471647,17z/data=!3m1!4b1!4m6!3m5!1s0x47f4900c77064ac1:0x72d39aa7beac9c58!8m2!3d45.9530691!4d4.7497396!16s%2Fg%2F1v830fyw?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D">
                            1323 Av. des Helvètes<br>
                            01600 Saint-Bernard
                        </a></p>
                    </div>

                    <!-- Téléphone -->
                    <div>
                        <h3 class="font-bold uppercase mb-3">Téléphone</h3>
                        <p class="text-gray-200 text-lg font-semibold">
                            04 74 00 01 94
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <footer class="bg-black h-10">
        
        </footer>
    </body>



    <!-- Script pour l'animation Tailwind -->
    <script>
    // Ajoutez cette animation à votre Tailwind (dans app.css ou en inline)
    const style = document.createElement('style');
    style.textContent = `
        @keyframes infinite-scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-infinite-scroll {
            animation: infinite-scroll 40s linear infinite;
            width: max-content;
        }
        .animate-infinite-scroll:hover {
            animation-play-state: paused;
        }
        `;
        document.head.appendChild(style);
    </script>
</html>
