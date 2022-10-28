<x-layout>
    <h1>Add New Game</h1>
    <div>
        <form action="/categories" method="POST">
            @csrf
            <div class="mb-2">
                <label>Name</label>
                <input type="text" name="name" class="border border-black bg-gray-800">
            </div>
            <input type="submit" value="Submit" class="border border-black bg-gray-500 p-2">
        </form> 
    </div>
</x-layout>