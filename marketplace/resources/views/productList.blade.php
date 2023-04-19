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
                        <p>{{$product->type->type}}</p>
                        {{$product->title}} 
                    </div>
                    <div>{{$product->company->company}}</div>
                    <div>{{$product->description}}</div>
                    <a href="#" class="text-success">От {{$product->base_price}} Р.</a>
                </div>
            </a>
        @endforeach
    </div>

    <div>
        {{$products->links()}}
    </div>

</div>

@endsection

