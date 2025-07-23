@extends('layouts.app')

@section('content')


 <!-- Hero Section -->
 <section class="relative bg-gradient-to-r from-burkina-green via-burkina-yellow to-burkina-red text-white py-20">
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="flex justify-center mb-6">
                <svg class="h-16 w-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">À propos du Ministère de l'Éducation</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                Œuvrant pour une éducation de qualité, inclusive et accessible à tous les citoyens du Burkina Faso
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8">
                <div class="flex items-center space-x-2">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span class="font-semibold">2,8 millions d'élèves</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    <span class="font-semibold">15 000 établissements</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Missions Section -->
<section id="missions" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Missions, Valeurs et Engagements</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Le Ministère de l'Éducation du Burkina Faso s'engage à transformer le système éducatif 
                pour répondre aux aspirations de développement du pays.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 hover-scale">
                <div class="flex items-center justify-center w-16 h-16 bg-burkina-green bg-opacity-10 rounded-full mb-6 mx-auto">
                    <svg class="h-8 w-8 text-burkina-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Notre Mission</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Assurer une éducation de qualité pour tous, en développant les compétences nécessaires à l'épanouissement personnel et au développement socio-économique du pays.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 hover-scale">
                <div class="flex items-center justify-center w-16 h-16 bg-burkina-red bg-opacity-10 rounded-full mb-6 mx-auto">
                    <svg class="h-8 w-8 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Nos Valeurs</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Intégrité, Excellence, Équité, Innovation et Inclusion. Ces valeurs guident toutes nos actions et décisions pour servir au mieux la nation burkinabè.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 hover-scale">
                <div class="flex items-center justify-center w-16 h-16 bg-burkina-yellow bg-opacity-10 rounded-full mb-6 mx-auto">
                    <svg class="h-8 w-8 text-burkina-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Nos Engagements</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Garantir l'accès à une éducation de qualité, promouvoir l'égalité des chances et former des citoyens responsables et compétents.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 hover-scale">
                <div class="flex items-center justify-center w-16 h-16 bg-burkina-green bg-opacity-10 rounded-full mb-6 mx-auto">
                    <svg class="h-8 w-8 text-burkina-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Notre Vision</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Faire du Burkina Faso un pays où chaque citoyen a accès à une éducation de qualité, adaptée aux défis du 21e siècle et aux réalités locales.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Organigramme Section -->
<section id="organigramme" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Organigramme du Ministère</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Structure organisationnelle du Ministère de l'Éducation du Burkina Faso. 
                Cliquez sur les éléments pour explorer la hiérarchie.
            </p>
        </div>

        <div class="bg-gray-50 rounded-lg p-8">
            <div id="organigramme-container">
                <!-- Ministre -->
                <div class="mb-4">
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-pointer" onclick="toggleNode('ministre')">
                        <button class="mr-3 p-1 rounded hover:bg-gray-100 transition-colors">
                            <svg id="ministre-icon" class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="flex items-center space-x-3 flex-1">
                            <div class="flex items-center justify-center w-10 h-10 bg-burkina-green bg-opacity-10 rounded-full">
                                <svg class="h-5 w-5 text-burkina-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Ministre de l'Éducation</h4>
                                <p class="text-sm text-gray-600">Ministre</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sous-structure du Ministre -->
                    <div id="ministre-children" class="mt-2">
                        <!-- Secrétaire Général -->
                        <div class="ml-8 mb-2">
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-pointer" onclick="toggleNode('sg')">
                                <button class="mr-3 p-1 rounded hover:bg-gray-100 transition-colors">
                                    <svg id="sg-icon" class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                <div class="flex items-center space-x-3 flex-1">
                                    <div class="flex items-center justify-center w-10 h-10 bg-burkina-yellow bg-opacity-10 rounded-full">
                                        <svg class="h-5 w-5 text-burkina-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Secrétaire Général</h4>
                                        <p class="text-sm text-gray-600">Secrétaire Général</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Directions sous SG -->
                            <div id="sg-children" class="mt-2 hidden">
                                <div class="ml-8 space-y-2">
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                                        <div class="flex items-center space-x-3 flex-1">
                                            <div class="flex items-center justify-center w-10 h-10 bg-burkina-red bg-opacity-10 rounded-full">
                                                <svg class="h-5 w-5 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Direction Générale de l'Enseignement Primaire</h4>
                                                <p class="text-sm text-gray-600">Directeur Général</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                                        <div class="flex items-center space-x-3 flex-1">
                                            <div class="flex items-center justify-center w-10 h-10 bg-burkina-red bg-opacity-10 rounded-full">
                                                <svg class="h-5 w-5 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Direction Générale de l'Enseignement Secondaire</h4>
                                                <p class="text-sm text-gray-600">Directeur Général</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                                        <div class="flex items-center space-x-3 flex-1">
                                            <div class="flex items-center justify-center w-10 h-10 bg-burkina-red bg-opacity-10 rounded-full">
                                                <svg class="h-5 w-5 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Direction des Ressources Humaines</h4>
                                                <p class="text-sm text-gray-600">Directeur</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cabinet du Ministre -->
                        <div class="ml-8 mb-2">
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-pointer" onclick="toggleNode('cabinet')">
                                <button class="mr-3 p-1 rounded hover:bg-gray-100 transition-colors">
                                    <svg id="cabinet-icon" class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                <div class="flex items-center space-x-3 flex-1">
                                    <div class="flex items-center justify-center w-10 h-10 bg-burkina-yellow bg-opacity-10 rounded-full">
                                        <svg class="h-5 w-5 text-burkina-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Cabinet du Ministre</h4>
                                        <p class="text-sm text-gray-600">Chef de Cabinet</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Services du Cabinet -->
                            <div id="cabinet-children" class="mt-2 hidden">
                                <div class="ml-8 space-y-2">
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                                        <div class="flex items-center space-x-3 flex-1">
                                            <div class="flex items-center justify-center w-10 h-10 bg-burkina-red bg-opacity-10 rounded-full">
                                                <svg class="h-5 w-5 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Conseiller Technique</h4>
                                                <p class="text-sm text-gray-600">Conseiller</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                                        <div class="flex items-center space-x-3 flex-1">
                                            <div class="flex items-center justify-center w-10 h-10 bg-burkina-red bg-opacity-10 rounded-full">
                                                <svg class="h-5 w-5 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Attaché de Presse</h4>
                                                <p class="text-sm text-gray-600">Attaché</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Histoire Section -->
<section id="histoire" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Histoire du Ministère</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Retour sur les moments clés qui ont façonné l'évolution du système éducatif burkinabè 
                depuis l'indépendance.
            </p>
        </div>

        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-burkina-green bg-opacity-20 hidden md:block"></div>
            
            <div class="space-y-12">
                <!-- 1960 -->
                <div class="relative fade-in">
                    <div class="flex items-center md:flex-row">
                        <div class="flex-1 md:w-1/2">
                            <div class="bg-white rounded-lg shadow-lg p-6 md:mr-8">
                                <div class="flex items-start space-x-4">
                                    <div class="flex items-center justify-center w-12 h-12 bg-burkina-green bg-opacity-10 rounded-full flex-shrink-0">
                                        <svg class="h-6 w-6 text-burkina-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <span class="text-2xl font-bold text-burkina-green">1960</span>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Création du Ministère</h3>
                                        <p class="text-gray-600 leading-relaxed">Création du Ministère de l'Éducation suite à l'indépendance du Burkina Faso, alors Haute-Volta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-burkina-green rounded-full border-4 border-white shadow-md"></div>
                    </div>
                </div>

                <!-- 1984 -->
                <div class="relative fade-in">
                    <div class="flex items-center md:flex-row-reverse">
                        <div class="flex-1 md:w-1/2">
                            <div class="bg-white rounded-lg shadow-lg p-6 md:ml-8">
                                <div class="flex items-start space-x-4">
                                    <div class="flex items-center justify-center w-12 h-12 bg-burkina-yellow bg-opacity-10 rounded-full flex-shrink-0">
                                        <svg class="h-6 w-6 text-burkina-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <span class="text-2xl font-bold text-burkina-yellow">1984</span>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Réforme Thomas Sankara</h3>
                                        <p class="text-gray-600 leading-relaxed">Lancement de la campagne d'alphabétisation et démocratisation de l'enseignement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-burkina-yellow rounded-full border-4 border-white shadow-md"></div>
                    </div>
                </div>

                <!-- 2007 -->
                <div class="relative fade-in">
                    <div class="flex items-center md:flex-row">
                        <div class="flex-1 md:w-1/2">
                            <div class="bg-white rounded-lg shadow-lg p-6 md:mr-8">
                                <div class="flex items-start space-x-4">
                                    <div class="flex items-center justify-center w-12 h-12 bg-burkina-red bg-opacity-10 rounded-full flex-shrink-0">
                                        <svg class="h-6 w-6 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <span class="text-2xl font-bold text-burkina-red">2007</span>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Plan Décennal</h3>
                                        <p class="text-gray-600 leading-relaxed">Mise en œuvre du Plan Décennal de Développement de l'Éducation de Base (PDDEB).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-burkina-red rounded-full border-4 border-white shadow-md"></div>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="relative fade-in">
                    <div class="flex items-center md:flex-row-reverse">
                        <div class="flex-1 md:w-1/2">
                            <div class="bg-white rounded-lg shadow-lg p-6 md:ml-8">
                                <div class="flex items-start space-x-4">
                                    <div class="flex items-center justify-center w-12 h-12 bg-burkina-green bg-opacity-10 rounded-full flex-shrink-0">
                                        <svg class="h-6 w-6 text-burkina-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <span class="text-2xl font-bold text-burkina-green">2023</span>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Transformation Digitale</h3>
                                        <p class="text-gray-600 leading-relaxed">Lancement du programme de transformation digitale de l'éducation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-burkina-green rounded-full border-4 border-white shadow-md"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Réformes Section -->
<section id="reformes" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Réformes Majeures</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Les grandes réformes en cours pour transformer et moderniser le système éducatif burkinabè.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow duration-300 hover-scale">
                <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full mb-6 shadow-sm">
                    <svg class="h-8 w-8 text-burkina-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold text-gray-900">Réforme Curriculaire</h3>
                        <span class="px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">En cours</span>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4">Modernisation des programmes d'enseignement avec l'intégration des compétences du 21e siècle.</p>
                    <div class="bg-white rounded-lg p-3 border border-gray-200">
                        <p class="text-sm font-medium text-gray-700">Impact:</p>
                        <p class="text-sm text-burkina-green font-semibold">2,5 millions d'élèves concernés</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow duration-300 hover-scale">
                <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full mb-6 shadow-sm">
                    <svg class="h-8 w-8 text-burkina-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold text-gray-900">Formation des Enseignants</h3>
                        <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">Déployé</span>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4">Programme de formation continue pour améliorer la qualité de l'enseignement.</p>
                    <div class="bg-white rounded-lg p-3 border border-gray-200">
                        <p class="text-sm font-medium text-gray-700">Impact:</p>
                        <p class="text-sm text-burkina-green font-semibold">45 000 enseignants formés</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow duration-300 hover-scale">
                <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full mb-6 shadow-sm">
                    <svg class="h-8 w-8 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
                    </svg>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold text-gray-900">Digitalisation</h3>
                        <span class="px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">Pilote</span>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4">Introduction des technologies numériques dans l'enseignement.</p>
                    <div class="bg-white rounded-lg p-3 border border-gray-200">
                        <p class="text-sm font-medium text-gray-700">Impact:</p>
                        <p class="text-sm text-burkina-green font-semibold">500 écoles équipées</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galerie Section -->
<section id="galerie" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Galerie Institutionnelle</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Moments marquants et activités officielles du Ministère de l'Éducation du Burkina Faso.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer hover-scale" onclick="openModal(0)">
                <div class="aspect-video overflow-hidden">
                    <img src="https://images.pexels.com/photos/5212345/pexels-photo-5212345.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Cérémonie d'ouverture" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Cérémonie d'ouverture de l'année scolaire</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Le Ministre inaugure la rentrée scolaire 2023-2024 en présence des autorités éducatives.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer hover-scale" onclick="openModal(1)">
                <div class="aspect-video overflow-hidden">
                    <img src="https://images.pexels.com/photos/5212700/pexels-photo-5212700.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Formation des enseignants" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Formation des enseignants</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Session de formation continue pour le renforcement des capacités pédagogiques.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer hover-scale" onclick="openModal(2)">
                <div class="aspect-video overflow-hidden">
                    <img src="https://images.pexels.com/photos/5212339/pexels-photo-5212339.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Remise de diplômes" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Remise de diplômes</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Cérémonie de remise de diplômes aux lauréats du baccalauréat 2023.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal pour la galerie -->
<div id="gallery-modal" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 p-4 hidden">
    <div class="relative max-w-4xl mx-auto">
        <button onclick="closeModal()" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <div class="bg-white rounded-lg overflow-hidden">
            <img id="modal-image" src="" alt="" class="w-full h-auto max-h-96 object-cover">
            <div class="p-6">
                <h3 id="modal-title" class="text-xl font-bold text-gray-900 mb-2"></h3>
                <p id="modal-description" class="text-gray-600 leading-relaxed"></p>
            </div>
        </div>
    </div>
</div>
<style>
    .timeline-line {
        background: linear-gradient(to bottom, #10B981 0%, #10B981 50%, #D1FAE5 50%, #D1FAE5 100%);
    }
    .fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .hover-scale {
        transition: transform 0.3s ease;
    }
    .hover-scale:hover {
        transform: scale(1.05);
    }
</style>
<script src="{{ asset('js/a-propos.js') }}"></script>
@endsection