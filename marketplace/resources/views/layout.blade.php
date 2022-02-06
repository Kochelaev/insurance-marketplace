<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">       
    <title>Застрахуй братуху</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom container">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">          
          <span class="fs-4">Застрахуй братуху</span>
        </a>

      
     <nav class="d-inline-flex mt-2 mt-md-2 ms-md-auto">
      @while (current($navMenu))
      <div class="btn-group container">
        <a href="/category/{{current($navMenu)['id']}}" type="button" class="btn btn-primary">{{key($navMenu)}}</a>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        </button>
        <div class="dropdown-menu">      
      @foreach (current($navMenu)['types'] as $subId => $subMenu)
        <a class="dropdown-item" href="/type/{{$subId}}">{{$subMenu}}</a>        
          @endforeach
        @php next($navMenu) @endphp 
      </div>
    </div>
      @endwhile
     </nav>
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
