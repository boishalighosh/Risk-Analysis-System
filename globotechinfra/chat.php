<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
    <title>Chatbot</title>
    <style>
        h1{
            border-bottom: 1px solid black;
        }
        body{
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(#FFBF00,#FF7F50);
        }
        .chat-container {
            width: 400px;
            margin: 0 auto;
        }
        .chat-box {
            height: 490px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background-color: aliceblue;
        }
        .message {
            margin-bottom: 5px;
        }
        .user-message {
            text-align: right;
            color: black;
            background-color: #ccc;
        }
        .bot-message {
            text-align: left;
            color: white;
            background-color: black;
        }
        #user-input {
            width: 300px;
            height: 20px;
            margin-right: 5px;
        }
        button {
            cursor: pointer;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="risk">
        <center><h1>Risk Analytics System</h1></center>
    </div>
    <div class="chat-container" id="chat-container">
        <div class="chat-box" id="chat-box">
            <!-- Chat messages will be displayed here -->
        </div>
        <input type="text" id="user-input" placeholder="Type your message...">
        <button onclick="sendMessage()"><i class="fa-solid fa-paper-plane"></i></button>
        <form action="risk.php" method="POST">
        <input type="hidden" id="month-input" name="month" value="">
            <input type="hidden" id="workers-input" name="workers" value="">
            <input type="hidden" id="both-shifts-input" name="both_shifts" value="">
            <input type="hidden" id="season-input" name="season" value="">
            <input type="hidden" id="nmonth-input" name="nmonth" value="">
        <button><i class="fa-solid fa-magnifying-glass-chart"></i></button>
        </form>
    </div>

    <script>
        let answers = [];
        let currentQuestionIndex = 0;

        const questions = [
            "For which month do you want the analytics?",
            "How many workers are currently working?",
            "Are they working in both shifts?",
            "Which season is it?",
            "How many months are left for the completeion of the project?"
        ];

        function askQuestion() {
            const chatBox = document.getElementById("chat-box");

            // Display bot message (question)
            const botMessage = document.createElement("div");
            botMessage.classList.add("message", "bot-message");
            botMessage.textContent = questions[currentQuestionIndex];
            chatBox.appendChild(botMessage);
        }

        function sendMessage() {
            const userInput = document.getElementById("user-input").value;
            document.getElementById("user-input").value = "";

            const chatBox = document.getElementById("chat-box");

            // Display user message
            const userMessage = document.createElement("div");
            userMessage.classList.add("message", "user-message");
            userMessage.textContent = userInput;
            chatBox.appendChild(userMessage);

            // Store user's answer
            answers.push(userInput);

            // Proceed to the next question
            currentQuestionIndex++;

            if (currentQuestionIndex < questions.length) {
                // Ask the next question
                askQuestion();
            } else {
                // All questions answered, process the answers
                processAnswers();
            }
        }

        function processAnswers() {
            const [month, workers, bothShifts, season, nmonth] = answers;
            let output = '';

             // Update the hidden input fields with user input
    document.getElementById("month-input").value = month;
    document.getElementById("workers-input").value = workers;
    document.getElementById("both-shifts-input").value = bothShifts;
    document.getElementById("season-input").value = season;
    document.getElementById("nmonth-input").value = nmonth;

    // Submit the form
    document.getElementById("user-form").submit();

            // Example calculation based on user input and shortfall sum
            // if (bothShifts.toLowerCase() === 'yes') {
            //     output = `In ${season}, with ${workers} workers working in both shifts and a total shortfall of ${shortfallSum}, the analytics for ${month} will be comprehensive.`;
            // } else {
            //     output = `In ${season}, with ${workers} workers working in a single shift and a total shortfall of ${shortfallSum}, the analytics for ${month} will be limited.`;
            // }

            // Display final output
            const chatBox = document.getElementById("chat-box");
            const finalMessage = document.createElement("div");
            finalMessage.classList.add("message", "bot-message");
            finalMessage.textContent = output;
            chatBox.appendChild(finalMessage);

            // Send data to server if needed
            sendDataToServer();
        }

        function sendDataToServer() {
            // Here you can send collected answers to the server for further processing
            console.log("All answers:", answers);
        }

        // Initialize by asking the first question
        askQuestion();
    </script>
</body>
</html>