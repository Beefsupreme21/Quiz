<x-layout>
    <h1>Edit Answer</h1>
    <div>
        <form action="/answers/{{ $answer->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label>Answer</label>
                <input type="text" name="text" class="border border-black bg-gray-800">
            </div>

            <div class="mb-2">
                <label>Is Correct?</label>
                <input type="checkbox" name="is_correct" value="1">
            </div>

            <div>
                <label>Select Category</label>
                <select name="category_id" class="border border-black bg-gray-800">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>              
            </div>

            <div>
                <label>Select Question</label>
                <select name="question_id" class="border border-black bg-gray-800">
                    @foreach ($questions as $question)
                        <option value="{{ $question->id }}">{{ $question->text }}</option>
                    @endforeach
                </select>              
            </div>

            <input type="submit" value="Submit" class="border border-black bg-gray-500 p-2">
        </form> 
    </div>
</x-layout>