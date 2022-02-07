<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <title>search</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="marin-top:40px">
                <h4>Elastic Search</h4> <hr>
                <form action="{{route('web.search')}}" method="GET"> 
                    <div class="form-group">
                        <label for="">Enter keyword </label>
                        <input type="text" class="form-control" name="query" placeholder="Search">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-3"> Search </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@if (isset($products))
    <div>
        {{$products->links()}}
    </div>

    <div class = "text-center m-3 p-3">
       @foreach ($products as $product)       
        <div class="alert alert-primary">            
            <div class = "lead text-left">
                {{$product->id}} 
                {{$product->title}} 
            </div>
            <div>{{$product->company->company}}</div>
            <div>{{$product->description}}</div>
        </div>
       @endforeach
    </div>

    <div>
        {{$products->links()}}
    </div>

@endif
    
</body>
</html>