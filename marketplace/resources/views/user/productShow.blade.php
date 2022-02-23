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

                <form method="POST" action="{{ route('callbackRequest') }}" >
                    @csrf
                    <input type="hidden" name='productId' value="{{$product->id}}">
                    <input type="hidden" name='companyId' value="{{$product->company->id}}">
                    <input type="submit" value="Заказать обратный звонок">
                </form>
                
            </div>
           
        </div>
    </div>
</div>

{{__('Просмотров:')}} {{$viewsCount}}

@endsection
