@extends('template.company')

@section('info')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Редактирование услуги с типом') }} {{$insuranceType}}</div>
                    <div class="card-body">
                        <form action="{{route('company.products.update', $product->id)}}" method="POST">
                            @csrf
                            <input name="id" type="hidden" value="{{$product->id}}">
                            <input name="type_id" type="hidden" value="{{$typeId}}">
                            
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Услуга') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$product->title}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product-content" class="col-md-4 col-form-label text-md-end">{{ __('Описание') }}</label>
                                <div class="col-md-6">
                                    <input id="product-content" type="textbox" class="form-control" name="content" value="{{$product->content}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Подробнее') }}</label>
                                <div class="col-md-6">
                                    <input id="description" type="textbox" class="form-control" name="description" value="{{$product->description}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="base_price" class="col-md-4 col-form-label text-md-end">{{ __('Базовая ставка') }}</label>
                                <div class="col-md-6">
                                    <input id="base_price" type="textbox" class="form-control" name="base_price" value="{{$product->base_price}}">
                                </div>
                            </div>
                            @foreach($coefficients as $key => $coeff)
                                @if(is_array($coeff)) 
                                    <b><label for="{{$key}}" class="col-md-4 col-form-label text-md-end">{{array_key_first($coeff)}}</label></b>
                                    @foreach (reset($coeff) as $subkey => $field)                                    
                                        @php $globalKey =  $key.'.'.$subkey; @endphp
                                        <div class="row mb-3">
                                            <label for="{{$globalKey}}" class="col-md-4 col-form-label text-md-end">{{$field}}</label>
                                            <div class="col-md-6">
                                                <input id="{{$globalKey}}" type="textbox" class="form-control" name="coefficients[{{$key}}][{{$subkey}}]"@if(isset($coefficients_values[$key][$subkey])) value="{{$coefficients_values[$key][$subkey]}}"@endif>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row mb-3">
                                        <label for="{{$key}}" class="col-md-4 col-form-label text-md-end">{{$coeff}}</label>
                                        <div class="col-md-6">
                                            <input id="{{$key}}" type="textbox" class="form-control" name="coefficients[{{$key}}]"@if(isset($coefficients_values[$key])) value="{{$coefficients_values[$key]}}"@endif>
                                        </div>
                                    </div>
                                @endif
                            @endforeach 

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Редактировать') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
