<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semka</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/mail.css">
</head>
<body>
    @include('inc.header')

    <p class="messages_title">Все сообщения</p>
    @foreach($data as $el)
    <div class="message_area">
        <h2>{{ $el->Name }}</h2>
        <h5>{{ $el->Email }}</h5>
        <b class="message_text">{{ $el->message }}</b>
        <b class="message_date">{{ $el->created_at }}</b>
    </div>
    @endforeach
    <!-- <div class="container">
        <p class="title_message_scene">Запустить рассылку писем</p>
        <button type="submit" class="message_button">Оповестить</button>
    </div> -->
    <script src="{{ asset('/js/app.js')}}"></script>
</body>
</html>