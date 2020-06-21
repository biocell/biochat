<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biochat</title>
</head>
<body>
    <?php
         echo ('<h1><center>Biochat by @biocell</center></h2>');
?>
<script>
        var botmanWidget = {
            frameEndpoint: '/chat.html',
            introMessage: 'Hello, I am a Biochat. How may i be of service?',
            chatServer : 'chat.php', 
            title: 'Biochat', 
            mainColor: '#456765',
            bubbleBackground: '#ff76f4',
            aboutText: '',
            bubbleAvatarUrl: '',
        }; 
    </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>
</html>