<div x-data="{ 
    open: false, 
    messages: [{text: 'Hello! I am your AI assistant. How can I help you today?', sender: 'bot'}], 
    input: '',
    speaking: false,
    
    sendMessage() {
        if (this.input.trim() === '') return;
        
        this.messages.push({text: this.input, sender: 'user'});
        let userQuery = this.input;
        this.input = '';
        
        // Call Backend API
        fetch('{{ route('bot.chat') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')
            },
            body: JSON.stringify({ message: userQuery })
        })
        .then(response => response.json())
        .then(data => {
            this.messages.push({text: data.response, sender: 'bot'});
            this.speak(data.response);
        })
        .catch(error => {
            console.error('Error:', error);
            this.messages.push({text: 'Sorry, I am having trouble connecting to the server.', sender: 'bot'});
        });
    },
    
    speak(text) {
        if ('speechSynthesis' in window) {
            let utterance = new SpeechSynthesisUtterance(text);
            window.speechSynthesis.speak(utterance);
        }
    }
}" class="fixed bottom-6 right-6 z-50">

    <!-- Chat Window -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-90 translate-y-4"
         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
         class="bg-white rounded-lg shadow-xl w-80 h-96 flex flex-col border border-gray-200 mb-4 overflow-hidden">
        
        <!-- Header -->
        <div class="bg-indigo-600 text-white p-3 flex justify-between items-center">
            <h3 class="font-bold">AI Assistant</h3>
            <button @click="open = false" class="text-white hover:text-gray-200">&times;</button>
        </div>
        
        <!-- Messages -->
        <div class="flex-grow p-4 overflow-y-auto space-y-3 bg-gray-50">
            <template x-for="msg in messages">
                <div :class="msg.sender === 'user' ? 'text-right' : 'text-left'">
                    <span :class="msg.sender === 'user' ? 'bg-indigo-100 text-indigo-800' : 'bg-gray-200 text-gray-800'" 
                          class="inline-block px-3 py-2 rounded-lg text-sm max-w-[80%]">
                        <span x-text="msg.text"></span>
                    </span>
                </div>
            </template>
        </div>
        
        <!-- Input -->
        <div class="p-3 border-t border-gray-200 bg-white">
            <div class="flex">
                <input type="text" x-model="input" @keydown.enter="sendMessage()" placeholder="Ask about features..." 
                       class="flex-grow px-3 py-2 border rounded-l-md text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500">
                <button @click="sendMessage()" class="bg-indigo-600 text-white px-4 py-2 rounded-r-md hover:bg-indigo-700 text-sm">Send</button>
            </div>
        </div>
    </div>

    <!-- Toggle Button -->
    <button @click="open = !open" class="bg-indigo-600 text-white p-4 rounded-full shadow-lg hover:bg-indigo-700 transition transform hover:scale-105 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
    </button>
</div>
