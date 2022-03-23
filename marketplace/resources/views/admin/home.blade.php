@extends('template.admin')

@section('info')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Профиль') }}
                </div>

                <div class="card-body">
                    

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6 mt-2">
                              {{$profile->email}}  
                            </div>
                        </div>                   

                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

                            <div class="col-md-6 mt-2">
                                {{$profile->lastname}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                            <div class="col-md-6 mt-2">
                                {{$profile->firstname}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="middlename" class="col-md-4 col-form-label text-md-end">{{ __('Отчество') }}</label>

                            <div class="col-md-6 mt-2">
                                {{$profile->middlename}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Дата рождения') }}</label>

                            <div class="col-md-6 mt-2">
                                {{$profile->birthdate}}
                            </div>
                        </div>

                        <div class="row mb-3 mt-2">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Телефон') }}</label>

                            <div class="col-md-6 mt-2">
                                {{$profile->phone}}
                            </div>
                        </div>
                        
                            <div class="row mb-3 mt-2">
                                <label for="city_id" class="col-md-4 col-form-label text-md-end">{{ __('Город') }}</label>

                                <div class="col-md-6 mt-2">
                                    {{$profile->city->city}}
                                </div>
                            </div>
                        

                        <div class="row mb-3">
                            <label for="adress" class="col-md-4 col-form-label text-md-end">{{ __('Адресс') }}</label>

                            <div class="col-md-6 mt-2">
                                {{$profile->adress}}
                            </div>
                        </div>                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('admin.profile.updateForm') }}" class="btn btn-primary">
                                    {{ __('Редактировать') }}
                                </a>
                            </div>
                        </div>          

                
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
