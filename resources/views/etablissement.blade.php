@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-r from-red-600 via-yellow-500 to-green-600 text-white shadow-lg mt-12">
    <div class="container mx-auto px-6 py-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="bg-white p-3 rounded-full shadow-lg">
                    <svg class="text-green-600 w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold">Établissements Éducatifs</h1>
                    <p class="text-red-100 text-sm md:text-base">Burkina Faso - Ministère de l'Éducation Nationale</p>
                </div>
            </div>
            
            <div class="flex gap-2 bg-white/20 rounded-lg p-1 backdrop-blur-sm">
                <button id="mapViewBtn" class="flex items-center gap-2 px-4 py-2 rounded-md transition-all duration-200 bg-white text-green-600 shadow-md transform scale-105">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                    </svg>
                    <span class="hidden sm:inline">Carte</span>
                </button>
                <button id="listViewBtn" class="flex items-center gap-2 px-4 py-2 rounded-md transition-all duration-200 text-white hover:bg-white/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="hidden sm:inline">Liste</span>
                </button>
            </div>
        </div>
    </div>
</section>

<main class="container mx-auto px-6 py-8">
    <!-- Statistics -->
    <div id="statistics" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Statistics will be populated by JavaScript -->
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-xl shadow-lg border border-green-200 p-6 mb-8">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <div class="bg-green-100 p-2 rounded-lg">
                    <svg class="text-green-600 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Filtres de recherche</h3>
            </div>
            <div class="flex gap-2">
                <button id="exportBtn" class="flex items-center gap-2 px-3 py-2 text-sm bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="hidden sm:inline">Exporter</span>
                </button>
                <button id="resetBtn" class="flex items-center gap-1 px-3 py-2 text-sm text-gray-600 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <span class="hidden sm:inline">Réinitialiser</span>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4">
            <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1">Recherche</label>
                <div class="relative">
                    <svg class="absolute left-3 top-3 text-gray-400 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" id="searchInput" placeholder="Nom, commune, province..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Région</label>
                <select id="regionSelect" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                    <option value="all">Toutes les régions</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Province</label>
                <select id="provinceSelect" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                    <option value="all">Toutes les provinces</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Type d'établissement</label>
                <select id="typeSelect" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                    <option value="all">Tous les types</option>
                    <option value="primaire">Primaire</option>
                    <option value="secondaire">Secondaire</option>
                    <option value="superieur">Supérieur</option>
                    <option value="professionnel">Professionnel</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                <select id="statusSelect" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                    <option value="all">Tous les statuts</option>
                    <option value="public">Public</option>
                    <option value="prive">Privé</option>
                    <option value="communautaire">Communautaire</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Content Area -->
    <div id="contentArea">
        <!-- Map and List views will be populated here -->
    </div>

    <!-- No Results Message -->
    <div id="noResults" class="bg-white rounded-xl shadow-lg border border-gray-200 p-12 text-center mt-8 hidden">
        <div class="bg-gray-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="text-gray-400 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Aucun établissement trouvé</h3>
        <p class="text-gray-600 mb-4">Modifiez vos critères de recherche pour voir plus de résultats</p>
        <button onclick="resetFilters()" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
            Réinitialiser les filtres
        </button>
    </div>
</main>

<!-- Footer -->
<footer class="bg-gradient-to-r from-red-600 via-yellow-500 to-green-600 text-white py-8 mt-12">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <p class="text-sm font-medium mb-2">© 2024 Ministère de l'Éducation Nationale et de l'Alphabétisation</p>
            <p class="text-xs text-red-100">Burkina Faso - Unité, Travail, Progrès</p>
        </div>
    </div>
</footer>
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .animate-ping {
        animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
    }
    @keyframes ping {
        75%, 100% {
            transform: scale(2);
            opacity: 0;
        }
    }
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: .5;
        }
    }
</style>

<script src="{{ asset('js/etablissement.js') }}"></script>

@endsection