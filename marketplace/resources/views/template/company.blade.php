@extends('layouts.app')

@section('button')
    @include('modul.sidebarButton')    
@endsection

@section('content')

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <b>
            {{auth()->user()->company}}
            </b>
        </div>

        <ul class="list-unstyled components">
           
            @if (Route::has('company.home'))
                <li class="nav-item pl-3">
                    <a href="{{ route('company.home') }}">{{ __('Мой профиль') }}</a>
                </li>
            @endif
            
            @if (Route::has('company.products'))
                <li class="nav-item pl-3">
                    <a href="{{ route('company.products') }}">{{ __('Услуги') }}</a>
                </li>
            @endif            

            @if (Route::has('company.orders'))
                <li class="nav-item pl-3">
                    <a href="{{ route('company.orders') }}">{{ __('Заказы') }}</a>
                </li>
            @endif

            @if (Route::has('company.callback'))
                <li class="nav-item pl-3">
                    <a href="{{ route('company.callback') }}">{{ __('Обратный звонок') }}</a>
                </li>
            @endif

        </ul>              
    </nav>

    <!-- Page Content  -->
    <div id="content">       
        @yield('info')
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

@endsection

