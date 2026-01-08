<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

        <title>Mentions Légales - Garage THETE</title>
        
        <style>
            @media print {
                .bg-gray-50, .bg-white, .bg-gray-100, .bg-yellow-50, .bg-red-50 {
                    background-color: white !important;
                }
                .border, .border-b, .border-l-4, .border-gray-200, .border-red-200, .border-yellow-200 {
                    border: 1px solid #e5e7eb !important;
                }
                .shadow-lg {
                    box-shadow: none !important;
                }
                button {
                    display: none !important;
                }
                .bg-linear-to-r {
                    background: #b45309 !important;
                    color: white !important;
                }
                .text-yellow-200, .text-yellow-300 {
                    color: white !important;
                }
                .text-yellow-600, .text-yellow-800 {
                    color: #92400e !important;
                }
                a {
                    color: #92400e !important;
                    text-decoration: underline;
                }
            }
        </style>
    </head>
    <body>
        <div class="bg-gray-50 min-h-screen py-12">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- En-tête avec icône juridique -->
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-100 rounded-full mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Mentions Légales
                    </h1>
                    <p class="text-gray-600">
                        Conformément aux dispositions légales en vigueur
                    </p>
                    <div class="mt-4">
                        <span class="inline-block bg-yellow-100 text-yellow-800 text-sm px-4 py-1 rounded-full font-medium">
                            En vigueur au {{ date('d/m/Y') }}
                        </span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200" id="content-to-pdf">
                    <!-- Bannière d'en-tête -->
                    <div class="bg-linear-to-r from-gray-900 via-yellow-700 to-gray-800 px-8 py-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-2xl font-bold text-white">Garage THETE</h2>
                                <p class="text-yellow-200 mt-1">Site officiel du garage automobile</p>
                            </div>
                            <div class="hidden md:block">
                                <div class="bg-yellow-500 text-gray-900 px-4 py-2 rounded-lg text-sm font-semibold">
                                    Document légal
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contenu des mentions légales -->
                    <div class="p-8 md:p-10 space-y-10">
                        
                        <!-- Introduction -->
                        <section class="pb-8">
                            <div class="text-gray-700">
                                <p class="mb-4">Conformément aux dispositions des articles 6-III et 19 de la loi n°2004-575 du 21 juin 2004 pour la Confiance dans l'Économie Numérique (L.C.E.N.), il est porté à la connaissance des utilisateurs et visiteurs du site <strong>[NOM_DU_SITE]</strong> les présentes mentions légales.</p>
                            </div>
                        </section>

                        <!-- Section 1 - Éditeur du site -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">1</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">ÉDITEUR DU SITE</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>Le site <strong>[NOM_DU_SITE]</strong> est édité par :</p>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-gray-50 p-4 rounded-lg">
                                            <div>
                                                <p class="font-semibold text-gray-800">Dénomination sociale</p>
                                                <p>[TA SOCIÉTÉ / TON NOM]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Forme juridique</p>
                                                <p>[SARL / SAS / EI / Micro-entreprise, etc.]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Adresse du siège social</p>
                                                <p>[TON ADRESSE]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Numéro de téléphone</p>
                                                <p>[TON NUMÉRO]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Adresse e-mail</p>
                                                <p>[TON EMAIL PRO]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Numéro d'immatriculation (RNE / RCS)</p>
                                                <p>[TON NUMÉRO]</p>
                                            </div>
                                            <div class="md:col-span-2">
                                                <p class="font-semibold text-gray-800">Numéro de TVA intracommunautaire</p>
                                                <p>[SI APPLICABLE]</p>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <h4 class="font-semibold text-gray-800 mb-2">Responsables</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div class="p-3 bg-yellow-50 rounded">
                                                    <p class="font-medium text-gray-700">Directeur de la publication</p>
                                                    <p>[TON NOM ET PRÉNOM]</p>
                                                </div>
                                                <div class="p-3 bg-yellow-50 rounded">
                                                    <p class="font-medium text-gray-700">Responsable de la rédaction</p>
                                                    <p>[TON NOM ET PRÉNOM]</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 2 - Propriétaire du site / Exploitant -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">2</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">PROPRIÉTAIRE DU SITE / EXPLOITANT</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>Le contenu du site et l'activité présentée sont exploités par :</p>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-gray-50 p-4 rounded-lg">
                                            <div>
                                                <p class="font-semibold text-gray-800">Dénomination sociale</p>
                                                <p>[NOM DU GARAGE]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Forme juridique</p>
                                                <p>[SARL / SAS / EURL / autre]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Adresse du siège social</p>
                                                <p>[ADRESSE COMPLÈTE DU GARAGE]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Numéro de téléphone</p>
                                                <p>[TÉLÉPHONE DU GARAGE]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Adresse e-mail</p>
                                                <p>[EMAIL DU GARAGE]</p>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <h4 class="font-semibold text-gray-800 mb-2">Activité</h4>
                                            <div class="space-y-3">
                                                <p class="pl-4 border-l-4 border-yellow-500">Activité artisanale et commerciale</p>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <div class="p-3 bg-yellow-50 rounded">
                                                        <p class="font-medium text-gray-700">Immatriculation au Registre National des Entreprises (RNE)</p>
                                                        <p>[NUMÉRO]</p>
                                                    </div>
                                                    <div class="p-3 bg-yellow-50 rounded">
                                                        <p class="font-medium text-gray-700">Inscription au Registre du Commerce et des Sociétés (RCS)</p>
                                                        <p>[VILLE + NUMÉRO]</p>
                                                    </div>
                                                    <div class="md:col-span-2 p-3 bg-yellow-50 rounded">
                                                        <p class="font-medium text-gray-700">Numéro de TVA intracommunautaire</p>
                                                        <p>[SI APPLICABLE]</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <h4 class="font-semibold text-gray-800 mb-2">Activité réglementée</h4>
                                            <div class="p-4 bg-red-50 border border-red-200 rounded-lg">
                                                <p>L'activité de réparation automobile est une activité réglementée soumise notamment :</p>
                                                <ul class="list-disc pl-5 mt-2 space-y-1">
                                                    <li>au Code de la consommation,</li>
                                                    <li>au Code de l'artisanat,</li>
                                                    <li>à la réglementation applicable aux réparateurs automobiles.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 3 - Hébergement du site -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">3</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">HÉBERGEMENT DU SITE</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>Le site est hébergé par :</p>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-gray-50 p-4 rounded-lg">
                                            <div>
                                                <p class="font-semibold text-gray-800">Nom de l'hébergeur</p>
                                                <p>[NOM DE L'HÉBERGEUR]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Raison sociale</p>
                                                <p>[RAISON SOCIALE DE L'HÉBERGEUR]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Adresse</p>
                                                <p>[ADRESSE COMPLÈTE DE L'HÉBERGEUR]</p>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Téléphone</p>
                                                <p>[NUMÉRO DE TÉLÉPHONE DE L'HÉBERGEUR]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 4 - Accès au site -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">4</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">ACCÈS AU SITE</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>Le site est accessible gratuitement à tout utilisateur disposant d'un accès à Internet. L'utilisateur est seul responsable de son matériel informatique et de son accès au réseau.</p>
                                        
                                        <div class="p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded">
                                            <p class="text-sm">L'éditeur du site ne saurait être tenu responsable des interruptions temporaires du site, notamment pour des raisons de maintenance ou de mise à jour.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 5 - Propriété intellectuelle -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">5</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">PROPRIÉTÉ INTELLECTUELLE</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>La structure du site, son design, son code source et ses éléments techniques sont la propriété exclusive de <strong>[TA SOCIÉTÉ / TON NOM]</strong>, sauf mention contraire.</p>
                                        
                                        <p>Les contenus textuels, photographiques et visuels relatifs à l'activité du garage sont la propriété de <strong>[NOM DU GARAGE]</strong>, sauf mention contraire.</p>
                                        
                                        <div class="p-4 bg-red-50 border border-red-200 rounded-lg">
                                            <p class="font-semibold text-red-800 mb-2">⚠️ Interdiction de reproduction</p>
                                            <p>Toute reproduction, représentation ou exploitation, totale ou partielle, sans autorisation écrite préalable, est interdite et constitue une contrefaçon au sens du Code de la propriété intellectuelle.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 6 - Crédits photographiques -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">6</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">CRÉDITS PHOTOGRAPHIQUES</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>Les visuels présents sur le site proviennent :</p>
                                        
                                        <ul class="list-disc pl-5 space-y-2">
                                            <li>d'images libres de droits issues de banques d'images (ex. : Unsplash, Pexels),</li>
                                            <li>de photographies fournies par <strong>[NOM DU GARAGE]</strong>,</li>
                                            <li>de photographies réalisées par <strong>[TA SOCIÉTÉ / TON NOM]</strong>, le cas échéant.</li>
                                        </ul>
                                        
                                        <div class="p-3 bg-gray-100 rounded">
                                            <p class="text-sm font-semibold">Toute reproduction non autorisée est interdite.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 8 - Limitation de responsabilité -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">7</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">LIMITATION DE RESPONSABILITÉ</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>L'éditeur du site ne pourra être tenu responsable des dommages directs ou indirects résultant de l'utilisation du site ou de l'impossibilité temporaire d'y accéder.</p>
                                        
                                        <div class="p-4 bg-gray-100 rounded">
                                            <p class="text-sm">Le contenu informatif du site est fourni à titre indicatif et peut être modifié sans préavis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 9 - Liens hypertextes -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">8</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">LIENS HYPERTEXTES</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>Le site peut contenir des liens vers des sites tiers.</p>
                                        
                                        <div class="p-4 bg-yellow-50 rounded">
                                            <p class="font-semibold">L'éditeur du site et <strong>[NOM DU GARAGE]</strong> déclinent toute responsabilité quant au contenu de ces sites externes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 11 - Droit applicable -->
                        <section class="border-b border-gray-100 pb-8">
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">9</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">DROIT APPLICABLE</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>Les présentes mentions légales sont soumises au droit français.</p>
                                        
                                        <div class="p-4 bg-gray-100 rounded">
                                            <p class="font-semibold">Tout litige relatif à leur interprétation ou à l'utilisation du site relève de la compétence exclusive des tribunaux français.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 12 - Contact -->
                        <section>
                            <div class="flex items-start mb-6">
                                <div class="flex shrink-0">
                                    <div class="w-10 h-10 bg-yellow-50 rounded-lg flex items-center justify-center">
                                        <span class="text-yellow-600 font-bold text-lg">10</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">CONTACT</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p>Pour toute question relative au site ou aux présentes mentions légales :</p>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                            <div class="bg-yellow-50 p-6 rounded-xl border border-yellow-200">
                                                <div class="flex items-center mb-3">
                                                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                                                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold text-gray-800">Concernant le site (technique / édition)</p>
                                                    </div>
                                                </div>
                                                <p class="text-yellow-700 font-medium pl-14">👉 [TON EMAIL]</p>
                                            </div>
                                            
                                            <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                                                <div class="flex items-center mb-3">
                                                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                                                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold text-gray-800">Concernant l'activité du garage</p>
                                                    </div>
                                                </div>
                                                <p class="text-yellow-700 font-medium pl-14">👉 [EMAIL DU GARAGE]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>

                    <!-- Pied de page de la carte -->
                    <div class="bg-linear-to-r from-gray-900 to-yellow-800 px-8 py-6">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="mb-4 md:mb-0">
                                <p class="text-yellow-200 text-sm">
                                    © {{ date('Y') }} Thomas GROSSAT. Tous droits réservés.
                                </p>
                                <p class="text-yellow-300 text-xs mt-1">
                                    Dernière mise à jour : {{ date('d/m/Y') }}
                                </p>
                            </div>
                            <div class="flex space-x-4">
                                <a href="/" class="text-yellow-200 hover:text-white transition text-sm">
                                    Accueil
                                </a>
                                <span class="text-yellow-300">|</span>
                                <a href="/" class="text-yellow-200 hover:text-white transition text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouton de téléchargement PDF -->
                <div class="mt-8 text-center">
                    <button onclick="downloadAsPDF()" id="pdf-button" class="inline-flex items-center px-5 py-2.5 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition shadow-md hover:shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Télécharger en PDF
                    </button>
                </div>
            </div>
        </div>

        <script>
        // S'assurer que jsPDF est disponible globalement
        window.jsPDF = window.jspdf.jsPDF;

        function downloadAsPDF() {
            const element = document.getElementById('content-to-pdf');
            const button = document.getElementById('pdf-button');
            const fileName = 'mentions-legales-garage-thete-' + new Date().toISOString().slice(0, 10) + '.pdf';
            
            // Afficher un message de chargement
            const originalText = button.innerHTML;
            button.innerHTML = '<span class="flex items-center"><svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Génération du PDF...</span>';
            button.disabled = true;
            
            // Utiliser html2canvas pour capturer le contenu
            html2canvas(element, {
                scale: 2,
                useCORS: true,
                logging: false,
                backgroundColor: '#ffffff'
            }).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF('p', 'mm', 'a4');
                
                const imgWidth = 210; // A4 width in mm
                const pageHeight = 297; // A4 height in mm
                const imgHeight = canvas.height * imgWidth / canvas.width;
                
                let heightLeft = imgHeight;
                let position = 0;
                
                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;
                
                // Ajouter des pages supplémentaires si nécessaire
                while (heightLeft >= 0) {
                    position = heightLeft - imgHeight;
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }
                
                // Télécharger le PDF
                pdf.save(fileName);
                
                // Restaurer le bouton
                button.innerHTML = originalText;
                button.disabled = false;
            }).catch(error => {
                console.error('Erreur lors de la génération du PDF:', error);
                alert('Erreur lors de la génération du PDF. Vous pouvez utiliser la fonction d\'impression de votre navigateur (Ctrl+P).');
                
                // Restaurer le bouton
                button.innerHTML = originalText;
                button.disabled = false;
            });
        }

        // Fallback : fonction d'impression classique
        function printPage() {
            window.print();
        }
        </script>
    </body>
</html>