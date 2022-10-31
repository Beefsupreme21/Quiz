<x-layout>
    <h1>Add New Game</h1>
    <div>
        <form action="/questions" method="POST">
            @csrf
            <div class="mb-2">
                <label>Question</label>
                <input type="text" name="text" class="border border-black bg-gray-800">
            </div>

            <div>
                <label>Select Category</label>
                <select name="category_id" class="border border-black bg-gray-800">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>              
            </div>

            <input type="submit" value="Submit" class="border border-black bg-gray-500 p-2">
        </form> 
    </div>
</x-layout>