<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-6 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-8">Add New Quiz</h1>
        </div>
        <form action="/quizzes" method="POST">
            @csrf
            <div class="text-center">
                <label class="mr-2 text-lg">Name</label>
                <input type="text" name="name" class="border border-black bg-gray-800 px-2 py-1 outline-none" value="">
                <input type="submit" value="Submit" class="border border-black bg-gray-500 px-2 py-1">
            </div>
            <div class="mb-2">
                <label class="mr-2 text-lg">Select Category</label>
                <select name="category_id" class="border border-black bg-gray-800 px-2 py-1 outline-none">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>              
            </div>
        </form> 
    </div>
</x-layout>