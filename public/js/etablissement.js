tailwind.config = {
    theme: {
        extend: {
            colors: {
                'burkina-red': '#DC143C',
                'burkina-yellow': '#FFD700',
                'burkina-green': '#228B22'
            }
        }
    }
}
  
  // Data
  const regions = [
    'Boucle du Mouhoun', 'Cascades', 'Centre', 'Centre-Est', 'Centre-Nord',
    'Centre-Ouest', 'Centre-Sud', 'Est', 'Hauts-Bassins', 'Nord',
    'Plateau-Central', 'Sahel', 'Sud-Ouest'
];

const provinces = {
    'Boucle du Mouhoun': ['Balé', 'Banwa', 'Kossi', 'Mouhoun', 'Nayala', 'Sourou'],
    'Cascades': ['Comoé', 'Léraba'],
    'Centre': ['Kadiogo'],
    'Centre-Est': ['Boulgou', 'Koulpélogo', 'Kouritenga'],
    'Centre-Nord': ['Bam', 'Namentenga', 'Sanmatenga'],
    'Centre-Ouest': ['Boulkiemdé', 'Sanguié', 'Sissili', 'Ziro'],
    'Centre-Sud': ['Bazèga', 'Nahouri', 'Zoundwéogo'],
    'Est': ['Gnagna', 'Gourma', 'Kompienga', 'Tapoa'],
    'Hauts-Bassins': ['Houet', 'Kénédougou', 'Tuy'],
    'Nord': ['Loroum', 'Passoré', 'Yatenga', 'Zondoma'],
    'Plateau-Central': ['Ganzourgou', 'Kourwéogo', 'Oubritenga'],
    'Sahel': ['Oudalan', 'Séno', 'Soum', 'Yagha'],
    'Sud-Ouest': ['Bougouriba', 'Ioba', 'Noumbiel', 'Poni']
};

const establishments = [
    {
        id: '1',
        name: 'Université Joseph Ki-Zerbo',
        type: 'superieur',
        region: 'Centre',
        province: 'Kadiogo',
        commune: 'Ouagadougou',
        coordinates: { lat: 12.3714, lng: -1.5197 },
        status: 'public',
        effectifs: { total: 45000, filles: 18000, garcons: 27000 },
        formations: ['Lettres', 'Sciences', 'Droit', 'Économie', 'Médecine'],
        directeur: 'Pr. Rasmané Ouédraogo',
        telephone: '+226 25 30 70 64',
        email: 'rectorat@univ-ouaga.bf',
        dateCreation: '1974',
        infrastructure: {
            salles: 150,
            bibliotheque: true,
            laboratoire: true,
            cantine: true,
            internat: true
        }
    },
    {
        id: '2',
        name: 'Lycée Technique National',
        type: 'secondaire',
        region: 'Centre',
        province: 'Kadiogo',
        commune: 'Ouagadougou',
        coordinates: { lat: 12.3689, lng: -1.5270 },
        status: 'public',
        effectifs: { total: 2500, filles: 1100, garcons: 1400 },
        formations: ['Série C', 'Série D', 'Série F1', 'Série F2', 'Série F3'],
        directeur: 'M. Amadou Traoré',
        telephone: '+226 25 30 65 89',
        dateCreation: '1965',
        infrastructure: {
            salles: 45,
            bibliotheque: true,
            laboratoire: true,
            cantine: true,
            internat: false
        }
    },
    {
        id: '3',
        name: 'École Primaire Publique Tanghin',
        type: 'primaire',
        region: 'Centre',
        province: 'Kadiogo',
        commune: 'Ouagadougou',
        coordinates: { lat: 12.3456, lng: -1.5123 },
        status: 'public',
        effectifs: { total: 450, filles: 220, garcons: 230 },
        directeur: 'Mme Salamata Ouédraogo',
        telephone: '+226 25 30 78 45',
        dateCreation: '1980',
        infrastructure: {
            salles: 12,
            bibliotheque: false,
            laboratoire: false,
            cantine: true,
            internat: false
        }
    },
    {
        id: '4',
        name: 'Université Nazi Boni',
        type: 'superieur',
        region: 'Hauts-Bassins',
        province: 'Houet',
        commune: 'Bobo-Dioulasso',
        coordinates: { lat: 11.1781, lng: -4.2973 },
        status: 'public',
        effectifs: { total: 15000, filles: 6500, garcons: 8500 },
        formations: ['Agriculture', 'Ingénierie', 'Sciences de la Santé', 'Économie'],
        directeur: 'Pr. Mamadou Sawadogo',
        telephone: '+226 20 98 25 36',
        email: 'rectorat@univ-bobo.bf',
        dateCreation: '1995',
        infrastructure: {
            salles: 80,
            bibliotheque: true,
            laboratoire: true,
            cantine: true,
            internat: true
        }
    },
    {
        id: '5',
        name: 'CFPB - Centre de Formation Professionnelle',
        type: 'professionnel',
        region: 'Hauts-Bassins',
        province: 'Houet',
        commune: 'Bobo-Dioulasso',
        coordinates: { lat: 11.1823, lng: -4.2901 },
        status: 'public',
        effectifs: { total: 800, filles: 350, garcons: 450 },
        formations: ['Mécanique', 'Électricité', 'Informatique', 'Couture', 'Coiffure'],
        directeur: 'M. Boubacar Kaboré',
        telephone: '+226 20 97 15 78',
        dateCreation: '1988',
        infrastructure: {
            salles: 25,
            bibliotheque: true,
            laboratoire: true,
            cantine: true,
            internat: false
        }
    },
    {
        id: '6',
        name: 'Lycée Privé Sainte-Marie',
        type: 'secondaire',
        region: 'Centre',
        province: 'Kadiogo',
        commune: 'Ouagadougou',
        coordinates: { lat: 12.3598, lng: -1.5345 },
        status: 'prive',
        effectifs: { total: 1200, filles: 600, garcons: 600 },
        formations: ['Série A', 'Série B', 'Série C', 'Série D'],
        directeur: 'Sœur Marie-Claire Tapsoba',
        telephone: '+226 25 30 89 12',
        email: 'direction@sainte-marie.bf',
        dateCreation: '1952',
        infrastructure: {
            salles: 30,
            bibliotheque: true,
            laboratoire: true,
            cantine: true,
            internat: true
        }
    },
    {
        id: '7',
        name: 'École Primaire Communautaire de Kaya',
        type: 'primaire',
        region: 'Centre-Nord',
        province: 'Sanmatenga',
        commune: 'Kaya',
        coordinates: { lat: 13.0833, lng: -1.0833 },
        status: 'communautaire',
        effectifs: { total: 320, filles: 160, garcons: 160 },
        directeur: 'M. Issouf Sawadogo',
        telephone: '+226 24 45 60 78',
        dateCreation: '1995',
        infrastructure: {
            salles: 8,
            bibliotheque: false,
            laboratoire: false,
            cantine: true,
            internat: false
        }
    },
    {
        id: '8',
        name: 'Université Aube Nouvelle',
        type: 'superieur',
        region: 'Centre',
        province: 'Kadiogo',
        commune: 'Ouagadougou',
        coordinates: { lat: 12.3820, lng: -1.5089 },
        status: 'prive',
        effectifs: { total: 3500, filles: 1600, garcons: 1900 },
        formations: ['Informatique', 'Gestion', 'Communication', 'Ingénierie'],
        directeur: 'Dr. Abdoulaye Compaoré',
        telephone: '+226 25 30 45 67',
        email: 'info@aube-nouvelle.bf',
        dateCreation: '1999',
        infrastructure: {
            salles: 40,
            bibliotheque: true,
            laboratoire: true,
            cantine: true,
            internat: false
        }
    }
];

// State
let currentViewMode = 'map';
let selectedRegion = 'all';
let selectedProvince = 'all';
let selectedType = 'all';
let selectedStatus = 'all';
let searchQuery = '';
let selectedEstablishment = null;
let filteredEstablishments = establishments;

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    initializeFilters();
    initializeEventListeners();
    updateDisplay();
});

function initializeFilters() {
    // Populate region select
    const regionSelect = document.getElementById('regionSelect');
    regions.forEach(region => {
        const option = document.createElement('option');
        option.value = region;
        option.textContent = region;
        regionSelect.appendChild(option);
    });
}

function initializeEventListeners() {
    // View mode buttons
    document.getElementById('mapViewBtn').addEventListener('click', () => setViewMode('map'));
    document.getElementById('listViewBtn').addEventListener('click', () => setViewMode('list'));

    // Filter inputs
    document.getElementById('searchInput').addEventListener('input', (e) => {
        searchQuery = e.target.value;
        updateDisplay();
    });

    document.getElementById('regionSelect').addEventListener('change', (e) => {
        selectedRegion = e.target.value;
        updateProvinceOptions();
        selectedProvince = 'all';
        document.getElementById('provinceSelect').value = 'all';
        updateDisplay();
    });

    document.getElementById('provinceSelect').addEventListener('change', (e) => {
        selectedProvince = e.target.value;
        updateDisplay();
    });

    document.getElementById('typeSelect').addEventListener('change', (e) => {
        selectedType = e.target.value;
        updateDisplay();
    });

    document.getElementById('statusSelect').addEventListener('change', (e) => {
        selectedStatus = e.target.value;
        updateDisplay();
    });

    // Reset button
    document.getElementById('resetBtn').addEventListener('click', resetFilters);

    // Export button
    document.getElementById('exportBtn').addEventListener('click', exportData);
}

function setViewMode(mode) {
    currentViewMode = mode;
    
    // Update button styles
    const mapBtn = document.getElementById('mapViewBtn');
    const listBtn = document.getElementById('listViewBtn');
    
    if (mode === 'map') {
        mapBtn.className = 'flex items-center gap-2 px-4 py-2 rounded-md transition-all duration-200 bg-white text-green-600 shadow-md transform scale-105';
        listBtn.className = 'flex items-center gap-2 px-4 py-2 rounded-md transition-all duration-200 text-white hover:bg-white/20';
    } else {
        listBtn.className = 'flex items-center gap-2 px-4 py-2 rounded-md transition-all duration-200 bg-white text-green-600 shadow-md transform scale-105';
        mapBtn.className = 'flex items-center gap-2 px-4 py-2 rounded-md transition-all duration-200 text-white hover:bg-white/20';
    }
    
    updateDisplay();
}

function updateProvinceOptions() {
    const provinceSelect = document.getElementById('provinceSelect');
    provinceSelect.innerHTML = '<option value="all">Toutes les provinces</option>';
    
    if (selectedRegion !== 'all' && provinces[selectedRegion]) {
        provinces[selectedRegion].forEach(province => {
            const option = document.createElement('option');
            option.value = province;
            option.textContent = province;
            provinceSelect.appendChild(option);
        });
        provinceSelect.disabled = false;
    } else {
        provinceSelect.disabled = true;
    }
}

function filterEstablishments() {
    filteredEstablishments = establishments.filter(establishment => {
        const matchesRegion = selectedRegion === 'all' || establishment.region === selectedRegion;
        const matchesProvince = selectedProvince === 'all' || establishment.province === selectedProvince;
        const matchesType = selectedType === 'all' || establishment.type === selectedType;
        const matchesStatus = selectedStatus === 'all' || establishment.status === selectedStatus;
        const matchesSearch = searchQuery === '' || 
            establishment.name.toLowerCase().includes(searchQuery.toLowerCase()) ||
            establishment.commune.toLowerCase().includes(searchQuery.toLowerCase()) ||
            establishment.province.toLowerCase().includes(searchQuery.toLowerCase()) ||
            establishment.region.toLowerCase().includes(searchQuery.toLowerCase());

        return matchesRegion && matchesProvince && matchesType && matchesStatus && matchesSearch;
    });
}

function updateStatistics() {
    const totalEstablishments = filteredEstablishments.length;
    const totalStudents = filteredEstablishments.reduce((sum, est) => sum + est.effectifs.total, 0);
    const totalGirls = filteredEstablishments.reduce((sum, est) => sum + est.effectifs.filles, 0);
    const totalBoys = filteredEstablishments.reduce((sum, est) => sum + est.effectifs.garcons, 0);
    
    const statusStats = filteredEstablishments.reduce((acc, est) => {
        acc[est.status] = (acc[est.status] || 0) + 1;
        return acc;
    }, {});

    const girlsPercentage = totalStudents > 0 ? (totalGirls / totalStudents * 100).toFixed(1) : 0;

    document.getElementById('statistics').innerHTML = `
        <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-green-100 text-sm font-medium">Total Établissements</p>
                    <p class="text-3xl font-bold mt-1">${totalEstablishments}</p>
                    <p class="text-green-200 text-xs mt-1">${statusStats.public || 0} publics, ${statusStats.prive || 0} privés</p>
                </div>
                <div class="bg-white/20 p-3 rounded-full">
                    <svg class="text-green-100 w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-br from-red-500 to-red-600 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-red-100 text-sm font-medium">Total Étudiants</p>
                    <p class="text-3xl font-bold mt-1">${totalStudents.toLocaleString()}</p>
                    <p class="text-red-200 text-xs mt-1">${totalGirls.toLocaleString()} filles, ${totalBoys.toLocaleString()} garçons</p>
                </div>
                <div class="bg-white/20 p-3 rounded-full">
                    <svg class="text-red-100 w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-yellow-100 text-sm font-medium">Parité Filles</p>
                    <p class="text-3xl font-bold mt-1">${girlsPercentage}%</p>
                    <p class="text-yellow-200 text-xs mt-1">Objectif: 50%</p>
                </div>
                <div class="bg-white/20 p-3 rounded-full">
                    <svg class="text-yellow-100 w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-100 text-sm font-medium">Établissements Publics</p>
                    <p class="text-3xl font-bold mt-1">${statusStats.public || 0}</p>
                    <p class="text-purple-200 text-xs mt-1">${totalEstablishments > 0 ? ((statusStats.public || 0) / totalEstablishments * 100).toFixed(1) : 0}% du total</p>
                </div>
                <div class="bg-white/20 p-3 rounded-full">
                    <svg class="text-purple-100 w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
            </div>
        </div>
    `;
}

function updateDisplay() {
    filterEstablishments();
    updateStatistics();
    
    const contentArea = document.getElementById('contentArea');
    const noResults = document.getElementById('noResults');
    
    if (filteredEstablishments.length === 0) {
        contentArea.innerHTML = '';
        noResults.classList.remove('hidden');
        return;
    }
    
    noResults.classList.add('hidden');
    
    if (currentViewMode === 'map') {
        renderMapView();
    } else {
        renderListView();
    }
}

function renderMapView() {
    const contentArea = document.getElementById('contentArea');
    contentArea.innerHTML = `
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="order-2 lg:order-1">
                <div class="relative bg-gradient-to-br from-green-50 via-yellow-50 to-red-50 rounded-xl border-2 border-green-200 overflow-hidden shadow-lg">
                    <div class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2 shadow-md">
                        <h3 class="text-sm font-semibold text-gray-800 flex items-center gap-2">
                            <svg class="text-green-600 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Carte du Burkina Faso
                        </h3>
                        <p class="text-xs text-gray-600">${filteredEstablishments.length} établissement${filteredEstablishments.length > 1 ? 's' : ''}</p>
                    </div>
                    
                    <div class="w-full h-96 relative overflow-hidden">
                        <svg width="100%" height="100%" viewBox="0 0 500 400" class="select-none">
                            <defs>
                                <linearGradient id="countryGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#f0f9ff" />
                                    <stop offset="50%" stop-color="#e0f2fe" />
                                    <stop offset="100%" stop-color="#f0fdf4" />
                                </linearGradient>
                                <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="2" dy="2" stdDeviation="3" flood-opacity="0.3"/>
                                </filter>
                            </defs>
                            
                            <path d="M 50 150 L 120 130 L 180 120 L 250 110 L 320 115 L 380 125 L 420 140 L 440 160 L 430 190 L 410 220 L 380 240 L 340 250 L 280 260 L 220 265 L 160 260 L 100 250 L 70 230 L 50 200 Z" 
                                  fill="url(#countryGradient)" stroke="#16a34a" stroke-width="3" filter="url(#shadow)" />
                            
                            <g opacity="0.4">
                                <circle cx="200" cy="180" r="30" fill="#dc2626" opacity="0.2" />
                                <text x="200" y="185" text-anchor="middle" font-size="12" fill="#dc2626" font-weight="bold">Centre</text>
                                
                                <circle cx="120" cy="220" r="25" fill="#eab308" opacity="0.2" />
                                <text x="120" y="225" text-anchor="middle" font-size="10" fill="#eab308" font-weight="bold">Hauts-Bassins</text>
                                
                                <circle cx="200" cy="140" r="20" fill="#16a34a" opacity="0.2" />
                                <text x="200" y="145" text-anchor="middle" font-size="10" fill="#16a34a" font-weight="bold">Nord</text>
                                
                                <circle cx="320" cy="200" r="22" fill="#7c3aed" opacity="0.2" />
                                <text x="320" y="205" text-anchor="middle" font-size="10" fill="#7c3aed" font-weight="bold">Est</text>
                            </g>
                            
                            ${renderMapPoints()}
                        </svg>
                    </div>
                    
                    <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-sm p-4 rounded-lg shadow-lg border border-green-200">
                        <h4 class="font-semibold text-sm mb-3 text-gray-800 flex items-center gap-2">
                            <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                            Légende
                        </h4>
                        <div class="grid grid-cols-2 gap-3 text-xs">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 rounded-full bg-green-600 border-2 border-white shadow-sm"></div>
                                <span class="font-medium">Primaire</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 rounded-full bg-yellow-600 border-2 border-white shadow-sm"></div>
                                <span class="font-medium">Secondaire</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 rounded-full bg-red-600 border-2 border-white shadow-sm"></div>
                                <span class="font-medium">Supérieur</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 rounded-full bg-purple-600 border-2 border-white shadow-sm"></div>
                                <span class="font-medium">Professionnel</span>
                            </div>
                        </div>
                        <div class="mt-2 pt-2 border-t border-gray-200 text-xs text-gray-600">
                            Cliquez sur un point pour voir les détails
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div id="selectedEstablishment">
                    ${selectedEstablishment ? renderEstablishmentCard(selectedEstablishment, true) : `
                        <div class="bg-white rounded-xl shadow-lg border border-green-200 p-8 text-center">
                            <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="text-green-600 w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Sélectionnez un établissement</h3>
                            <p class="text-gray-600">Cliquez sur un point de la carte pour voir les détails de l'établissement</p>
                        </div>
                    `}
                </div>
            </div>
        </div>
    `;
}

function renderMapPoints() {
    return filteredEstablishments.map(establishment => {
        const x = ((establishment.coordinates.lng + 5.5) / 6) * 400 + 50;
        const y = ((15 - establishment.coordinates.lat) / 5) * 300 + 50;
        const isSelected = selectedEstablishment?.id === establishment.id;
        
        const getColor = () => {
            switch (establishment.type) {
                case 'primaire': return '#16a34a';
                case 'secondaire': return '#eab308';
                case 'superieur': return '#dc2626';
                case 'professionnel': return '#7c3aed';
                default: return '#6b7280';
            }
        };

        const color = getColor();
        
        return `
            <g>
                ${isSelected ? `<circle cx="${x}" cy="${y}" r="12" fill="none" stroke="${color}" stroke-width="2" opacity="0.5" class="animate-ping" />` : ''}
                <circle cx="${x}" cy="${y}" r="${isSelected ? 8 : 6}" fill="${color}" stroke="white" stroke-width="2" 
                        class="cursor-pointer transition-all duration-200 hover:r-8" 
                        onclick="selectEstablishment('${establishment.id}')" filter="url(#shadow)" />
                ${isSelected ? `
                    <rect x="${x - 60}" y="${y - 25}" width="120" height="16" fill="white" stroke="${color}" stroke-width="1" rx="8" opacity="0.95" filter="url(#shadow)" />
                    <text x="${x}" y="${y - 15}" text-anchor="middle" font-size="10" fill="${color}" font-weight="bold" class="pointer-events-none">
                        ${establishment.name.length > 15 ? establishment.name.substring(0, 15) + '...' : establishment.name}
                    </text>
                ` : ''}
            </g>
        `;
    }).join('');
}

function renderListView() {
    const contentArea = document.getElementById('contentArea');
    contentArea.innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            ${filteredEstablishments.map(establishment => 
                renderEstablishmentCard(establishment, selectedEstablishment?.id === establishment.id)
            ).join('')}
        </div>
    `;
}

function renderEstablishmentCard(establishment, isSelected) {
    const getTypeColor = (type) => {
        switch (type) {
            case 'primaire': return 'bg-green-100 text-green-800 border-green-200';
            case 'secondaire': return 'bg-yellow-100 text-yellow-800 border-yellow-200';
            case 'superieur': return 'bg-red-100 text-red-800 border-red-200';
            case 'professionnel': return 'bg-purple-100 text-purple-800 border-purple-200';
            default: return 'bg-gray-100 text-gray-800 border-gray-200';
        }
    };

    const getStatusColor = (status) => {
        switch (status) {
            case 'public': return 'bg-blue-100 text-blue-800 border-blue-200';
            case 'prive': return 'bg-orange-100 text-orange-800 border-orange-200';
            case 'communautaire': return 'bg-green-100 text-green-800 border-green-200';
            default: return 'bg-gray-100 text-gray-800 border-gray-200';
        }
    };

    const getTypeLabel = (type) => {
        switch (type) {
            case 'primaire': return 'Primaire';
            case 'secondaire': return 'Secondaire';
            case 'superieur': return 'Supérieur';
            case 'professionnel': return 'Professionnel';
            default: return type;
        }
    };

    const getStatusLabel = (status) => {
        switch (status) {
            case 'public': return 'Public';
            case 'prive': return 'Privé';
            case 'communautaire': return 'Communautaire';
            default: return status;
        }
    };

    const calculateInfrastructureScore = () => {
        const { infrastructure } = establishment;
        let score = 0;
        if (infrastructure.bibliotheque) score++;
        if (infrastructure.laboratoire) score++;
        if (infrastructure.cantine) score++;
        if (infrastructure.internat) score++;
        return score;
    };

    const infrastructureScore = calculateInfrastructureScore();

    return `
        <div onclick="selectEstablishment('${establishment.id}')" 
             class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer border-2 p-6 transform hover:-translate-y-1 ${
                 isSelected ? 'border-green-500 ring-4 ring-green-200 shadow-xl' : 'border-gray-200 hover:border-green-300'
             }">
            <div class="flex justify-between items-start mb-4">
                <div class="flex-1">
                    <div class="flex items-start gap-3 mb-3">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2 line-clamp-2 leading-tight">
                                ${establishment.name}
                            </h3>
                            <div class="flex gap-2 mb-2">
                                <span class="px-3 py-1 rounded-full text-xs font-medium border ${getTypeColor(establishment.type)}">
                                    ${getTypeLabel(establishment.type)}
                                </span>
                                <span class="px-3 py-1 rounded-full text-xs font-medium border ${getStatusColor(establishment.status)}">
                                    ${getStatusLabel(establishment.status)}
                                </span>
                            </div>
                        </div>
                        ${isSelected ? `
                            <div class="bg-green-100 p-2 rounded-full">
                                <svg class="text-green-600 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                        ` : ''}
                    </div>
                </div>
            </div>

            <div class="space-y-3">
                <div class="flex items-center gap-2 text-sm text-gray-600">
                    <svg class="text-green-600 w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="truncate">${establishment.commune}, ${establishment.province}</span>
                </div>

                <div class="flex items-center gap-2 text-sm text-gray-600">
                    <svg class="text-blue-600 w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                    <div class="flex flex-col">
                        <span class="font-medium">${establishment.effectifs.total.toLocaleString()} étudiants</span>
                        <span class="text-xs text-gray-500">
                            ${establishment.effectifs.filles} filles • ${establishment.effectifs.garcons} garçons
                        </span>
                    </div>
                </div>

                <div class="flex items-center gap-2 text-sm text-gray-600">
                    <svg class="text-purple-600 w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a2 2 0 100-4 2 2 0 000 4zm0 0v4a2 2 0 002 2h6a2 2 0 002-2v-4a2 2 0 00-2-2H10a2 2 0 00-2 2z"></path>
                    </svg>
                    <span>Créé en ${establishment.dateCreation}</span>
                </div>

                ${establishment.directeur ? `
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="text-orange-600 w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="truncate">${establishment.directeur}</span>
                    </div>
                ` : ''}

                <div class="flex flex-col gap-1">
                    ${establishment.telephone ? `
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <svg class="text-green-600 w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>${establishment.telephone}</span>
                        </div>
                    ` : ''}

                    ${establishment.email ? `
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <svg class="text-blue-600 w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="truncate">${establishment.email}</span>
                        </div>
                    ` : ''}
                </div>

                ${establishment.formations && establishment.formations.length > 0 ? `
                    <div class="mt-4">
                        <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                            <svg class="text-indigo-600 w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <span class="font-medium">Formations disponibles:</span>
                        </div>
                        <div class="flex flex-wrap gap-1">
                            ${establishment.formations.slice(0, 3).map(formation => 
                                `<span class="px-2 py-1 bg-indigo-50 text-indigo-700 rounded-md text-xs font-medium border border-indigo-200">${formation}</span>`
                            ).join('')}
                            ${establishment.formations.length > 3 ? 
                                `<span class="px-2 py-1 bg-gray-100 text-gray-700 rounded-md text-xs font-medium">+${establishment.formations.length - 3} autres</span>` 
                                : ''
                            }
                        </div>
                    </div>
                ` : ''}

                <div class="mt-4 pt-4 border-t border-gray-200">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <svg class="text-gray-600 w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span class="font-medium">Infrastructure</span>
                        </div>
                        <div class="flex items-center gap-1">
                            ${[...Array(4)].map((_, i) => 
                                `<div class="w-2 h-2 rounded-full ${i < infrastructureScore ? 'bg-green-500' : 'bg-gray-300'}"></div>`
                            ).join('')}
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-700">${establishment.infrastructure.salles}</span>
                            <span class="text-gray-600">salles</span>
                        </div>
                        <div class="flex items-center gap-2">
                            ${establishment.infrastructure.bibliotheque ? 
                                '<svg class="text-green-600 w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' :
                                '<svg class="text-red-600 w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
                            }
                            <span class="text-gray-600">Bibliothèque</span>
                        </div>
                        <div class="flex items-center gap-2">
                            ${establishment.infrastructure.laboratoire ? 
                                '<svg class="text-green-600 w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' :
                                '<svg class="text-red-600 w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
                            }
                            <span class="text-gray-600">Laboratoire</span>
                        </div>
                        <div class="flex items-center gap-2">
                            ${establishment.infrastructure.cantine ? 
                                '<svg class="text-green-600 w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' :
                                '<svg class="text-red-600 w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
                            }
                            <span class="text-gray-600">Cantine</span>
                        </div>
                        <div class="flex items-center gap-2">
                            ${establishment.infrastructure.internat ? 
                                '<svg class="text-green-600 w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' :
                                '<svg class="text-red-600 w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
                            }
                            <span class="text-gray-600">Internat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function selectEstablishment(id) {
    selectedEstablishment = establishments.find(est => est.id === id);
    updateDisplay();
}

function resetFilters() {
    selectedRegion = 'all';
    selectedProvince = 'all';
    selectedType = 'all';
    selectedStatus = 'all';
    searchQuery = '';
    selectedEstablishment = null;
    
    document.getElementById('searchInput').value = '';
    document.getElementById('regionSelect').value = 'all';
    document.getElementById('provinceSelect').value = 'all';
    document.getElementById('typeSelect').value = 'all';
    document.getElementById('statusSelect').value = 'all';
    
    updateProvinceOptions();
    updateDisplay();
}

function exportData() {
    const csvContent = [
        ['Nom', 'Type', 'Région', 'Province', 'Commune', 'Statut', 'Effectifs', 'Directeur', 'Téléphone', 'Email'],
        ...filteredEstablishments.map(establishment => [
            establishment.name,
            establishment.type,
            establishment.region,
            establishment.province,
            establishment.commune,
            establishment.status,
            establishment.effectifs.total.toString(),
            establishment.directeur || '',
            establishment.telephone || '',
            establishment.email || ''
        ])
    ].map(row => row.join(',')).join('\n');
    
    const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    const url = URL.createObjectURL(blob);
    link.setAttribute('href', url);
    link.setAttribute('download', 'etablissements-burkina-faso.csv');
    link.style.visibility = 'hidden';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}