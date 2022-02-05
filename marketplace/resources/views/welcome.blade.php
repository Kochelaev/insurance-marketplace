@extends('layout')

    @section('main_content')    

    <div class = "text-center m-3 p-3">
       @foreach ($products as $product)       
        <div>{{$product->id}} {{$product->title}} </div>
       @endforeach
    </div>

    <div>
        {{$products->links()}}
    </div>

@endsection

