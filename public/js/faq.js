tailwind.config = {
    theme: {
        extend: {
            colors: {
                'burkina-red': '#DC2626',
                'burkina-yellow': '#EAB308',
                'burkina-green': '#16A34A'
            }
        }
    }
}

// FAQ Data
const faqData = [
    // Bourses
    {
        id: 1,
        question: "Comment puis-je postuler pour une bourse d'études ?",
        answer: "Pour postuler à une bourse d'études, vous devez vous rendre sur le site web officiel du Ministère de l'Éducation Nationale ou vous présenter directement au bureau des bourses. Les dossiers doivent généralement contenir : certificat de scolarité, relevés de notes, attestation de ressources des parents, certificat médical et photos d'identité.",
        category: 'bourses'
    },
    {
        id: 2,
        question: "Quelles sont les conditions d'éligibilité pour une bourse ?",
        answer: "Les conditions d'éligibilité varient selon le type de bourse. Généralement, il faut : être de nationalité burkinabè, avoir de bons résultats scolaires (moyenne générale ≥ 12/20), justifier d'une situation financière précaire des parents, et ne pas bénéficier d'une autre bourse d'études.",
        category: 'bourses'
    },
    {
        id: 3,
        question: "Quand sont publiés les résultats des bourses ?",
        answer: "Les résultats des bourses sont généralement publiés entre juillet et septembre, selon le calendrier académique. Les candidats peuvent consulter les listes sur le site web du ministère ou dans les centres d'information et d'orientation scolaire.",
        category: 'bourses'
    },
    // Examens
    {
        id: 4,
        question: "Comment s'inscrire au Brevet d'Études du Premier Cycle (BEPC) ?",
        answer: "L'inscription au BEPC se fait dans votre établissement scolaire pour les élèves réguliers. Les candidats libres doivent se présenter à la Direction Régionale de l'Éducation Préscolaire, Primaire et Non Formelle avec les pièces requises : acte de naissance, certificat médical, photos d'identité et frais d'inscription.",
        category: 'examens'
    },
    {
        id: 5,
        question: "Quelles sont les épreuves du Baccalauréat ?",
        answer: "Les épreuves du Baccalauréat varient selon la série. Pour la série A : Français, Philosophie, Histoire-Géographie, Mathématiques, etc. Pour la série C : Mathématiques, Physique-Chimie, Sciences de la Vie et de la Terre, etc. Chaque série a ses coefficients spécifiques.",
        category: 'examens'
    },
    {
        id: 6,
        question: "Que faire en cas de perte de relevé de notes ?",
        answer: "En cas de perte de relevé de notes, vous devez faire une demande de duplicata auprès de l'Office du Baccalauréat du Burkina Faso (ONAB) ou de la Direction des Examens et Concours (DEC). Il faut fournir une déclaration de perte, une pièce d'identité et payer les frais de duplicata.",
        category: 'examens'
    },
    // Inscriptions
    {
        id: 7,
        question: "Comment s'inscrire dans un établissement public ?",
        answer: "Pour s'inscrire dans un établissement public, vous devez vous présenter directement à l'établissement avec les pièces requises : acte de naissance, certificat médical, photos d'identité, bulletin de notes de l'année précédente et certificat de scolarité. Les inscriptions se font généralement en septembre.",
        category: 'inscriptions'
    },
    {
        id: 8,
        question: "Quels sont les frais de scolarité dans le public ?",
        answer: "Dans les établissements publics, les frais de scolarité sont généralement gratuits pour l'enseignement primaire et secondaire. Cependant, il peut y avoir des frais d'inscription, de fournitures scolaires et de contribution aux activités de l'établissement qui varient selon le niveau.",
        category: 'inscriptions'
    },
    {
        id: 9,
        question: "Comment changer d'établissement en cours d'année ?",
        answer: "Pour changer d'établissement en cours d'année, vous devez obtenir un certificat de transfert de votre établissement actuel, puis vous présenter au nouvel établissement avec ce certificat et les autres pièces requises. Le changement doit être motivé par des raisons valables.",
        category: 'inscriptions'
    },
    // Orientations
    {
        id: 10,
        question: "Comment choisir mon orientation après le BEPC ?",
        answer: "Après le BEPC, vous pouvez choisir entre l'enseignement général (séries A, C, D) ou l'enseignement technique et professionnel. Le choix dépend de vos résultats, vos aptitudes et vos projets professionnels. Les conseillers d'orientation peuvent vous aider dans cette démarche.",
        category: 'orientations'
    },
    {
        id: 11,
        question: "Quelles sont les filières disponibles après le Baccalauréat ?",
        answer: "Après le Baccalauréat, vous pouvez vous orienter vers : l'université publique, les instituts privés, les écoles professionnelles, les grandes écoles, ou la formation technique supérieure. Le choix dépend de votre série de Bac et de vos ambitions professionnelles.",
        category: 'orientations'
    },
    {
        id: 12,
        question: "Comment obtenir des informations sur les métiers ?",
        answer: "Pour obtenir des informations sur les métiers, vous pouvez vous rendre dans les Centres d'Information et d'Orientation Scolaire (CIOS), consulter les guides d'orientation, participer aux forums des métiers, ou rencontrer des professionnels dans les domaines qui vous intéressent.",
        category: 'orientations'
    }
];

// State
let currentCategory = 'all';
let currentSearchTerm = '';

// Get category color
function getCategoryColor(category) {
    switch (category) {
        case 'bourses':
            return 'text-yellow-600 bg-yellow-50';
        case 'examens':
            return 'text-red-600 bg-red-50';
        case 'inscriptions':
            return 'text-green-600 bg-green-50';
        case 'orientations':
            return 'text-blue-600 bg-blue-50';
        default:
            return 'text-gray-600 bg-gray-50';
    }
}

// Get category icon
function getCategoryIcon(category) {
    switch (category) {
        case 'bourses':
            return '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg>';
        case 'examens':
            return '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><polyline points="14,2 14,8 20,8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10,9 9,9 8,9"/></svg>';
        case 'inscriptions':
            return '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>';
        case 'orientations':
            return '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polygon points="16.24,7.76 14.12,14.12 7.76,16.24 9.88,9.88 16.24,7.76"/></svg>';
        default:
            return '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg>';
    }
}

// Create FAQ item HTML
function createFAQItem(faq) {
    return `
        <div class="border border-gray-200 rounded-lg mb-4 overflow-hidden shadow-sm hover:shadow-md transition-shadow">
            <button onclick="toggleAccordion(${faq.id})" class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors">
                <div class="flex items-center space-x-3">
                    <div class="p-2 rounded-full ${getCategoryColor(faq.category)}">
                        ${getCategoryIcon(faq.category)}
                    </div>
                    <span class="font-medium text-gray-800">${faq.question}</span>
                </div>
                <svg id="chevron-${faq.id}" class="w-5 h-5 text-gray-500 transform transition-transform" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                </svg>
            </button>
            
            <div id="content-${faq.id}" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-200">
                <p class="text-gray-700 leading-relaxed">${faq.answer}</p>
            </div>
        </div>
    `;
}

// Toggle accordion
function toggleAccordion(id) {
    const content = document.getElementById(`content-${id}`);
    const chevron = document.getElementById(`chevron-${id}`);
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        chevron.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        chevron.style.transform = 'rotate(0deg)';
    }
}

// Filter FAQ items
function filterFAQ() {
    const filteredData = faqData.filter(item => {
        const matchesSearch = item.question.toLowerCase().includes(currentSearchTerm.toLowerCase()) ||
                            item.answer.toLowerCase().includes(currentSearchTerm.toLowerCase());
        const matchesCategory = currentCategory === 'all' || item.category === currentCategory;
        
        return matchesSearch && matchesCategory;
    });

    const container = document.getElementById('faqContainer');
    const noResults = document.getElementById('noResults');

    if (filteredData.length > 0) {
        container.innerHTML = filteredData.map(createFAQItem).join('');
        container.classList.remove('hidden');
        noResults.classList.add('hidden');
    } else {
        container.classList.add('hidden');
        noResults.classList.remove('hidden');
    }
}

// Update category buttons
function updateCategoryButtons() {
    const buttons = document.querySelectorAll('.category-btn');
    buttons.forEach(button => {
        const category = button.getAttribute('data-category');
        if (category === currentCategory) {
            button.className = 'category-btn flex items-center space-x-2 px-4 py-2 rounded-full transition-colors bg-burkina-green text-white';
        } else {
            button.className = 'category-btn flex items-center space-x-2 px-4 py-2 rounded-full transition-colors bg-white text-gray-700 hover:bg-gray-100 border border-gray-300';
        }
    });
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function(e) {
        currentSearchTerm = e.target.value;
        filterFAQ();
    });

    // Category filter functionality
    const categoryButtons = document.querySelectorAll('.category-btn');
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            currentCategory = this.getAttribute('data-category');
            updateCategoryButtons();
            filterFAQ();
        });
    });

    // Initial render
    filterFAQ();
});