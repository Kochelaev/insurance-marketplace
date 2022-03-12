@extends('template.company')

@section('info')

<div class="container">

    @if($products->isNotEmpty())

        <div>
            {{$products->links()}}
        </div>
   
        <table class="table">
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Тип</th>
                <th> </th>
                <th> </th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->getCategory()}}</td>
                    <td>{{$product->type->type}}</td>
                    <td>                        
                        <a href="{{ route('company.products.updateForm', $product->id) }}">
                            <button>
                                {{ __('редактировать') }}
                            </button>
                        </a>
                    </td>                    
                    <td>
                        <form action="{{ route('company.products.delete', $product->id)}}" method="POST">
                            {{-- @method('POST') --}}
                            @csrf
                            <input type="submit" value="удалить">
                        </form>                       
                    </td>               
                </tr>
            @endforeach
           
        </table>
        
        @else       
            <p> {{__('У вас нет активных услуг')}} </p>

    @endif

    <a href="{{ route('company.products.createForm')}}" class="btn btn-primary">
         {{__('создать новую услугу')}} 
    </a>

    <a href="{{ route('company.products.restorForm')}}" class="btn btn-primary">
        {{__('востановить удаленную услугу')}} 
   </a>

</div>



@endsection
