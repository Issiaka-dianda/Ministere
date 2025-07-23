
// Sample documents data
const documents = [
    {
        id: '1',
        title: 'Loi d\'orientation de l\'éducation nationale',
        category: 'Lois',
        type: 'pdf',
        date: '2024-01-15',
        description: 'Loi fondamentale définissant les orientations générales du système éducatif burkinabé et les principes directeurs de l\'enseignement.',
        size: '2.5 MB',
        downloads: 1250,
        author: 'Ministère de l\'Éducation Nationale',
        tags: ['éducation', 'loi', 'orientation', 'système éducatif']
    },
    {
        id: '2',
        title: 'Décret portant organisation des examens scolaires',
        category: 'Décrets',
        type: 'pdf',
        date: '2024-01-10',
        description: 'Modalités d\'organisation et de déroulement des examens scolaires, conditions d\'admission et critères d\'évaluation.',
        size: '1.8 MB',
        downloads: 890,
        author: 'Direction Générale des Examens et Concours',
        tags: ['examens', 'décret', 'organisation', 'évaluation']
    },
    {
        id: '3',
        title: 'Réforme des programmes d\'enseignement primaire',
        category: 'Réformes pédagogiques',
        type: 'docx',
        date: '2024-01-08',
        description: 'Nouveau référentiel des programmes d\'enseignement au niveau primaire avec approche par compétences.',
        size: '3.2 MB',
        downloads: 2100,
        author: 'Direction de l\'Enseignement Primaire',
        tags: ['primaire', 'programmes', 'réforme', 'compétences']
    },
    {
        id: '4',
        title: 'Référentiel de compétences des enseignants',
        category: 'Référentiels',
        type: 'pdf',
        date: '2024-01-05',
        description: 'Référentiel définissant les compétences professionnelles attendues des enseignants du système éducatif.',
        size: '2.1 MB',
        downloads: 1680,
        author: 'Direction de la Formation Initiale et Continue',
        tags: ['compétences', 'enseignants', 'référentiel', 'formation']
    },
    {
        id: '5',
        title: 'Décret sur la scolarité obligatoire',
        category: 'Décrets',
        type: 'pdf',
        date: '2024-01-02',
        description: 'Dispositions relatives à la scolarité obligatoire, âge scolaire et mesures d\'accompagnement des familles.',
        size: '1.5 MB',
        downloads: 975,
        author: 'Cabinet du Ministre',
        tags: ['scolarité', 'obligatoire', 'décret', 'accompagnement']
    },
    {
        id: '6',
        title: 'Réforme de l\'évaluation continue au secondaire',
        category: 'Réformes pédagogiques',
        type: 'doc',
        date: '2023-12-20',
        description: 'Nouvelles modalités d\'évaluation continue dans l\'enseignement secondaire général et technique.',
        size: '2.8 MB',
        downloads: 1420,
        author: 'Direction de l\'Enseignement Secondaire',
        tags: ['évaluation', 'continue', 'secondaire', 'modalités']
    },
    {
        id: '7',
        title: 'Loi sur l\'enseignement technique et professionnel',
        category: 'Lois',
        type: 'pdf',
        date: '2023-12-15',
        description: 'Cadre juridique de l\'enseignement technique et de la formation professionnelle au Burkina Faso.',
        size: '3.1 MB',
        downloads: 1150,
        author: 'Ministère de l\'Éducation Nationale',
        tags: ['technique', 'professionnel', 'loi', 'formation']
    },
    {
        id: '8',
        title: 'Référentiel des établissements scolaires',
        category: 'Référentiels',
        type: 'pdf',
        date: '2023-12-10',
        description: 'Standards et critères de qualité pour les établissements d\'enseignement public et privé.',
        size: '2.7 MB',
        downloads: 820,
        author: 'Inspection Générale de l\'Éducation',
        tags: ['établissements', 'standards', 'qualité', 'critères']
    },
    {
        id: '9',
        title: 'Décret sur l\'inclusion scolaire',
        category: 'Décrets',
        type: 'pdf',
        date: '2023-12-05',
        description: 'Mesures pour l\'inclusion des enfants à besoins éducatifs spéciaux dans le système éducatif ordinaire.',
        size: '1.9 MB',
        downloads: 650,
        author: 'Direction de l\'Éducation Inclusive',
        tags: ['inclusion', 'besoins spéciaux', 'décret', 'accessibilité']
    },
    {
        id: '10',
        title: 'Réforme de la formation des enseignants',
        category: 'Réformes pédagogiques',
        type: 'docx',
        date: '2023-11-28',
        description: 'Nouveau dispositif de formation initiale et continue des enseignants avec renforcement des compétences.',
        size: '3.5 MB',
        downloads: 1890,
        author: 'École Normale Supérieure',
        tags: ['formation', 'enseignants', 'réforme', 'compétences']
    },
    {
        id: '11',
        title: 'Référentiel d\'évaluation des apprentissages',
        category: 'Référentiels',
        type: 'pdf',
        date: '2023-11-20',
        description: 'Guide méthodologique pour l\'évaluation des apprentissages dans tous les cycles d\'enseignement.',
        size: '2.4 MB',
        downloads: 1320,
        author: 'Centre National des Manuels et Fournitures Scolaires',
        tags: ['évaluation', 'apprentissages', 'méthodologie', 'guide']
    },
    {
        id: '12',
        title: 'Loi sur la gratuité de l\'enseignement de base',
        category: 'Lois',
        type: 'pdf',
        date: '2023-11-15',
        description: 'Dispositions légales garantissant la gratuité de l\'enseignement de base et les modalités de mise en œuvre.',
        size: '2.0 MB',
        downloads: 2250,
        author: 'Assemblée Nationale',
        tags: ['gratuité', 'enseignement de base', 'loi', 'accès']
    }
];

// Global variables
let currentPage = 1;
const itemsPerPage = 9;
let filteredDocuments = [...documents];
let currentViewMode = 'grid';

// Initialize the page
document.addEventListener('DOMContentLoaded', function() {
    updateStatistics();
    renderDocuments();
    setupEventListeners();
});

// Setup event listeners
function setupEventListeners() {
    document.getElementById('searchInput').addEventListener('input', debounce(filterDocuments, 300));
    document.getElementById('categoryFilter').addEventListener('change', filterDocuments);
    document.getElementById('sortFilter').addEventListener('change', filterDocuments);
    document.getElementById('gridView').addEventListener('click', () => setViewMode('grid'));
    document.getElementById('listView').addEventListener('click', () => setViewMode('list'));
    document.getElementById('prevPage').addEventListener('click', () => changePage(currentPage - 1));
    document.getElementById('nextPage').addEventListener('click', () => changePage(currentPage + 1));
}

// Debounce function for search
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Filter documents based on search and filters
function filterDocuments() {
    showLoading();
    
    setTimeout(() => {
        const searchQuery = document.getElementById('searchInput').value.toLowerCase();
        const selectedCategory = document.getElementById('categoryFilter').value;
        const sortBy = document.getElementById('sortFilter').value;

        filteredDocuments = documents.filter(doc => {
            const matchesSearch = doc.title.toLowerCase().includes(searchQuery) ||
                                 doc.description.toLowerCase().includes(searchQuery) ||
                                 doc.author.toLowerCase().includes(searchQuery) ||
                                 doc.tags.some(tag => tag.toLowerCase().includes(searchQuery));
            
            const matchesCategory = selectedCategory === 'all' || doc.category === selectedCategory;
            
            return matchesSearch && matchesCategory;
        });

        // Sort documents
        filteredDocuments.sort((a, b) => {
            switch (sortBy) {
                case 'date':
                    return new Date(b.date) - new Date(a.date);
                case 'name':
                    return a.title.localeCompare(b.title, 'fr');
                case 'downloads':
                    return b.downloads - a.downloads;
                case 'category':
                    return a.category.localeCompare(b.category, 'fr');
                default:
                    return 0;
            }
        });

        currentPage = 1;
        updateStatistics();
        renderDocuments();
        hideLoading();
    }, 500);
}

// Update statistics
function updateStatistics() {
    document.getElementById('totalDocs').textContent = documents.length;
    document.getElementById('totalDownloads').textContent = documents.reduce((sum, doc) => sum + doc.downloads, 0).toLocaleString('fr-FR');
    document.getElementById('totalCategories').textContent = [...new Set(documents.map(doc => doc.category))].length;
    document.getElementById('filteredCount').textContent = filteredDocuments.length;
}

// Set view mode
function setViewMode(mode) {
    currentViewMode = mode;
    const gridBtn = document.getElementById('gridView');
    const listBtn = document.getElementById('listView');
    const gridView = document.getElementById('documentsGrid');
    const listView = document.getElementById('documentsList');

    if (mode === 'grid') {
        gridBtn.className = 'px-4 py-3 bg-burkina-green text-white transition-colors';
        listBtn.className = 'px-4 py-3 bg-white text-gray-700 hover:bg-gray-50 transition-colors';
        gridView.classList.remove('hidden');
        listView.classList.add('hidden');
    } else {
        listBtn.className = 'px-4 py-3 bg-burkina-green text-white transition-colors';
        gridBtn.className = 'px-4 py-3 bg-white text-gray-700 hover:bg-gray-50 transition-colors';
        listView.classList.remove('hidden');
        gridView.classList.add('hidden');
    }
    renderDocuments();
}

// Render documents
function renderDocuments() {
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const paginatedDocs = filteredDocuments.slice(startIndex, endIndex);

    if (paginatedDocs.length === 0) {
        showEmptyState();
        return;
    }

    hideEmptyState();

    if (currentViewMode === 'grid') {
        renderGridView(paginatedDocs);
    } else {
        renderListView(paginatedDocs);
    }

    renderPagination();
}

// Render grid view
function renderGridView(docs) {
    const container = document.getElementById('documentsGrid');
    container.innerHTML = docs.map(doc => `
        <div class="document-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                            ${getFileIcon(doc.type)}
                        </div>
                        <span class="category-badge-${doc.category.toLowerCase().replace(/\s+/g, '-').replace('é', 'e').replace('è', 'e')} text-white text-xs font-medium px-3 py-1 rounded-full">
                            ${doc.category}
                        </span>
                    </div>
                    <span class="text-xs text-gray-500 font-medium uppercase bg-gray-100 px-2 py-1 rounded">${doc.type}</span>
                </div>
                
                <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2 hover:text-burkina-green transition-colors cursor-pointer">${doc.title}</h3>
                <p class="text-sm text-gray-600 mb-4 line-clamp-3">${doc.description}</p>
                
                <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>${formatDate(doc.date)}</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>${doc.downloads.toLocaleString('fr-FR')}</span>
                    </div>
                </div>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-1 text-xs text-gray-500">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="line-clamp-1">${doc.author}</span>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="previewDocument('${doc.id}')" class="text-burkina-green hover:text-green-700 font-medium text-sm transition-colors">
                            Aperçu
                        </button>
                        <button onclick="downloadDocument('${doc.id}')" class="btn-primary text-white px-4 py-2 rounded-lg text-sm font-medium">
                            Télécharger
                        </button>
                    </div>
                </div>
                
                <div class="mt-3 pt-3 border-t border-gray-100">
                    <div class="flex flex-wrap gap-1">
                        ${doc.tags.slice(0, 3).map(tag => `
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">${tag}</span>
                        `).join('')}
                        ${doc.tags.length > 3 ? `<span class="text-xs text-gray-400">+${doc.tags.length - 3}</span>` : ''}
                    </div>
                </div>
            </div>
        </div>
    `).join('');
}

// Render list view
function renderListView(docs) {
    const container = document.getElementById('documentsListContent');
    container.innerHTML = docs.map(doc => `
        <div class="p-6 hover:bg-gray-50 transition-colors fade-in">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4 flex-1 min-w-0">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        ${getFileIcon(doc.type)}
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center space-x-3 mb-2">
                            <h3 class="text-lg font-bold text-gray-900 hover:text-burkina-green transition-colors cursor-pointer">${doc.title}</h3>
                            <span class="category-badge-${doc.category.toLowerCase().replace(/\s+/g, '-').replace('é', 'e').replace('è', 'e')} text-white text-xs font-medium px-3 py-1 rounded-full flex-shrink-0">
                                ${doc.category}
                            </span>
                        </div>
                        <p class="text-sm text-gray-600 mb-3 line-clamp-2">${doc.description}</p>
                        <div class="flex items-center space-x-6 text-sm text-gray-500">
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>${formatDate(doc.date)}</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>${doc.author}</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <span>${doc.downloads.toLocaleString('fr-FR')} téléchargements</span>
                            </div>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">${doc.size}</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3 flex-shrink-0 ml-4">
                    <span class="text-xs text-gray-500 font-medium uppercase bg-gray-100 px-2 py-1 rounded">${doc.type}</span>
                    <button onclick="previewDocument('${doc.id}')" class="text-burkina-green hover:text-green-700 font-medium text-sm transition-colors">
                        Aperçu
                    </button>
                    <button onclick="downloadDocument('${doc.id}')" class="btn-primary text-white px-4 py-2 rounded-lg text-sm font-medium">
                        Télécharger
                    </button>
                </div>
            </div>
        </div>
    `).join('');
}

// Render pagination
function renderPagination() {
    const totalPages = Math.ceil(filteredDocuments.length / itemsPerPage);
    const pageNumbers = document.getElementById('pageNumbers');
    const prevBtn = document.getElementById('prevPage');
    const nextBtn = document.getElementById('nextPage');

    if (totalPages <= 1) {
        document.getElementById('pagination').style.display = 'none';
        return;
    }

    document.getElementById('pagination').style.display = 'flex';

    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages;

    let paginationHTML = '';
    const maxVisiblePages = 5;
    let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
    let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

    if (endPage - startPage + 1 < maxVisiblePages) {
        startPage = Math.max(1, endPage - maxVisiblePages + 1);
    }

    for (let i = startPage; i <= endPage; i++) {
        paginationHTML += `
            <button onclick="changePage(${i})" class="px-3 py-2 text-sm font-medium ${i === currentPage ? 'bg-burkina-green text-white' : 'text-gray-500 bg-white hover:bg-gray-50'} border border-gray-300 rounded-lg transition-colors">
                ${i}
            </button>
        `;
    }

    pageNumbers.innerHTML = paginationHTML;
}

// Change page
function changePage(page) {
    const totalPages = Math.ceil(filteredDocuments.length / itemsPerPage);
    if (page >= 1 && page <= totalPages) {
        currentPage = page;
        renderDocuments();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}

// Get file icon
function getFileIcon(type) {
    const iconClass = "w-6 h-6 text-gray-600";
    switch (type.toLowerCase()) {
        case 'pdf':
            return `<svg class="${iconClass}" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z" />
            </svg>`;
        case 'doc':
        case 'docx':
            return `<svg class="${iconClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>`;
        default:
            return `<svg class="${iconClass}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>`;
    }
}

// Format date
function formatDate(dateString) {
    return new Date(dateString).toLocaleDateString('fr-FR', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

// Show/hide loading
function showLoading() {
    document.getElementById('loadingIndicator').classList.add('active');
    document.getElementById('documentsGrid').style.opacity = '0.5';
    document.getElementById('documentsList').style.opacity = '0.5';
}

function hideLoading() {
    document.getElementById('loadingIndicator').classList.remove('active');
    document.getElementById('documentsGrid').style.opacity = '1';
    document.getElementById('documentsList').style.opacity = '1';
}

// Show/hide empty state
function showEmptyState() {
    document.getElementById('emptyState').classList.remove('hidden');
    document.getElementById('documentsGrid').classList.add('hidden');
    document.getElementById('documentsList').classList.add('hidden');
    document.getElementById('pagination').style.display = 'none';
}

function hideEmptyState() {
    document.getElementById('emptyState').classList.add('hidden');
    if (currentViewMode === 'grid') {
        document.getElementById('documentsGrid').classList.remove('hidden');
    } else {
        document.getElementById('documentsList').classList.remove('hidden');
    }
}

// Reset filters
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('categoryFilter').value = 'all';
    document.getElementById('sortFilter').value = 'date';
    filterDocuments();
}

// Preview document
function previewDocument(docId) {
    const doc = documents.find(d => d.id === docId);
    if (doc) {
        alert(`Aperçu du document: ${doc.title}\n\nDescription: ${doc.description}\n\nAuteur: ${doc.author}\nTaille: ${doc.size}\nTéléchargements: ${doc.downloads}`);
    }
}

// Download document
function downloadDocument(docId) {
    const doc = documents.find(d => d.id === docId);
    if (doc) {
        // Simulate download
        const link = document.createElement('a');
        link.href = '#';
        link.download = `${doc.title}.${doc.type}`;
        
        // Show download notification
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-burkina-green text-white px-6 py-3 rounded-lg shadow-lg z-50 fade-in';
        notification.innerHTML = `
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Téléchargement de "${doc.title}" en cours...</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 3000);
        
        // Update download count (simulation)
        doc.downloads++;
        updateStatistics();
        renderDocuments();
        
        console.log(`Téléchargement simulé: ${doc.title}.${doc.type}`);
    }
}
