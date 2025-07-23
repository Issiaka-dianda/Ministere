@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-white py-12 shadow-lg mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Actualités Éducatives</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Suivez les dernières nouvelles, réformes et événements du système éducatif burkinabé
        </p>
    </div>
</section>

<!-- Filters -->
<section class="bg-gray-100 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-4 items-center justify-between">
            <div class="flex flex-wrap gap-2">
                <button onclick="filterNews('tous')" class="filter-btn active bg-burkina-green text-white px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                    Tous
                </button>
                <button onclick="filterNews('reforme')" class="filter-btn bg-white text-gray-700 px-4 py-2 rounded-full font-medium hover:bg-burkina-red hover:text-white transition-colors">
                    Réformes
                </button>
                <button onclick="filterNews('evenement')" class="filter-btn bg-white text-gray-700 px-4 py-2 rounded-full font-medium hover:bg-burkina-yellow hover:text-white transition-colors">
                    Événements
                </button>
                <button onclick="filterNews('communique')" class="filter-btn bg-white text-gray-700 px-4 py-2 rounded-full font-medium hover:bg-burkina-green hover:text-white transition-colors">
                    Communiqués
                </button>
                <button onclick="filterNews('nouvelle')" class="filter-btn bg-white text-gray-700 px-4 py-2 rounded-full font-medium hover:bg-burkina-red hover:text-white transition-colors">
                    Nouvelles
                </button>
            </div>
            <div class="flex items-center space-x-4">
                <label class="text-sm font-medium text-gray-700">Trier par:</label>
                <select onchange="sortNews(this.value)" class="border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-burkina-green focus:border-transparent">
                    <option value="date-desc">Plus récent</option>
                    <option value="date-asc">Plus ancien</option>
                    <option value="title">Titre A-Z</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- News Grid -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="news-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- News Card 1 -->
            <article class="news-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-type="reforme" data-date="2024-01-15">
                <div class="aspect-w-16 aspect-h-9 bg-burkina-green">
                    <img src="https://images.pexels.com/photos/5427674/pexels-photo-5427674.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Réforme curriculaire" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-burkina-red text-white px-3 py-1 rounded-full text-sm font-medium">Réforme</span>
                        <span class="text-gray-500 text-sm">15 Jan 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-burkina-green transition-colors">
                        <a href="#" class="news-title">Nouvelle réforme curriculaire pour l'enseignement primaire</a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Le ministère annonce une révision complète des programmes d'enseignement primaire pour mieux adapter l'éducation aux défis contemporains...
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-burkina-green font-medium hover:text-burkina-red transition-colors">
                            Lire la suite →
                        </a>
                        <div class="flex items-center space-x-2">
                            <i data-lucide="clock" class="w-4 h-4 text-gray-400"></i>
                            <span class="text-sm text-gray-500">5 min</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- News Card 2 -->
            <article class="news-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-type="evenement" data-date="2024-01-12">
                <div class="aspect-w-16 aspect-h-9 bg-burkina-yellow">
                    <img src="https://images.pexels.com/photos/8197543/pexels-photo-8197543.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Forum éducatif" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-burkina-yellow text-white px-3 py-1 rounded-full text-sm font-medium">Événement</span>
                        <span class="text-gray-500 text-sm">12 Jan 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-burkina-green transition-colors">
                        <a href="#" class="news-title">Forum national sur l'éducation numérique</a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Un forum de trois jours réunissant experts, enseignants et décideurs pour discuter de l'intégration du numérique dans l'éducation...
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-burkina-green font-medium hover:text-burkina-red transition-colors">
                            Lire la suite →
                        </a>
                        <div class="flex items-center space-x-2">
                            <i data-lucide="clock" class="w-4 h-4 text-gray-400"></i>
                            <span class="text-sm text-gray-500">3 min</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- News Card 3 -->
            <article class="news-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-type="communique" data-date="2024-01-10">
                <div class="aspect-w-16 aspect-h-9 bg-burkina-green">
                    <img src="https://images.pexels.com/photos/5428010/pexels-photo-5428010.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Communiqué officiel" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-burkina-green text-white px-3 py-1 rounded-full text-sm font-medium">Communiqué</span>
                        <span class="text-gray-500 text-sm">10 Jan 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-burkina-green transition-colors">
                        <a href="#" class="news-title">Nouvelle politique de formation des enseignants</a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Le ministère annonce un nouveau programme de formation continue pour améliorer la qualité de l'enseignement dans le pays...
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-burkina-green font-medium hover:text-burkina-red transition-colors">
                            Lire la suite →
                        </a>
                        <div class="flex items-center space-x-2">
                            <i data-lucide="clock" class="w-4 h-4 text-gray-400"></i>
                            <span class="text-sm text-gray-500">4 min</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- News Card 4 -->
            <article class="news-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-type="nouvelle" data-date="2024-01-08">
                <div class="aspect-w-16 aspect-h-9 bg-burkina-red">
                    <img src="https://images.pexels.com/photos/5427658/pexels-photo-5427658.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Infrastructures scolaires" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-burkina-red text-white px-3 py-1 rounded-full text-sm font-medium">Nouvelle</span>
                        <span class="text-gray-500 text-sm">8 Jan 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-burkina-green transition-colors">
                        <a href="#" class="news-title">Construction de 200 nouvelles salles de classe</a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Un projet d'envergure visant à améliorer l'accès à l'éducation dans les zones rurales avec la construction de nouvelles infrastructures...
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-burkina-green font-medium hover:text-burkina-red transition-colors">
                            Lire la suite →
                        </a>
                        <div class="flex items-center space-x-2">
                            <i data-lucide="clock" class="w-4 h-4 text-gray-400"></i>
                            <span class="text-sm text-gray-500">6 min</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- News Card 5 -->
            <article class="news-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-type="reforme" data-date="2024-01-05">
                <div class="aspect-w-16 aspect-h-9 bg-burkina-yellow">
                    <img src="https://images.pexels.com/photos/5427646/pexels-photo-5427646.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Système d'évaluation" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-burkina-red text-white px-3 py-1 rounded-full text-sm font-medium">Réforme</span>
                        <span class="text-gray-500 text-sm">5 Jan 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-burkina-green transition-colors">
                        <a href="#" class="news-title">Réforme du système d'évaluation scolaire</a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Une nouvelle approche d'évaluation privilégiant l'évaluation continue et les compétences pratiques sera mise en place...
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-burkina-green font-medium hover:text-burkina-red transition-colors">
                            Lire la suite →
                        </a>
                        <div class="flex items-center space-x-2">
                            <i data-lucide="clock" class="w-4 h-4 text-gray-400"></i>
                            <span class="text-sm text-gray-500">7 min</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- News Card 6 -->
            <article class="news-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-type="evenement" data-date="2024-01-03">
                <div class="aspect-w-16 aspect-h-9 bg-burkina-green">
                    <img src="https://images.pexels.com/photos/5427965/pexels-photo-5427965.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Concours national" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-burkina-yellow text-white px-3 py-1 rounded-full text-sm font-medium">Événement</span>
                        <span class="text-gray-500 text-sm">3 Jan 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-burkina-green transition-colors">
                        <a href="#" class="news-title">Concours national d'innovation pédagogique</a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Lancement du premier concours national récompensant les innovations pédagogiques des enseignants burkinabés...
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-burkina-green font-medium hover:text-burkina-red transition-colors">
                            Lire la suite →
                        </a>
                        <div class="flex items-center space-x-2">
                            <i data-lucide="clock" class="w-4 h-4 text-gray-400"></i>
                            <span class="text-sm text-gray-500">5 min</span>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-burkina-green text-white px-8 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105">
                Charger plus d'actualités
            </button>
        </div>
    </div>
</section>



<script src="{{ asset('js/actualite.js') }}"></script>

@endsection