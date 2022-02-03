<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">       
    <title>Застрахуй братуху</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom"> <pre>   </pre>         
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="http://www.raskraska.com/catalog0001/1687.png" height="50" alt='ico'>
            <span class="fs-3">Застрахуй братуху</span> 
        </a>
</div>

@if($errors->any())
    <div class="alert-danger alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>        
    </div>
@endif

<div class="container">
@yield('main_content')
</div>

</body>
</html>
