<x-layout>
    <h1>Edit Category</h1>
    <div>
        <form action="/categories/{{ $category->name }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label>Name</label>
                <input type="text" name="name" class="border border-black bg-gray-800">
            </div>
            <input type="submit" value="Submit" class="border border-black bg-gray-500 p-2">
        </form> 
    </div>
</x-layout>