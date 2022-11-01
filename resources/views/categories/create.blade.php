<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-6 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-8">Add New Category</h1>
        </div>
        <form action="/categories" method="POST">
            @csrf
            <div class="text-center">
                <label class="mr-2 text-lg">Name</label>
                <input type="text" name="name" class="border border-black bg-gray-800 px-2 py-1 outline-none" value="">
                <input type="submit" value="Submit" class="border border-black bg-gray-500 px-2 py-1">
            </div>
        </form> 
    </div>
</x-layout>