function toggleChat() {
    const chatbot = document.getElementById('chatbot');
    chatbot.classList.toggle('hidden');
}

function handleSubmit(event) {
    event.preventDefault();
    alert('Message envoyé avec succès !');
    event.target.reset();
}

function sendMessage(event) {
    event.preventDefault();
    const input = document.getElementById('chatInput');
    const message = input.value.trim();
    
    if (!message) return;
    
    const messagesContainer = document.getElementById('chatMessages');
    
    // Add user message
    const userMessage = document.createElement('div');
    userMessage.className = 'flex justify-end mb-3';
    userMessage.innerHTML = `
        <div class="bg-green-600 text-white max-w-xs px-3 py-2 rounded-lg">
            <div class="flex items-center space-x-2 mb-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span class="text-xs opacity-75">Vous</span>
            </div>
            <p class="text-sm">${message}</p>
        </div>
    `;
    messagesContainer.appendChild(userMessage);
    
    // Clear input
    input.value = '';
    
    // Scroll to bottom
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
    
    // Bot response after delay
    setTimeout(() => {
        const botResponses = [
            "Merci pour votre message ! Un agent vous répondra bientôt.",
            "Pour des questions urgentes, vous pouvez nous appeler au +226 25 33 44 55.",
            "Vous pouvez également consulter notre FAQ sur notre site web.",
            "Notre équipe est disponible du lundi au vendredi de 8h à 17h."
        ];
        const randomResponse = botResponses[Math.floor(Math.random() * botResponses.length)];
        
        const botMessage = document.createElement('div');
        botMessage.className = 'flex justify-start mb-3';
        botMessage.innerHTML = `
            <div class="bg-gray-100 text-gray-800 max-w-xs px-3 py-2 rounded-lg">
                <div class="flex items-center space-x-2 mb-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <span class="text-xs opacity-75">Assistant</span>
                </div>
                <p class="text-sm">${randomResponse}</p>
            </div>
        `;
        messagesContainer.appendChild(botMessage);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }, 1000);
}