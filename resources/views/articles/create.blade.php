<x-master title="Add article">
    <form method="POST" action="{{route('store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">intitule:</label>
            <input
                type="text"
                name="intitule"
                class="form-control"
            />
        </div>
        <div class="mb-3">
            <label class="form-label">categorie:</label>
            <input
                type="text"
                name="categorie"
                class="form-control"
            />
        </div>
        <div class="mb-3">
            <label class="form-label">price:</label>
            <input
                type="text"
                name="price"
                class="form-control"
            />
        </div>
        <button type="submit" class="btn btn-primary">save</button>
        
    </form>
</x-master>