<x-layout>
    <h1>Edit Question</h1>
    <div>
        <form action="/questions/{{ $question->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label>Question</label>
                <input type="text" name="text" class="border border-black bg-gray-800" value="{{ $question->text }}">
            </div>

            <div>
                <label>Select Category</label>
                <select name="category_id" class="border border-black bg-gray-800" value="{{ $question->category->name }}">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}
                            @if ($category->id == $question->category->id)
                            " selected>
                            @endif
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>              
            </div>

            <input type="submit" value="Submit" class="border border-black bg-gray-500 p-2">
        </form> 
    </div>
</x-layout>