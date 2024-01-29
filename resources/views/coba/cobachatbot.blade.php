<!DOCTYPE html>
<html>
  <head>
    <title>ChatGPT Demo</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      #chat-container {
        max-width: 400px;
        margin: 20px auto;
        padding: 10px;
        border: 1px solid #ccc;
      }

      #chat-log {
        height: 300px;
        overflow-y: scroll;
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
      }

      #user-input {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
      }

      #send-button {
        width: 100%;
        padding: 5px;
        background-color: #4caf50;
        color: white;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div id="chat-container">
      <div id="chat-log"></div>
      <input type="text" id="user-input" placeholder="Ketik pesan..." />
      <button id="send-button">Kirim</button>
    </div>

    <script>
      const chatLog = document.getElementById("chat-log");
      const userInput = document.getElementById("user-input");
      const sendButton = document.getElementById("send-button");

      sendButton.addEventListener("click", sendMessage);

      function sendMessage() {
        const message = userInput.value;

        if (message.trim() !== "") {
          appendMessage("user", message);
          getChatGPTResponse(message);
          userInput.value = "";
        }
      }

      function appendMessage(sender, message) {
        const messageElement = document.createElement("div");
        messageElement.className =
          sender === "user" ? "user-message" : "bot-message";
        messageElement.innerHTML =
          sender === "user"
            ? `<strong>Anda:</strong> ${message}`
            : `<strong>ChatGPT:</strong> ${message}`;
        chatLog.appendChild(messageElement);
        chatLog.scrollTop = chatLog.scrollHeight;
      }

      function getChatGPTResponse(message) {
        const apiUrl = "https://api.openai.com/v1/chat/completions";
        const API_KEY = "API_CHAT_GPT";

        fetch(apiUrl, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${API_KEY}`, // Ganti dengan token akses API Anda jika diperlukan
          },
          body: JSON.stringify({
            model: "gpt-3.5-turbo",
            messages: [
              { role: "system", content: "You are a helpful assistant." },
              { role: "user", content: message },
            ],
          }),
        })
          .then((response) => response.json())
          .then((data) => {
            const response = data.choices[0].message.content; // Mengambil teks respons dari objek respons
            appendMessage("bot", response);
          })
          .catch((error) => {
            console.error("Terjadi kesalahan:", error);
          });
      }
    </script>
  </body>
</html>
