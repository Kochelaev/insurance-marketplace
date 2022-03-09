@extends('layouts.app')

@section('content')

@include('modul.productSearch')

<div class="container">
   
    
    <div>
        {{$products->links()}}
    </div>

    <div class = "text-center m-3 p-3">
        @foreach ($products as $product)
            <a href = '/product/{{$product->id}}'>
                <div class="alert alert-primary">            
                    <div class = "lead text-left">
                        {{-- {{$product->id}}  --}}
                        {{$product->title}} 
                    </div>
                    <div>{{$product->company->company}}</div>
                    <div>{{$product->description}}</div>
                </div>
            </a>
        @endforeach
    </div>

    <div>
        {{$products->links()}}
    </div>

</div>

@endsection

