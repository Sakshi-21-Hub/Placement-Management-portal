<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCP Chatbot</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html, body {
    height: 100%;
    background-color: white;
}

.wrapper {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 90px;
    width: 370px;
    max-height: 60%;
    background: white;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-top: 0px;
    overflow: hidden;
    
}

.wrapper .title {
    background: #007bff;
    color: white;
    font-size: 20px;
    font-weight: 500;
    line-height: 60px;
    text-align: center;
    border-bottom: 1px solid #006fe6;
    border-radius: 5px 5px 0 0;
}

.wrapper .form {
    padding: 20px 15px;
    min-height: 200px;
    max-height: 300px;
    overflow-y: auto;
}

.wrapper .typing-field {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #efefef;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 5px 5px;
    padding: 10px 15px;
    
}

.wrapper .typing-field .input-data input {
    height: 40px;
    width: 250px;
    outline: none;
    border: 1px solid transparent;
    padding: 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
    
}

.wrapper .typing-field .input-data button {
    height: 40px;
    width: 60px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    border: none;
    border-radius: 3px;
    background: #007bff;
    transition: all 0.3s ease;
}
.chat-toggle {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    z-index: 999;
}

.circle {
    width: 30px;
    height: 30px;
    background-color: #007bff;
    border-radius: 50%;
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}

.text {
    position:fixed;
    bottom: 20px;
    right: 20px;
    background-color:royalblue;
    color: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    text-align: center;
    line-height: 60px;
    cursor: pointer;
    
}
        #chat-header {
            background-color: blue;
            color: white;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #close-btn {
            cursor: pointer;
            background-color: transparent;
            border: none;
            color: white;
            font-size: 18px;
        }

    </style>
</head>
<body>
<div class="chat-toggle" onclick="toggleChat()">
   <div class="circle"></div>
   <div class="text" onclick="toggleChat()" style="font-size:20px" >Chat</div>
</div>

<div class="wrapper" id="chat-window">
        <div id="chat-header" onclick="toggleChat()">
            <span>TPC Chatbot</span>
            <button id="close-btn" onclick="closeChat()">X</button>
        </div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
function toggleChat() {
    var chatWindow = document.getElementById('chat-window');
    chatWindow.style.display = chatWindow.style.display === 'none' ? 'block' : 'none';
}

$(document).ready(function() {
    $(".chat-toggle").on("click", function() {
        toggleChat();
    });

    function sendMessage() {
        var value = $("#data").val();
        var userMessage = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ value +'</p></div></div>';
        $(".form").append(userMessage);
        $("#data").val('');

        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: 'text='+ value,
            success: function(result){
                var botReply = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                $(".form").append(botReply);
                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });
    }

    $("#send-btn").on("click", function(){
        sendMessage();
    });

    $("#data").keypress(function(e) {
        if(e.which == 13) {
            sendMessage();
        }
    });
});
</script>
    
</body>
</html>