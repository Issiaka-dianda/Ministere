@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-r from-burkina-red via-burkina-yellow to-burkina-green text-white py-8 shadow-lg mt-12">
    <div class="max-w-4xl mx-auto px-4">
        <div class="flex items-center justify-center mb-4">
            <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6h-5.6z"/>
            </svg>
            <h1 class="text-3xl md:text-4xl font-bold text-center">
                FAQ Éducation Burkina Faso
            </h1>
        </div>
        <p class="text-center text-lg opacity-90">
            Foire aux questions sur l'éducation nationale
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 py-8">
    <!-- Search and Filter -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
        <!-- Search Bar -->
        <div class="relative max-w-md mx-auto mb-8">
            <div class="relative">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input
                    type="text"
                    id="searchInput"
                    placeholder="Rechercher dans la FAQ..."
                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-burkina-green focus:border-burkina-green transition-colors"
                />
            </div>
        </div>

        <!-- Category Filter -->
        <div class="flex flex-wrap gap-2 mb-6 justify-center" id="categoryFilter">
            <button data-category="all" class="category-btn flex items-center space-x-2 px-4 py-2 rounded-full transition-colors bg-burkina-green text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                </svg>
                <span class="font-medium">Toutes</span>
            </button>
            <button data-category="bourses" class="category-btn flex items-center space-x-2 px-4 py-2 rounded-full transition-colors bg-white text-gray-700 hover:bg-gray-100 border border-gray-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                </svg>
                <span class="font-medium">Bourses</span>
            </button>
            <button data-category="examens" class="category-btn flex items-center space-x-2 px-4 py-2 rounded-full transition-colors bg-white text-gray-700 hover:bg-gray-100 border border-gray-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                    <polyline points="14,2 14,8 20,8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                    <polyline points="10,9 9,9 8,9"/>
                </svg>
                <span class="font-medium">Examens</span>
            </button>
            <button data-category="inscriptions" class="category-btn flex items-center space-x-2 px-4 py-2 rounded-full transition-colors bg-white text-gray-700 hover:bg-gray-100 border border-gray-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="8.5" cy="7" r="4"/>
                    <line x1="20" y1="8" x2="20" y2="14"/>
                    <line x1="23" y1="11" x2="17" y2="11"/>
                </svg>
                <span class="font-medium">Inscriptions</span>
            </button>
            <button data-category="orientations" class="category-btn flex items-center space-x-2 px-4 py-2 rounded-full transition-colors bg-white text-gray-700 hover:bg-gray-100 border border-gray-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <polygon points="16.24,7.76 14.12,14.12 7.76,16.24 9.88,9.88 16.24,7.76"/>
                </svg>
                <span class="font-medium">Orientations</span>
            </button>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center mb-6">
            <svg class="w-6 h-6 text-burkina-green mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
            </svg>
            <h2 class="text-2xl font-bold text-gray-800">
                Questions fréquentes
            </h2>
        </div>

        <div id="faqContainer" class="space-y-4">
            <!-- FAQ items will be dynamically inserted here -->
        </div>

        <div id="noResults" class="text-center py-8 hidden">
            <p class="text-gray-500 text-lg">
                Aucune question trouvée
            </p>
            <p class="text-gray-400 mt-2">
                Essayez avec d'autres mots-clés ou changez de catégorie
            </p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-white rounded-lg shadow-sm p-6 mt-8">
        <h3 class="text-xl font-bold text-gray-800 mb-4">
            Vous ne trouvez pas votre réponse ?
        </h3>
        <div class="grid md:grid-cols-2 gap-4">
            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                <svg class="w-5 h-5 text-burkina-green" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                </svg>
                <div>
                    <p class="font-medium text-gray-800">Téléphone</p>
                    <p class="text-gray-600">+226 25 33 55 09</p>
                </div>
            </div>
            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                <svg class="w-5 h-5 text-burkina-green" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                <div>
                    <p class="font-medium text-gray-800">Email</p>
                    <p class="text-gray-600">info@education.gov.bf</p>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{ asset('js/faq.js') }}"></script>

<script>
    
</script>
@endsection