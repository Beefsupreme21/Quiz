<x-layout>
    <div class="p-6">
        <div>{{ $quiz->name }}</div>
        <div>Category: {{ $quiz->category->name }}</div>

        <form method="POST" action="/form">
            @csrf
            <div class="mt-6">
                @foreach($quiz->category->questions as $question)
                    <div class="mt-6">{{ $question->text }}</div>
                    <div>
                        <input type="hidden" name="questions[{{ $question->id }}]">
                        @foreach($question->answers as $answer)
                            <div>
                                <input type="radio" name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}" value="{{ $answer->id }}">
                                <label for="answer-{{ $answer->id }}">
                                    {{ $answer->text }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div>
                <button type="submit" class="mt-6 px-4 py-2 border border-gray-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>

