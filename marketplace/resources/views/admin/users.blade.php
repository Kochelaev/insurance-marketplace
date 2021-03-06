@extends('template.admin')

@section('info')

<div class="container">

    @if($users->isNotEmpty())

        <div>
            {{$users->links()}}
        </div>
   
        <table class="table">
            <tr>
                <th>id</th>
                <th>ФИО</th>              
                <th> </th>
                <th> </th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstname}} {{$user->lastname}} {{$user->middlename}}</td>
                    <td>                        
                        <a href="{{ route('admin.users.updateForm', $user->id) }}">
                            <button>
                                {{ __('редактировать') }}
                            </button>
                        </a>
                    </td>                    
                    <td>
                        <form action="{{ route('admin.users.delete', $user->id)}}" method="POST">
                            {{-- @method('POST') --}}
                            @csrf
                            <input type="submit" value="удалить">
                        </form>                       
                    </td>               
                </tr>
            @endforeach
           
        </table>
        
        @else       
            <p> {{__('Нет пользователей')}} </p>

    @endif    

    <a href="{{ route('admin.users.restorForm')}}" class="btn btn-primary">
        {{__('востановить удаленого пользователя')}} 
   </a>

</div>


@endsection
