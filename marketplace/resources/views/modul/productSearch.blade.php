<div class="container mb-4 mt-4">
    <form action="{{ url('search') }}" method="get">
        <div class="form-group">
            <input
                type="text"
                name="q"
                class="form-control"
                placeholder="Поиск..."
                value="{{ request('q') }}"
            />
        </div>
    </form>
</div>