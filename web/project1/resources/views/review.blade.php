<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
    <title>Document</title>
</head>
<body class="bg-dark">

    <div class="container">
    <h2 class="alert alert-primary">Форма добавления отзыва</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method ="post" action="/project1/resources/views/review.blade.php/check">
            <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br/><br/>
            <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br/><br/>
            <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br/><br/>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
</body>
</html>