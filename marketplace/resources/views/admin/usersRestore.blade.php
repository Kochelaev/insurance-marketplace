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
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstname}} {{$user->lastname}} {{$user->middlename}}</td>
                    <td>
                        <form action="{{ route('admin.users.restore', $user->id)}}" method="POST">
                            {{-- @method('POST') --}}
                            @csrf
                            <input type="submit" value="востановить">
                        </form>                       
                    </td>               
                </tr>
            @endforeach
           
        </table>
        
        @else       
            <p> {{__('нет удаленых пользователей')}} </p>

    @endif
    
    <a href="{{ route('admin.users')}}" class="btn btn-primary">
        {{__('Вернуться обратно')}} 
   </a>

</div>



@endsection
