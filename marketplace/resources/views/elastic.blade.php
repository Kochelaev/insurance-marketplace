@extends('layout')
@section('main_content')
<div class="container">
    <div class="card">
        <div class="card-header">
            {{-- Products <small>({{ count($products) }})</small> --}}
        </div>
        <div class="card-body">
            <form action="{{ url('search') }}" method="get">
                <div class="form-group">
                    <input
                        type="text"
                        name="q"
                        class="form-control"
                        placeholder="Search..."
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
                <p>No articles found</p>
            @endforelse
        </div>
    </div>
</div>
@endsection