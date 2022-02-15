@extends('layouts.app')

    @section('content')    

    <div class="container mb-4">
        <form action="{{ url('search') }}" method="get">
            <div class="form-group">
                <input
                    type="text"
                    name="q"
                    class="form-control"
                    placeholder="Поиск..."
                    value="{{ request('q') }}"
                />
            </div>
        </form>
    </div>
    
    <div>
        {{$products->links()}}
    </div>

    <div class = "text-center m-3 p-3">
       @foreach ($products as $product)       
        <div class="alert alert-primary">            
            <div class = "lead text-left">
                {{-- {{$product->id}}  --}}
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



@endsection

