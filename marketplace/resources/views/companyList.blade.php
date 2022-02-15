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

    @if (!empty($companys))
        <div>
            {{$companys->links()}}
        </div>

        <div class = "text-center m-3 p-3">
        @foreach ($companys as $company)       
            <div class="alert alert-success">            
                <div class = "lead text-left">
                    {{-- {{$company->id}}  --}}
                    {{$company->company}}
                </div>           
            </div>
        @endforeach
        </div>

        <div>
            {{$companys->links()}}
        </div>
    @else
        <p> Ничего не найдено </p>
    @endif
@endsection

