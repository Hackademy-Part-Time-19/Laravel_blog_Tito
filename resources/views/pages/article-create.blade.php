<x-Layout>
    
    @vite(['resources/css/home.css']);

    <h3 class="text-center">Crea il tuo Articolo</h3>

    <form style="padding: 30px" action="{{ route('article.store') }}" method="POST">
        @csrf
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text"name='title' class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Category</label>
                <input type="text" name="category" class="form-control" id="category">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="category">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </form>

</x-Layout>
