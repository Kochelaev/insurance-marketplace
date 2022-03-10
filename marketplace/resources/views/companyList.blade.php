@extends('layouts.app')

    @section('content')    

    @include('modul.productSearch')

    <div class="container">

        @if (!empty($companys))
            <div>
                {{$companys->links()}}
            </div>

            <div class = "text-center m-3 p-3">
            @foreach ($companys as $company)
                <a href = '/companys/{{$company->id}}'>
                    <div class="alert alert-success">            
                        <div class = "lead text-left">
                            {{$company->company}}
                        </div>           
                    </div>
                </a>
            @endforeach
            </div>

            <div>
                {{$companys->links()}}
            </div>
        @else
            <p> Ничего не найдено </p>
        @endif

    <div class="container">
@endsection

