@extends('layouts.app')

@section('content') 

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <b>{{$product->type->type}}: <br>
                    {{$product->title}}</b>
            </div>

            <div class="card-body">               
                <p><b>{{__('Компания')}}:</b> {{$product->company->company}}</p>
                <p>{{$product->content}}</p>
                <p><b>{{__('Подробнее')}}:</b></p>                
                <p>
                    {{$product->description}}
                </p>
                
            </div>

        </div>
    </div>
</div>

{{__('Просмотров:')}} {{$viewsCount}}

@endsection
