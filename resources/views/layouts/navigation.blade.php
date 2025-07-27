    <!-- Header -->
    <header id="header"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white shadow-sm border-b-2 border-yellow-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-4">
                    <div class="bg-gradient-to-r from-red-500 via-yellow-500 to-green-500 p-2 rounded-lg shadow-md">
                        <i data-lucide="book-open" class="h-8 w-8 text-white"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">MENA</h1>
                        <p class="text-xs text-gray-600">Ministère de l'Éducation Nationale</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    @php
                        $currentRoute = Request::path() === '/' ? 'home' : Request::path();
                    @endphp

                    <a href="/" class="relative group px-2 py-1 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'home' ? 'text-red-600' : '' }}">
                        Accueil
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full {{ $currentRoute === 'home' ? 'w-full' : '' }}"></span>
                    </a>

                    <a href="{{route('a-propos')}}" class="relative group px-2 py-1 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'a-propos' ? 'text-red-600' : '' }}">
                        À propos
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full {{ $currentRoute === 'a-propos' ? 'w-full' : '' }}"></span>
                    </a>

                    <a href="{{route('etablissement')}}" class="relative group px-2 py-1 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'etablissement' ? 'text-red-600' : '' }}">
                        Établissements
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full {{ $currentRoute === 'etablissement' ? 'w-full' : '' }}"></span>
                    </a>

                    <a href="{{route('reformes')}}" class="relative group px-2 py-1 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'reformes' ? 'text-red-600' : '' }}">
                        Textes et réformes
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full {{ $currentRoute === 'reformes' ? 'w-full' : '' }}"></span>
                    </a>

                    <a href="{{route('faq')}}" class="relative group px-2 py-1 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'faq' ? 'text-red-600' : '' }}">
                        FAQ
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full {{ $currentRoute === 'faq' ? 'w-full' : '' }}"></span>
                    </a>

                    <a href="{{route('actualite')}}" class="relative group px-2 py-1 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'actualite' ? 'text-red-600' : '' }}">
                        Actualités
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full {{ $currentRoute === 'actualite' ? 'w-full' : '' }}"></span>
                    </a>

                    <a href="{{route('contacte')}}" class="relative group px-2 py-1 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'contacte' ? 'text-red-600' : '' }}">
                        Contact
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full {{ $currentRoute === 'contacte' ? 'w-full' : '' }}"></span>
                    </a>
                    <button class="relative p-2 text-gray-700 hover:text-red-600 transition-colors">
                        <i data-lucide="bell" class="h-5 w-5"></i>
                        <span class="absolute -top-1 -right-1 h-3 w-3 bg-red-500 rounded-full"></span>
                    </button>
                </nav>

                <!-- Mobile menu button -->
                <button id="mobile-menu-button"
                    class="md:hidden p-2 rounded-md text-gray-700 hover:text-red-600 hover:bg-gray-100">
                    <i data-lucide="menu" class="h-6 w-6"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 py-4 bg-white">
                <div class="mb-4 px-3">
                    <div class="relative">
                        <i data-lucide="search"
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400"></i>
                        <input type="text" placeholder="Rechercher..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500" />
                    </div>
                </div>
                <nav class="flex flex-col space-y-2">
                    <a href="/"
                        class="block px-3 py-2 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'home' ? 'text-red-600' : '' }}">
                        <span class="relative">
                            Accueil
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-red-600 transform scale-x-0 transition-transform duration-300 {{ $currentRoute === 'home' ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
                        </span>
                    </a>

                    <a href="{{route('a-propos')}}"
                        class="block px-3 py-2 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'a-propos' ? 'text-red-600' : '' }}">
                        <span class="relative">
                            À propos
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-red-600 transform scale-x-0 transition-transform duration-300 {{ $currentRoute === 'a-propos' ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
                        </span>
                    </a>

                    <a href="{{route('etablissement')}}"
                        class="block px-3 py-2 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'etablissement' ? 'text-red-600' : '' }}">
                        <span class="relative">
                            Établissements
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-red-600 transform scale-x-0 transition-transform duration-300 {{ $currentRoute === 'etablissement' ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
                        </span>
                    </a>

                    <a href="{{route('reformes')}}"
                        class="block px-3 py-2 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'reformes' ? 'text-red-600' : '' }}">
                        <span class="relative">
                            Textes et réformes
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-red-600 transform scale-x-0 transition-transform duration-300 {{ $currentRoute === 'reformes' ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
                        </span>
                    </a>

                    <a href="{{route('faq')}}"
                        class="block px-3 py-2 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'faq' ? 'text-red-600' : '' }}">
                        <span class="relative">
                            FAQ
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-red-600 transform scale-x-0 transition-transform duration-300 {{ $currentRoute === 'faq' ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
                        </span>
                    </a>

                    <a href="{{route('actualite')}}"
                        class="block px-3 py-2 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'actualite' ? 'text-red-600' : '' }}">
                        <span class="relative">
                            Actualités
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-red-600 transform scale-x-0 transition-transform duration-300 {{ $currentRoute === 'actualite' ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
                        </span>
                    </a>

                    <a href="{{route('contacte')}}"
                        class="block px-3 py-2 text-gray-700 hover:text-red-600 font-medium transition-colors duration-300 {{ $currentRoute === 'contacte' ? 'text-red-600' : '' }}">
                        <span class="relative">
                            Contact
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-red-600 transform scale-x-0 transition-transform duration-300 {{ $currentRoute === 'contacte' ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
                        </span>
                    </a>
                </nav>
            </div>
        </div>
    </header>
