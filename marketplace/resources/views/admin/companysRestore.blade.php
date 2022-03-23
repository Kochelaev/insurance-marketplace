@extends('template.admin')

@section('info')

<div class="container">

    @if($companys->isNotEmpty())

        <div>
            {{$companys->links()}}
        </div>
   
        <table class="table">
            <tr>
                <th>id</th>
                <th>Компания</th>              
                <th> </th>
                <th> </th>
            </tr>
            @foreach ($companys as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->company}}</td>
                                                            
                    <td>
                        <form action="{{ route('admin.companys.restore', $company->id)}}" method="POST">
                            @csrf
                            <input type="submit" value="востановить">
                        </form>                       
                    </td>               
                </tr>
            @endforeach
           
        </table>
        
        @else       
            <p> {{__('Нет компаний')}} </p>

    @endif    

    <a href="{{ route('admin.companys')}}" class="btn btn-primary">
        {{__('к активным компаниям')}} 
   </a>

</div>


@endsection
