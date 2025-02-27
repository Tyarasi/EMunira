  <!-- .footer__bot -->
    <!-- Chatbot Floating Button -->
    {{-- <div id="chatbot-container">
        <button id="chatbot-toggle">💬 Chat</button>
        <div id="chatbot-box">
            <div id="chatbot-header">Chat dengan Kami Bre sini<span id="chatbot-close">✖</span></div>
            <div id="chatbot-messages"></div>
            <input type="text" id="chatbot-input" placeholder="Ketik pesan..." />
            <button id="chatbot-send">Kirim</button>
        </div>
    </div>

    <style>
        

        #chatbot-toggle {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 50px;
            cursor: pointer;
        }

        #chatbot-box {
            display: none;
            width: 300px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        #chatbot-header {
            background: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }

        #chatbot-close {
            float: right;
            cursor: pointer;
        }

        #chatbot-messages {
            height: 200px;
            overflow-y: auto;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        #chatbot-input,
        #chatbot-send {
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
        }

        #chatbot-send {
            background: #007bff;
            color: white;
            cursor: pointer;
        }
    </style>

    <script>
        document.getElementById("chatbot-toggle").addEventListener("click", function() {
            document.getElementById("chatbot-box").style.display = "block";
            document.getElementById("chatbot-toggle").style.display = "none"; // Sembunyikan tombol
        });

        document.getElementById("chatbot-close").addEventListener("click", function() {
            document.getElementById("chatbot-box").style.display = "none";
            document.getElementById("chatbot-toggle").style.display = "block"; // Tampilkan kembali tombol
        });

        document.getElementById("chatbot-send").addEventListener("click", function() {
            let message = document.getElementById("chatbot-input").value;
            if (message.trim() === "") return;

            let chatbox = document.getElementById("chatbot-messages");
            chatbox.innerHTML += `<div><strong>Anda:</strong> ${message}</div>`;

            fetch('/chatbot', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        message: message
                    })
                })
                .then(response => response.json())
                .then(data => {
                    chatbox.innerHTML += `<div><strong>Bot:</strong> ${data.reply}</div>`;
                    document.getElementById("chatbot-input").value = "";
                });
        });
    </script> --}}
    {{-- <div id="chatbot-container">
       < -- Percobaan Chatbot 1 -- >
    </div> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <div>
        <button class="chatbot-toggler">
            <span class="material-symbols-outlined">mode_comment</span>
            <span class="material-symbols-outlined">close</span>
        </button>
        <div class="chatbot">
            <header>
                <h2>
                    Chatbot | E-Munira
                </h2>
                <span class="material-symbols-outlined">close</span>
            </header>
            <ul class="chatbox">
                <li class="chat incoming">
                    <span class="material-symbols-outlined">smart_toy</span>
                    <p>Hi, AJO Le</p>
                </li>
            </ul>
            <div class="chat-input">
                <textarea placeholder="Enter a message" required></textarea>
                <span id="send-btn" class="material-symbols-outlined">send</span>
            </div>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        .chatbot-toggler {
            position: fixed;
            right: 40px;
            bottom: 35px;
            height: 50px;
            width: 50px;
            color: #fff;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            outline: none;
            background: #724ae8;
            border-radius: 100%;
        }
        .chatbot-toggler span {
            position: absolute;
        }
        .show-chatbot .chatbot-toggler span:first-child,
        .chatbot-toggler span:last-child {
            opacity: 0;
        }
        .show-chatbot .chatbot-toggler span:last-child {
            opacity: 1;
        }
        .chatbot {
            position: fixed;
            right: 40px;
            bottom: 100px;
            width: 420px;
            transform: scale(0.5);
            opacity: 0;
            pointer-events: none;
            overflow: hidden;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
                        0 32px 64px -48px rgba(0, 0, 0, 0.5);
        }
        .show-chatbot .chatbot {
            transform: scale(1);
            opacity: 1;
            pointer-events: auto;
        }
        .chatbot header {
            background: #724ae8;
            padding: 2px 0;
            text-align: center;
            position: relative;
        }
        .chatbot header h2{
            color: #fff;
            font-size: 1.2rem;
        }
        .chatbot header span {
            position: absolute;
            right: 20px;
            top: 50%;
            color: #fff;
            cursor: pointer;
            display: none;
            transform: translateY(-50%);
        }
        .chatbot .chatbox {
            height: 510px;
            overflow-y: auto;
            padding: 30px 20px 70px;

        }
        .chatbox .chat {
            display: flex;
        }
        .chatbox .incoming span {
            height: 32px;
            width: 32px;
            color: #fff;
            align-self: flex-end;
            background: #724ae8;
            text-align: center;
            line-height: 32px;
            border-radius: 4px;
            margin: 0 10px 20px 0;
        }
        .chatbox .outgoing {
            margin: 20px 0;
            justify-content: flex-end;
        }
        .chatbox .chat p {
            color: #fff;
            max-width: 75%;
            font-size: 0.95rem;
            padding: 12px 16px;
            border-radius: 10px 10px 0 10px;
            background: #724ae8;

        }
        .chatbox .incoming p {
            color: #000;
            background: #f2f2f2;
            border-radius: 10px 10px 10px 0;

        }
        .chatbot .chat-input {
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            gap: 5px;
            background: #fff;
            padding: 5px 20px;
            border-top: 1px solid #ccc;
        }
        .chat-input textarea {
            height: 55px;
            width: 100%;
            border: none;
            outline: none;
            font-size: 0.95rem;
            resize: none;
            padding: 16px 15px 16px 0;
        }
        .chat-input span {
            align-self: flex-end;
            height: 55px;
            line-height: 55px;
            color: #724ae8;
            font-size: 1.35rem;
            cursor: pointer;
            visibility: hidden;
        }
        .chat-input textarea:valid ~ span {
            visibility: visible;
        }
        @media(max-width: 490px){
            .chatbot {
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                border-radius: 0;
            }
            .chatbot .chatbox {
                height: 90%;
            }
            .chatbot header span {
                display: block;
            }
        }
    </style>

    <script>
        const chatInput = document.querySelector(".chat-input textarea");
        const sendChatBtn = document.querySelector(".chat-input span");
        const chatbox = document.querySelector(".chatbox");
        const chatbotToggler = document.querySelector(".chatbot-toggler");
        
        let userMessage;

        const createChatLi = (message, className) => {
            // Create a Chat <li> element with passed message and className
            const chatLi = document.createElement("li");
            chatLi.classList.add("chat", className);
            let chatContent = className === "outgoing" ? `<p>${message}</p>` : `<span class="material-symbols-outlined">smart_toy</span><p>${message}</p>`;
            chatLi.innerHTML = chatContent;
            return chatLi;
        }

        const handleChat = () => {
            userMessage = chatInput.value.trim();
            if(!userMessage) return;

            // Append User Mesagge to chatbox
            chatbox.appendChild(createChatLi(userMessage, "outgoing"));

            setTimeout(() => {
                chatbox.appendChild(createChatLi("Nti Nto Lu...", "incoming"));
            }, 600);
        }
        sendChatBtn.addEventListener("click", handleChat);
        chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));
    </script> --}}
    {{-- < -- Percobaan Chatbot 1 -- > --}}