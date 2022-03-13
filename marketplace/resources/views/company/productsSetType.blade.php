@extends('template.company')

@section('info')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Выберете тип услуги') }}</div>

                    <div class="card-body">
                        @foreach ($types as $type)                            
                           <p> 
                                <a href="{{ route('company.products.createForm', $type->id)}}" class="btn btn-primary">
                                    {{$type->type}}
                                </a>
                           </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection