@extends('layouts.app')

@section('content')
@php
$cities = App\Models\City::all();
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">{{ __('Редактировать профиль') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.profile.update') }}">
                        @csrf                        

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control 
                                    @error('email') is-invalid @enderror"
                                    name="email" value="{{ $profile->email }}" required autocomplete="email"
                                    
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       

                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname"
                                value="{{$profile->lastname}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname"
                                value="{{$profile->firstname}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="middlename" class="col-md-4 col-form-label text-md-end">{{ __('Отчество') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control" name="middlename"
                                value="{{$profile->middlename}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Дата рождения') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control" name="birthdate"
                                value="{{$profile->birthdate}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Телефон') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control" name="phone"
                                value="{{$profile->phone}}">
                            </div>
                        </div>

                        @if($cities)
                            <div class="row mb-3">
                                <label for="city_id" class="col-md-4 col-form-label text-md-end">{{ __('Город') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="city" type="text" class="form-control" name="city"> --}}
                                    
                                    <select name="city_id" class="form-control"> 
                                        <option value="{{$profile->city_id}}">{{$profile->city->city}}</option>
                                        @foreach ($cities as $city)
                                            @if($city->id != $profile->city_id)
                                                <option value="{{$city->id}}">{{$city->city}}</option> 
                                            @endif
                                        @endforeach                                        
                                    </select>
                                </div>
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label for="adress" class="col-md-4 col-form-label text-md-end">{{ __('Адресс') }}</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress"
                                value="{{$profile->adress}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="adress" class="col-md-4 col-form-label text-md-end">{{ __('ИНН') }}</label>
                            
                            <div class="col-md-6">
                                <input id="INN" type="text" class="form-control" name="INN"
                                value="{{$profile->INN}}">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Отправить') }}
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
