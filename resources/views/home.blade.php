@extends('layouts.app')

@section('content')
    <section id="accueil" class="relative pt-16 bg-gradient-to-br from-red-50 via-yellow-50 to-green-50 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-red-500/5 via-yellow-500/5 to-green-500/5"></div>

        <!-- Hero Carousel -->
        <div class="relative">
            <div id="hero-slides">
                <!-- Slide 1 -->
                <div class="transition-all duration-1000 opacity-100" id="slide-0">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="text-center lg:text-left">
                                <div
                                    class="inline-flex items-center bg-white/80 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                                    <i data-lucide="shield" class="h-4 w-4 text-red-600 mr-2"></i>
                                    <span class="text-sm font-medium text-gray-700">Service Public Officiel</span>
                                </div>

                                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-4">
                                    Éducation de Qualité
                                </h2>
                                <h3
                                    class="text-2xl md:text-3xl font-semibold bg-gradient-to-r from-red-600 via-yellow-600 to-green-600 bg-clip-text text-transparent mb-6">
                                    Pour un Burkina Faso Prospère
                                </h3>
                                <p class="text-xl text-gray-700 mb-8 leading-relaxed max-w-2xl">
                                    Construisons ensemble un système éducatif moderne, inclusif et accessible à tous les
                                    enfants burkinabés.
                                </p>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                    <button
                                        class="group bg-gradient-to-r from-red-500 to-red-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-red-600 hover:to-red-700 transition-all transform hover:scale-105 shadow-lg flex items-center">
                                        Découvrir nos programmes
                                        <i data-lucide="arrow-right"
                                            class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform"></i>
                                    </button>
                                    <button
                                        class="group border-2 border-green-500 text-green-600 px-8 py-4 rounded-lg font-semibold hover:bg-green-500 hover:text-white transition-all flex items-center">
                                        <i data-lucide="play" class="mr-2 h-5 w-5"></i>
                                        Voir la vidéo
                                    </button>
                                </div>
                            </div>

                            <div class="relative">
                                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                                    <img src="https://images.pexels.com/photos/8197543/pexels-photo-8197543.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                        alt="Éducation de Qualité" class="w-full h-96 object-cover" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                </div>

                                <!-- Floating Stats -->
                                <div class="absolute -bottom-4 -left-4 bg-white rounded-xl p-4 shadow-xl">
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="trending-up" class="h-6 w-6 text-green-500"></i>
                                        <div>
                                            <div class="font-bold text-gray-900">+15.2%</div>
                                            <div class="text-sm text-gray-600">Taux de réussite</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute -top-4 -right-4 bg-white rounded-xl p-4 shadow-xl">
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="award" class="h-6 w-6 text-yellow-500"></i>
                                        <div>
                                            <div class="font-bold text-gray-900">Excellence</div>
                                            <div class="text-sm text-gray-600">Éducative</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="transition-all duration-1000 opacity-0 absolute inset-0" id="slide-1">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="text-center lg:text-left">
                                <div
                                    class="inline-flex items-center bg-white/80 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                                    <i data-lucide="shield" class="h-4 w-4 text-red-600 mr-2"></i>
                                    <span class="text-sm font-medium text-gray-700">Service Public Officiel</span>
                                </div>

                                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-4">
                                    Innovation Pédagogique
                                </h2>
                                <h3
                                    class="text-2xl md:text-3xl font-semibold bg-gradient-to-r from-red-600 via-yellow-600 to-green-600 bg-clip-text text-transparent mb-6">
                                    Technologies au Service de l'Apprentissage
                                </h3>
                                <p class="text-xl text-gray-700 mb-8 leading-relaxed max-w-2xl">
                                    Intégration des outils numériques pour révolutionner l'enseignement et l'apprentissage
                                    au Burkina Faso.
                                </p>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                    <button
                                        class="group bg-gradient-to-r from-red-500 to-red-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-red-600 hover:to-red-700 transition-all transform hover:scale-105 shadow-lg flex items-center">
                                        Explorer les innovations
                                        <i data-lucide="arrow-right"
                                            class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform"></i>
                                    </button>
                                    <button
                                        class="group border-2 border-green-500 text-green-600 px-8 py-4 rounded-lg font-semibold hover:bg-green-500 hover:text-white transition-all flex items-center">
                                        <i data-lucide="play" class="mr-2 h-5 w-5"></i>
                                        Voir la vidéo
                                    </button>
                                </div>
                            </div>

                            <div class="relative">
                                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                                    <img src="https://images.pexels.com/photos/5212345/pexels-photo-5212345.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                        alt="Innovation Pédagogique" class="w-full h-96 object-cover" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                </div>

                                <!-- Floating Stats -->
                                <div class="absolute -bottom-4 -left-4 bg-white rounded-xl p-4 shadow-xl">
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="trending-up" class="h-6 w-6 text-green-500"></i>
                                        <div>
                                            <div class="font-bold text-gray-900">+32.5%</div>
                                            <div class="text-sm text-gray-600">Adoption numérique</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute -top-4 -right-4 bg-white rounded-xl p-4 shadow-xl">
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="zap" class="h-6 w-6 text-blue-500"></i>
                                        <div>
                                            <div class="font-bold text-gray-900">Innovation</div>
                                            <div class="text-sm text-gray-600">Technologique</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="transition-all duration-1000 opacity-0 absolute inset-0" id="slide-2">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="text-center lg:text-left">
                                <div
                                    class="inline-flex items-center bg-white/80 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                                    <i data-lucide="shield" class="h-4 w-4 text-red-600 mr-2"></i>
                                    <span class="text-sm font-medium text-gray-700">Service Public Officiel</span>
                                </div>

                                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-4">
                                    Formation des Enseignants
                                </h2>
                                <h3
                                    class="text-2xl md:text-3xl font-semibold bg-gradient-to-r from-red-600 via-yellow-600 to-green-600 bg-clip-text text-transparent mb-6">
                                    Excellence Pédagogique Garantie
                                </h3>
                                <p class="text-xl text-gray-700 mb-8 leading-relaxed max-w-2xl">
                                    Programmes de formation continue pour renforcer les compétences de nos éducateurs
                                    nationaux.
                                </p>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                    <button
                                        class="group bg-gradient-to-r from-red-500 to-red-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-red-600 hover:to-red-700 transition-all transform hover:scale-105 shadow-lg flex items-center">
                                        Programmes de formation
                                        <i data-lucide="arrow-right"
                                            class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform"></i>
                                    </button>
                                    <button
                                        class="group border-2 border-green-500 text-green-600 px-8 py-4 rounded-lg font-semibold hover:bg-green-500 hover:text-white transition-all flex items-center">
                                        <i data-lucide="play" class="mr-2 h-5 w-5"></i>
                                        Voir la vidéo
                                    </button>
                                </div>
                            </div>

                            <div class="relative">
                                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                                    <img src="https://images.pexels.com/photos/5212700/pexels-photo-5212700.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                        alt="Formation des Enseignants" class="w-full h-96 object-cover" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                </div>

                                <!-- Floating Stats -->
                                <div class="absolute -bottom-4 -left-4 bg-white rounded-xl p-4 shadow-xl">
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="trending-up" class="h-6 w-6 text-green-500"></i>
                                        <div>
                                            <div class="font-bold text-gray-900">+28.7%</div>
                                            <div class="text-sm text-gray-600">Enseignants formés</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute -top-4 -right-4 bg-white rounded-xl p-4 shadow-xl">
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="award" class="h-6 w-6 text-purple-500"></i>
                                        <div>
                                            <div class="font-bold text-gray-900">Certification</div>
                                            <div class="text-sm text-gray-600">Pédagogique</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Indicators -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button onclick="showSlide(0)" class="w-8 h-3 rounded-full bg-red-500 transition-all"></button>
                <button onclick="showSlide(1)" class="w-3 h-3 rounded-full bg-white/50 transition-all"></button>
                <button onclick="showSlide(2)" class="w-3 h-3 rounded-full bg-white/50 transition-all"></button>
            </div>
        </div>
    </section>

    <!-- Quick Links Bar -->
    <section class="bg-white border-b border-gray-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">Accès Rapide</h3>
                <div class="flex space-x-6 overflow-x-auto">
                    <a href="#inscription"
                        class="flex items-center space-x-2 text-gray-600 hover:text-red-600 transition-colors whitespace-nowrap">
                        <i data-lucide="file-text" class="h-4 w-4"></i>
                        <span class="text-sm font-medium">Inscription Scolaire</span>
                    </a>
                    <a href="#resultats"
                        class="flex items-center space-x-2 text-gray-600 hover:text-red-600 transition-colors whitespace-nowrap">
                        <i data-lucide="award" class="h-4 w-4"></i>
                        <span class="text-sm font-medium">Résultats d'Examens</span>
                    </a>
                    <a href="#bourses"
                        class="flex items-center space-x-2 text-gray-600 hover:text-red-600 transition-colors whitespace-nowrap">
                        <i data-lucide="star" class="h-4 w-4"></i>
                        <span class="text-sm font-medium">Bourses d'Études</span>
                    </a>
                    <a href="#calendrier"
                        class="flex items-center space-x-2 text-gray-600 hover:text-red-600 transition-colors whitespace-nowrap">
                        <i data-lucide="calendar" class="h-4 w-4"></i>
                        <span class="text-sm font-medium">Calendrier Scolaire</span>
                    </a>
                    <a href="#formations"
                        class="flex items-center space-x-2 text-gray-600 hover:text-red-600 transition-colors whitespace-nowrap">
                        <i data-lucide="book-open" class="h-4 w-4"></i>
                        <span class="text-sm font-medium">Formations Continues</span>
                    </a>
                    <a href="#stats"
                        class="flex items-center space-x-2 text-gray-600 hover:text-red-600 transition-colors whitespace-nowrap">
                        <i data-lucide="trending-up" class="h-4 w-4"></i>
                        <span class="text-sm font-medium">Statistiques Éducatives</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section Enhanced -->
    <section class="py-16 bg-gradient-to-r from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Système Éducatif en Chiffres</h2>
                <p class="text-lg text-gray-600">Performance et évolution du secteur éducatif burkinabé</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="bg-gradient-to-r from-red-500 to-green-500 w-12 h-12 rounded-full flex items-center justify-center">
                            <i data-lucide="school" class="h-6 w-6 text-white"></i>
                        </div>
                        <div class="flex items-center text-green-600 text-sm font-medium">
                            <i data-lucide="trending-up" class="h-4 w-4 mr-1"></i>
                            +5.2%
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">15,247</div>
                    <div class="text-gray-600">Établissements</div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="bg-gradient-to-r from-red-500 to-green-500 w-12 h-12 rounded-full flex items-center justify-center">
                            <i data-lucide="users" class="h-6 w-6 text-white"></i>
                        </div>
                        <div class="flex items-center text-green-600 text-sm font-medium">
                            <i data-lucide="trending-up" class="h-4 w-4 mr-1"></i>
                            +8.1%
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">4.2M</div>
                    <div class="text-gray-600">Élèves Inscrits</div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="bg-gradient-to-r from-red-500 to-green-500 w-12 h-12 rounded-full flex items-center justify-center">
                            <i data-lucide="book-open" class="h-6 w-6 text-white"></i>
                        </div>
                        <div class="flex items-center text-green-600 text-sm font-medium">
                            <i data-lucide="trending-up" class="h-4 w-4 mr-1"></i>
                            +3.7%
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">127,350</div>
                    <div class="text-gray-600">Enseignants</div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="bg-gradient-to-r from-red-500 to-green-500 w-12 h-12 rounded-full flex items-center justify-center">
                            <i data-lucide="map-pin" class="h-6 w-6 text-white"></i>
                        </div>
                        <div class="flex items-center text-green-600 text-sm font-medium">
                            <i data-lucide="trending-up" class="h-4 w-4 mr-1"></i>
                            100%
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-gray-900 mb-2">45</div>
                    <div class="text-gray-600">Provinces Couvertes</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Réalisations Majeures</h2>
                <p class="text-lg text-gray-600">Progrès significatifs dans l'amélioration du système éducatif</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <i data-lucide="trending-up" class="h-8 w-8 text-green-600"></i>
                        <i data-lucide="check-circle" class="h-5 w-5 text-green-500"></i>
                    </div>
                    <div class="text-2xl font-bold text-gray-900 mb-2">87.3%</div>
                    <h3 class="font-semibold text-gray-900 mb-2">Taux de Scolarisation</h3>
                    <p class="text-sm text-gray-600">Augmentation significative de l'accès à l'éducation primaire</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <i data-lucide="book-open" class="h-8 w-8 text-blue-600"></i>
                        <i data-lucide="check-circle" class="h-5 w-5 text-green-500"></i>
                    </div>
                    <div class="text-2xl font-bold text-gray-900 mb-2">68.2%</div>
                    <h3 class="font-semibold text-gray-900 mb-2">Alphabétisation Adulte</h3>
                    <p class="text-sm text-gray-600">Programmes d'alphabétisation pour les adultes</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <i data-lucide="users" class="h-8 w-8 text-purple-600"></i>
                        <i data-lucide="check-circle" class="h-5 w-5 text-green-500"></i>
                    </div>
                    <div class="text-2xl font-bold text-gray-900 mb-2">92.1%</div>
                    <h3 class="font-semibold text-gray-900 mb-2">Égalité des Genres</h3>
                    <p class="text-sm text-gray-600">Parité filles-garçons dans l'enseignement primaire</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <i data-lucide="award" class="h-8 w-8 text-orange-600"></i>
                        <i data-lucide="check-circle" class="h-5 w-5 text-green-500"></i>
                    </div>
                    <div class="text-2xl font-bold text-gray-900 mb-2">156%</div>
                    <h3 class="font-semibold text-gray-900 mb-2">Formation Technique</h3>
                    <p class="text-sm text-gray-600">Croissance des inscriptions en formation professionnelle</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section Enhanced -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Services Éducatifs Nationaux</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Accédez facilement à tous les services éducatifs du Burkina Faso depuis une plateforme unifiée
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="bg-gradient-to-r from-red-500 to-red-600 w-12 h-12 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="file-text" class="h-6 w-6 text-white"></i>
                            </div>
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">
                                Mis à jour
                            </span>
                        </div>

                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Textes et Réformes</h3>
                        <p class="text-gray-600 mb-4">Accédez aux textes officiels, lois et réformes éducatives en vigueur
                        </p>

                        <div class="mb-4">
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Lois éducatives</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Décrets</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Circulaires</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Réformes</span>
                            </div>
                        </div>

                        <a href="#textes"
                            class="inline-flex items-center text-red-600 hover:text-red-700 font-medium group">
                            Accéder au service
                            <i data-lucide="chevron-right"
                                class="ml-1 h-4 w-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="bg-gradient-to-r from-green-500 to-green-600 w-12 h-12 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="school" class="h-6 w-6 text-white"></i>
                            </div>
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">
                                15,000+
                            </span>
                        </div>

                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Établissements Scolaires</h3>
                        <p class="text-gray-600 mb-4">Répertoire complet des établissements scolaires et universitaires du
                            pays</p>

                        <div class="mb-4">
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Écoles primaires</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Collèges</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Lycées</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Universités</span>
                            </div>
                        </div>

                        <a href="#etablissements"
                            class="inline-flex items-center text-red-600 hover:text-red-700 font-medium group">
                            Accéder au service
                            <i data-lucide="chevron-right"
                                class="ml-1 h-4 w-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="bg-gradient-to-r from-yellow-500 to-yellow-600 w-12 h-12 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="help-circle" class="h-6 w-6 text-white"></i>
                            </div>
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">
                                24/7
                            </span>
                        </div>

                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Centre d'Aide</h3>
                        <p class="text-gray-600 mb-4">Support technique et réponses aux questions fréquemment posées</p>

                        <div class="mb-4">
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">FAQ</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Guides</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Tutoriels</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Support</span>
                            </div>
                        </div>

                        <a href="#faq"
                            class="inline-flex items-center text-red-600 hover:text-red-700 font-medium group">
                            Accéder au service
                            <i data-lucide="chevron-right"
                                class="ml-1 h-4 w-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="bg-gradient-to-r from-blue-500 to-blue-600 w-12 h-12 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="newspaper" class="h-6 w-6 text-white"></i>
                            </div>
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">
                                Quotidien
                            </span>
                        </div>

                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Actualités Éducatives</h3>
                        <p class="text-gray-600 mb-4">Dernières nouvelles, événements et annonces du secteur éducatif</p>

                        <div class="mb-4">
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Communiqués</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Événements</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Réformes</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Innovations</span>
                            </div>
                        </div>

                        <a href="#actualites"
                            class="inline-flex items-center text-red-600 hover:text-red-700 font-medium group">
                            Accéder au service
                            <i data-lucide="chevron-right"
                                class="ml-1 h-4 w-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="bg-gradient-to-r from-purple-500 to-purple-600 w-12 h-12 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="globe" class="h-6 w-6 text-white"></i>
                            </div>
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">
                                Nouveau
                            </span>
                        </div>

                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Services Numériques</h3>
                        <p class="text-gray-600 mb-4">Plateformes digitales pour l'administration et la gestion éducative
                        </p>

                        <div class="mb-4">
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">E-learning</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Gestion</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Statistiques</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Rapports</span>
                            </div>
                        </div>

                        <a href="#numerique"
                            class="inline-flex items-center text-red-600 hover:text-red-700 font-medium group">
                            Accéder au service
                            <i data-lucide="chevron-right"
                                class="ml-1 h-4 w-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="bg-gradient-to-r from-indigo-500 to-indigo-600 w-12 h-12 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="phone" class="h-6 w-6 text-white"></i>
                            </div>
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">
                                Direct
                            </span>
                        </div>

                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Contact Institutionnel</h3>
                        <p class="text-gray-600 mb-4">Contactez directement les services du ministère et ses directions</p>

                        <div class="mb-4">
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Ministère</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Directions</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Régions</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Urgences</span>
                            </div>
                        </div>

                        <a href="#contact"
                            class="inline-flex items-center text-red-600 hover:text-red-700 font-medium group">
                            Accéder au service
                            <i data-lucide="chevron-right"
                                class="ml-1 h-4 w-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Enhanced -->
    <section id="actualites" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-16">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Actualités Éducatives</h2>
                    <p class="text-xl text-gray-600">Restez informé des dernières nouvelles et réformes éducatives</p>
                </div>
                <button
                    class="hidden md:flex items-center bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-red-600 hover:to-red-700 transition-all">
                    <i data-lucide="newspaper" class="mr-2 h-5 w-5"></i>
                    Toutes les actualités
                </button>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Lancement du Programme National d'Alphabétisation Numérique 2025"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div
                            class="absolute top-4 left-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium flex items-center">
                            <i data-lucide="zap" class="h-3 w-3 mr-1"></i>
                            Urgent
                        </div>
                        <div
                            class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 text-xs text-gray-700">
                            <i data-lucide="clock" class="inline h-3 w-3 mr-1"></i>
                            3 min
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium">
                                Innovation
                            </span>
                            <div class="flex items-center text-gray-500 text-sm">
                                <i data-lucide="calendar" class="h-4 w-4 mr-1"></i>
                                15 Janvier 2025
                            </div>
                        </div>

                        <h3
                            class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2 group-hover:text-red-600 transition-colors">
                            Lancement du Programme National d'Alphabétisation Numérique 2025
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Initiative majeure pour démocratiser l'accès aux technologies numériques dans l'éducation avec
                            500 centres équipés.
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="#"
                                class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                                Lire l'article
                                <i data-lucide="chevron-right" class="ml-1 h-4 w-4"></i>
                            </a>
                            <button class="p-2 text-gray-400 hover:text-red-600 transition-colors">
                                <i data-lucide="heart" class="h-4 w-4"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <article class="bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/5212317/pexels-photo-5212317.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Réforme Complète des Programmes d'Enseignement Technique et Professionnel"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div
                            class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 text-xs text-gray-700">
                            <i data-lucide="clock" class="inline h-3 w-3 mr-1"></i>
                            5 min
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium">
                                Réforme
                            </span>
                            <div class="flex items-center text-gray-500 text-sm">
                                <i data-lucide="calendar" class="h-4 w-4 mr-1"></i>
                                12 Janvier 2025
                            </div>
                        </div>

                        <h3
                            class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2 group-hover:text-red-600 transition-colors">
                            Réforme Complète des Programmes d'Enseignement Technique et Professionnel
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Adaptation des cursus techniques aux besoins du marché de l'emploi burkinabé avec 45 nouvelles
                            spécialisations.
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="#"
                                class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                                Lire l'article
                                <i data-lucide="chevron-right" class="ml-1 h-4 w-4"></i>
                            </a>
                            <button class="p-2 text-gray-400 hover:text-red-600 transition-colors">
                                <i data-lucide="heart" class="h-4 w-4"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <article class="bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/8197528/pexels-photo-8197528.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Construction de 200 Nouvelles Salles de Classe dans les Zones Rurales"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div
                            class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 text-xs text-gray-700">
                            <i data-lucide="clock" class="inline h-3 w-3 mr-1"></i>
                            4 min
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium">
                                Infrastructure
                            </span>
                            <div class="flex items-center text-gray-500 text-sm">
                                <i data-lucide="calendar" class="h-4 w-4 mr-1"></i>
                                8 Janvier 2025
                            </div>
                        </div>

                        <h3
                            class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2 group-hover:text-red-600 transition-colors">
                            Construction de 200 Nouvelles Salles de Classe dans les Zones Rurales
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Expansion majeure de l'infrastructure éducative pour réduire la surcharge des classes en milieu
                            rural.
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="#"
                                class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                                Lire l'article
                                <i data-lucide="chevron-right" class="ml-1 h-4 w-4"></i>
                            </a>
                            <button class="p-2 text-gray-400 hover:text-red-600 transition-colors">
                                <i data-lucide="heart" class="h-4 w-4"></i>
                            </button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Contact Section Enhanced -->
    <section id="contact"
        class="py-20 bg-gradient-to-r from-red-500 via-yellow-500 to-green-500 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white mb-12">
                <h2 class="text-4xl font-bold mb-4">Contactez le Ministère</h2>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Nous sommes à votre disposition pour vous accompagner dans toutes vos démarches éducatives
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white/15 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all">
                    <i data-lucide="phone" class="h-8 w-8 mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">Ligne Directe</h3>
                    <p class="opacity-90 mb-2">+226 25 32 46 70</p>
                    <p class="text-sm opacity-75">Lun-Ven: 8h-17h</p>
                </div>

                <div class="bg-white/15 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all">
                    <i data-lucide="mail" class="h-8 w-8 mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">Email Officiel</h3>
                    <p class="opacity-90 mb-2">contact@mena.gov.bf</p>
                    <p class="text-sm opacity-75">Réponse sous 24h</p>
                </div>

                <div class="bg-white/15 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all">
                    <i data-lucide="map-pin" class="h-8 w-8 mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">Siège Social</h3>
                    <p class="opacity-90 mb-2">Ouagadougou</p>
                    <p class="text-sm opacity-75">Burkina Faso</p>
                </div>

                <div class="bg-white/15 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all">
                    <i data-lucide="bell" class="h-8 w-8 mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">Urgences</h3>
                    <p class="opacity-90 mb-2">+226 70 XX XX XX</p>
                    <p class="text-sm opacity-75">24h/24 - 7j/7</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button
                    class="bg-white text-red-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all shadow-lg">
                    <i data-lucide="external-link" class="inline mr-2 h-5 w-5"></i>
                    Formulaire de Contact Complet
                </button>
            </div>
        </div>
    </section>
@endsection
