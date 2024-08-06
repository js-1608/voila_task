document.addEventListener('DOMContentLoaded', () => {
    const chatIcon = document.getElementById('chat-icon');
    const chatContainer = document.getElementById('chat-container');
    const chatBox = document.getElementById('chat-box');
    const optionsList = document.getElementById('options-list');
    const closeChat = document.getElementById('close-chat');

    let currentStep = 0;

    function addMessage(text, sender) {
        const message = document.createElement('div');
        message.className = `chat-message ${sender}`;
        message.innerText = text;
        chatBox.appendChild(message);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    function addOptions(options) {
        optionsList.innerHTML = '';
        options.forEach(option => {
            const button = document.createElement('button');
            button.className = 'option-button';
            button.innerText = option;
            button.addEventListener('click', () => {
                handleUserSelection(option);
            });
            optionsList.appendChild(button);
        });
    }

    function handleUserSelection(option) {
        addMessage(option, 'user');
        setTimeout(() => {
            processResponse(option);
        }, 500);
    }

    function processResponse(option) {
        if (currentStep === 0) {
            if (option === "Order status") {
                addMessage("Your order is on the way and will arrive by tomorrow.", 'bot');
                addOptions(["Track another order", "Main menu"]);
            } else if (option === "Cancel order") {
                addMessage("Please visit your orders page to cancel your order.", 'bot');
                addOptions(["Cancel another order", "Main menu"]);
            } else if (option === "Return order") {
                addMessage("You can initiate a return from your orders page within 30 days.", 'bot');
                addOptions(["Return another order", "Main menu"]);
            }
            currentStep++;
        } else {
            if (option === "Track another order") {
                addMessage("Please enter your order ID.", 'bot');
                currentStep = 0;
                addOptions(["Order status", "Cancel order", "Return order"]);
            } else if (option === "Cancel another order") {
                addMessage("Please visit your orders page to cancel your order.", 'bot');
                currentStep = 0;
                addOptions(["Order status", "Cancel order", "Return order"]);
            } else if (option === "Return another order") {
                addMessage("You can initiate a return from your orders page within 30 days.", 'bot');
                currentStep = 0;
                addOptions(["Order status", "Cancel order", "Return order"]);
            } else if (option === "Main menu") {
                addMessage("Hi, how can I help you?", 'bot');
                currentStep = 0;
                addOptions(["Order status", "Cancel order", "Return order"]);
            }
        }
    }

    chatIcon.addEventListener('click', () => {
        chatContainer.style.display = 'flex';
        chatIcon.style.display = 'none';
        setTimeout(() => {
            addMessage("Hi, how can I help you?", 'bot');
            addOptions(["Order status", "Cancel order", "Return order"]);
        }, 500);
    });

    closeChat.addEventListener('click', () => {
        chatContainer.style.display = 'none';
        chatIcon.style.display = 'flex';
        chatBox.innerHTML = '';
        optionsList.innerHTML = '';
        currentStep = 0;
    });
});
