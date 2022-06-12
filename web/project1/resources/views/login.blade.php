<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
    <title>Document</title>

</head>

<body>
    <script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
    <h1 style="text-align:center">Log in</h1>
    <form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.login')}}">
        
        <div class="form-group">
            <label for="email" class="col-form-label-lg">Ваш email</label>
            <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">            
            
        </div>
        <div class="form-group">
            <label for="pasword" class="col-form-label-lg">Пароль</label>
            <input class="form-control" id="password" name="password" type="text" value="" placeholder="password">

            
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Войти</button>
        </div>

    </form>
</body>
</html>