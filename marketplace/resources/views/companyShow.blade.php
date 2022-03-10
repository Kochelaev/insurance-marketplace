@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8"> --}}
            <div class="card mt-4">
                <div class="card-header">{{$company->company}}</div>

                {{-- <div class="card-body"> --}}
                   
                    {{-- <div class = "text-center m-3 p-3"> --}}
                        @foreach ($products as $product)
                            <a href = '/product/{{$product->id}}'>
                                <div class="alert alert-primary mt-2">            
                                    <div class = "lead text-center">
                                        <p>{{$product->type->type}} </p>
                                        {{$product->title}} 
                                    </div>                                    
                                    <div>{{$product->description}}</div>
                                </div>
                            </a>
                        @endforeach
                    {{-- </div> --}}
                
                    <div>
                        {{$products->links()}}
                    </div>

                {{-- </div> --}}
            </div>
        {{-- </div> --}}
    </div>
</div>
@endsection
