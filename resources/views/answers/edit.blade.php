<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-6 px-8 text-center">
        <div>
            <h1 class="text-4xl mb-8">Edit Answer</h1>
        </div>
        <form action="/answers/{{ $answer->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label class="mr-2 text-lg">Answer</label>
                <input type="text" name="text" class="border border-black bg-gray-800 px-2 py-1 outline-none" value="{{ $answer->text }}">
            </div>
            <div class="mb-2">
                <label class="mr-2 text-lg">Is Correct?</label>
                <input type="checkbox" name="is_correct" value="1"
                @if ( $answer->is_correct == 1)
                " checked>
                @else
                ">
                @endif
            </div>

            <div class="mb-2">
                <label class="mr-2 text-lg">Select Category</label>
                <select name="category_id" class="border border-black bg-gray-800 px-2 py-1 outline-none">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        @if ($category->id == $answer->question->category->id)
                        " selected>
                        @else
                        ">
                        @endif
                        {{ $category->name }}
                    </option>                    
                    @endforeach
                </select>              
            </div>

            <div class="mb-2">
                <label class="mr-2 text-lg">Select Question</label>
                <select name="question_id" class="border border-black bg-gray-800 px-2 py-1 outline-none">
                    @foreach ($questions as $question)
                    <option value="{{ $category->id }}"
                        @if ($question->id == $answer->question->id)
                        " selected>
                        @else
                        ">
                        @endif
                        {{ $question->text }}
                    </option>                    
                    @endforeach
                </select>              
            </div>
            <input type="submit" value="Submit" class="border border-black bg-gray-500 px-2 py-1">
        </form> 
    </div>
</x-layout>


{{-- <div class="mb-2">
    <label class="mr-2 text-lg">Select Category</label>
    <select name="category_id" class="border border-black bg-gray-800 px-2 py-1">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}"
            @if ($category->id == $question->category->id)
            " selected>
            @else
            ">
            @endif
            {{ $category->name }}
        </option>                    
        @endforeach
    </select>              
</div> --}}