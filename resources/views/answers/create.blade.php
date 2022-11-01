<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-6 px-8 text-center">
        <div>
            <h1 class="text-4xl mb-8">Add New Answer</h1>
        </div>
        <form action="/answers" method="POST">
            @csrf
            <div class="mb-2">
                <label class="mr-2 text-lg">Answer</label>
                <input type="text" name="text" class="border border-black bg-gray-800 px-2 py-1 outline-none" value="">
            </div>
            <div class="mb-2">
                <label class="mr-2 text-lg">Is Correct?</label>
                <input type="checkbox" name="is_correct" value="1">
            </div>

            <div class="mb-2">
                <label class="mr-2 text-lg">Select Category</label>
                <select name="category_id" class="border border-black bg-gray-800 px-2 py-1 outline-none" value="">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>              
            </div>

            <div class="mb-2">
                <label class="mr-2 text-lg">Select Question</label>
                <select name="question_id" class="border border-black bg-gray-800 px-2 py-1 outline-none" value="">
                    @foreach ($questions as $question)
                        <option value="{{ $question->id }}">{{ $question->text }}</option>
                    @endforeach
                </select>              
            </div>
            <input type="submit" value="Submit" class="border border-black bg-gray-500 px-2 py-1">
        </form> 
    </div>
</x-layout>
