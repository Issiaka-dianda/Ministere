// Initialize Lucide icons
lucide.createIcons();

// Filter functionality
function filterNews(type) {
    const cards = document.querySelectorAll('.news-card');
    const buttons = document.querySelectorAll('.filter-btn');
    
    // Update button states
    buttons.forEach(btn => {
        btn.classList.remove('active', 'bg-burkina-green', 'text-white');
        btn.classList.add('bg-white', 'text-gray-700');
    });
    
    event.target.classList.add('active', 'bg-burkina-green', 'text-white');
    event.target.classList.remove('bg-white', 'text-gray-700');
    
    // Filter cards
    cards.forEach(card => {
        if (type === 'tous' || card.getAttribute('data-type') === type) {
            card.style.display = 'block';
            card.classList.remove('hidden');
        } else {
            card.style.display = 'none';
            card.classList.add('hidden');
        }
    });
}

// Sort functionality
function sortNews(sortBy) {
    const grid = document.getElementById('news-grid');
    const cards = Array.from(grid.querySelectorAll('.news-card:not(.hidden)'));
    
    cards.sort((a, b) => {
        switch(sortBy) {
            case 'date-desc':
                return new Date(b.getAttribute('data-date')) - new Date(a.getAttribute('data-date'));
            case 'date-asc':
                return new Date(a.getAttribute('data-date')) - new Date(b.getAttribute('data-date'));
            case 'title':
                const titleA = a.querySelector('.news-title').textContent.toLowerCase();
                const titleB = b.querySelector('.news-title').textContent.toLowerCase();
                return titleA.localeCompare(titleB);
            default:
                return 0;
        }
    });
    
    // Clear grid and re-append sorted cards
    grid.innerHTML = '';
    cards.forEach(card => grid.appendChild(card));
}

// Add smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Add loading animation for "Load More" button
document.querySelector('button:last-of-type').addEventListener('click', function() {
    this.innerHTML = '<i data-lucide="loader-2" class="w-5 h-5 animate-spin inline mr-2"></i>Chargement...';
    
    setTimeout(() => {
        this.innerHTML = 'Charger plus d\'actualités';
        lucide.createIcons();
    }, 2000);
});