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
                <th> </th>
            </tr>
            @foreach ($companys as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->company}}</td>
                    <td>                        
                        <a href="{{ route('admin.companys.products', $company->id) }}">
                            <button class>
                                {{ __('услуги') }}
                            </button>
                        </a>
                    </td>                    
                    <td>                        
                        <a href="{{ route('admin.companys.updateForm', $company->id) }}">
                            <button>
                                {{ __('редактировать') }}
                            </button>
                        </a>
                    </td>                    
                    <td>
                        <form action="{{ route('admin.companys.delete', $company->id)}}" method="POST">
                            
                            @csrf
                            <input type="submit" value="удалить">
                        </form>                       
                    </td>               
                </tr>
            @endforeach
           
        </table>
        
        @else       
            <p> {{__('Нет компаний')}} </p>

    @endif    

    <a href="{{ route('admin.companys.restorForm')}}" class="btn btn-primary">
        {{__('востановить удаленную компанию')}} 
   </a>

</div>


@endsection
