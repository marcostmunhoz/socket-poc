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
</head>
<body>
    <form method="POST" action="/server/post-message">
        @csrf
        <label>Message</label>
        <br/>
        <input type="text" name="message">
        <br/>
        <button type="submit">Send message</button>
    </form>
</body>
</html>
