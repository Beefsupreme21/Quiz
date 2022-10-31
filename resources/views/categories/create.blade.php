<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Add New Game</h1>
        </div>

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
    </div>

</x-layout>