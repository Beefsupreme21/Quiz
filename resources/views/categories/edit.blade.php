<x-layout>
    <div class="border border-gray-500 w-1/3 my-6 mx-auto py-8 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-8">Edit Category Name</h1>
        </div>
        <form action="/categories/{{ $category->name }}" method="POST">
            @csrf
            @method('PUT')
            <div class="text-center">
                <label class="mr-2 text-lg">Name</label>
                <input type="text" name="name" class="border border-black bg-gray-800 px-2 py-1" value="{{ $category->name }}">
                <input type="submit" value="Submit" class="border border-black bg-gray-500 px-2 py-1">
            </div>
        </form> 
    </div>
</x-layout>