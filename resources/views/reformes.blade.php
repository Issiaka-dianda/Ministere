@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/reformes.css') }}">
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 fade-in mt-12">
        <!-- Page Title -->
        <div class="text-center mb-12 fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Textes Officiels et Réformes</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Accédez aux documents officiels, lois, décrets et réformes du système éducatif burkinabé. Tous les textes sont disponibles en téléchargement gratuit.</p>
        </div>

        <!-- Search and Filters -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8 fade-in">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Search Bar -->
                <div class="flex-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Rechercher dans les documents officiels..."
                        class="search-input w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-burkina-green focus:outline-none text-gray-900 placeholder-gray-500"
                    />
                </div>

                <!-- Category Filter -->
                <div class="relative">
                    <select id="categoryFilter" class="appearance-none bg-white border-2 border-gray-200 rounded-lg px-4 py-3 pr-10 focus:border-burkina-green focus:outline-none text-gray-900 min-w-48">
                        <option value="all">Toutes les catégories</option>
                        <option value="Lois">Lois</option>
                        <option value="Décrets">Décrets</option>
                        <option value="Réformes pédagogiques">Réformes pédagogiques</option>
                        <option value="Référentiels">Référentiels</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Sort -->
                <div class="relative">
                    <select id="sortFilter" class="appearance-none bg-white border-2 border-gray-200 rounded-lg px-4 py-3 pr-10 focus:border-burkina-green focus:outline-none text-gray-900 min-w-48">
                        <option value="date">Trier par date</option>
                        <option value="name">Trier par nom</option>
                        <option value="downloads">Trier par téléchargements</option>
                        <option value="category">Trier par catégorie</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- View Mode Toggle -->
                <div class="flex border-2 border-gray-200 rounded-lg overflow-hidden">
                    <button id="gridView" class="px-4 py-3 bg-burkina-green text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                    </button>
                    <button id="listView" class="px-4 py-3 bg-white text-gray-700 hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="stats-card stats-card-green rounded-xl shadow-lg p-6 fade-in">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Total Documents</p>
                        <p class="text-3xl font-bold text-burkina-green" id="totalDocs">12</p>
                    </div>
                    <div class="w-12 h-12 bg-burkina-green bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-burkina-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stats-card stats-card-red rounded-xl shadow-lg p-6 fade-in">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Téléchargements</p>
                        <p class="text-3xl font-bold text-burkina-red" id="totalDownloads">8,315</p>
                    </div>
                    <div class="w-12 h-12 bg-burkina-red bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-burkina-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stats-card stats-card-yellow rounded-xl shadow-lg p-6 fade-in">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Catégories</p>
                        <p class="text-3xl font-bold text-yellow-600" id="totalCategories">4</p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-500 bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stats-card stats-card-gray rounded-xl shadow-lg p-6 fade-in">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Résultats</p>
                        <p class="text-3xl font-bold text-gray-700" id="filteredCount">12</p>
                    </div>
                    <div class="w-12 h-12 bg-gray-500 bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loading Indicator -->
        <div id="loadingIndicator" class="loading text-center py-8">
            <div class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-burkina-green">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Chargement des documents...
            </div>
        </div>

        <!-- Documents Grid -->
        <div id="documentsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Documents will be populated by JavaScript -->
        </div>

        <!-- Documents List -->
        <div id="documentsList" class="hidden bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="divide-y divide-gray-200" id="documentsListContent">
                <!-- Documents will be populated by JavaScript -->
            </div>
        </div>

        <!-- Empty State -->
        <div id="emptyState" class="hidden text-center py-16">
            <div class="max-w-md mx-auto">
                <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">Aucun document trouvé</h3>
                <p class="text-gray-600 mb-6">Essayez de modifier vos critères de recherche ou de filtrage</p>
                <button onclick="resetFilters()" class="btn-primary text-white px-6 py-3 rounded-lg font-medium">
                    Réinitialiser les filtres
                </button>
            </div>
        </div>

        <!-- Pagination -->
        <div id="pagination" class="flex justify-center mt-12">
            <nav class="flex items-center space-x-2">
                <button id="prevPage" class="px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Précédent
                </button>
                <div id="pageNumbers" class="flex space-x-1">
                    <!-- Page numbers will be populated by JavaScript -->
                </div>
                <button id="nextPage" class="px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Suivant
                </button>
            </nav>
        </div>
    </main>


    <script src="{{ asset('js/reformes.js') }}"></script>
@endsection