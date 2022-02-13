@extends('layout')
@section('main_content')
<div class="container">
    <div class="card">
        <div class="card-header">
<<<<<<< HEAD
            Products <small>({{ count($products) }})</small>
=======
            {{-- Products <small>({{ count($products) }})</small> --}}
>>>>>>> 24d7a2775c7e5653a30afaa653f9fd357b3a2ba7
        </div>
        <div class="card-body">
            <form action="{{ url('search') }}" method="get">
                <div class="form-group">
                    <input
                        type="text"
                        name="q"
                        class="form-control"
<<<<<<< HEAD
                        placeholder="Поиск..."
=======
                        placeholder="Search..."
>>>>>>> 24d7a2775c7e5653a30afaa653f9fd357b3a2ba7
                        value="{{ request('q') }}"
                    />
                </div>
            </form>
            @forelse ($products as $product)
                <article class="mb-3">
                    <h2>{{ $product->title }}</h2>
                    <p class="m-0">{{ $product->content}}</body>
                    <div>
                        {{$product->description}}
                    </div>
                </article>
            @empty
<<<<<<< HEAD
                <p>No products found</p>
=======
                <p>No articles found</p>
>>>>>>> 24d7a2775c7e5653a30afaa653f9fd357b3a2ba7
            @endforelse
        </div>
    </div>
</div>
@endsection