<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} - Client</title>
    <style>
        body {
            font-family:sans-serif;
        }
    </style>
    <script src="{{mix('js/app.js')}}"></script>
    <script defer>
        Echo.channel('messages')
            .listen(
                'ServerMessage',
                (messageObj) => {
                    const $messages = document.querySelector('#messages'),
                        $message = document.createElement('p');

                    $message.innerText = messageObj.message;

                    $messages.appendChild($message);
                });
    </script>
</head>
<body>
    <h2>Messages Sent by Server</h2>
    <div id="messages"></div>
</body>
</html>
