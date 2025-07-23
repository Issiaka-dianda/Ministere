tailwind.config = {
    theme: {
        extend: {
            colors: {
                'burkina-green': '#059669',
                'burkina-red': '#DC2626',
                'burkina-yellow': '#F59E0B'
            }
        }
    }
}

// Menu mobile
 document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});

// Organigramme interactif
function toggleNode(nodeId) {
    const children = document.getElementById(nodeId + '-children');
    const icon = document.getElementById(nodeId + '-icon');
    
    if (children.classList.contains('hidden')) {
        children.classList.remove('hidden');
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
    } else {
        children.classList.add('hidden');
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>';
    }
}

// Galerie modal
const images = [
    {
        url: 'https://images.pexels.com/photos/5212345/pexels-photo-5212345.jpeg?auto=compress&cs=tinysrgb&w=800',
        title: 'Cérémonie d\'ouverture de l\'année scolaire',
        description: 'Le Ministre inaugure la rentrée scolaire 2023-2024 en présence des autorités éducatives.'
    },
    {
        url: 'https://images.pexels.com/photos/5212700/pexels-photo-5212700.jpeg?auto=compress&cs=tinysrgb&w=800',
        title: 'Formation des enseignants',
        description: 'Session de formation continue pour le renforcement des capacités pédagogiques.'
    },
    {
        url: 'https://images.pexels.com/photos/5212339/pexels-photo-5212339.jpeg?auto=compress&cs=tinysrgb&w=800',
        title: 'Remise de diplômes',
        description: 'Cérémonie de remise de diplômes aux lauréats du baccalauréat 2023.'
    }
];

function openModal(index) {
    const modal = document.getElementById('gallery-modal');
    const modalImage = document.getElementById('modal-image');
    const modalTitle = document.getElementById('modal-title');
    const modalDescription = document.getElementById('modal-description');
    
    modalImage.src = images[index].url;
    modalImage.alt = images[index].title;
    modalTitle.textContent = images[index].title;
    modalDescription.textContent = images[index].description;
    
    modal.classList.remove('hidden');
}

function closeModal() {
    document.getElementById('gallery-modal').classList.add('hidden');
}

// Navigation fluide
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Animation au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
}, observerOptions);

document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});