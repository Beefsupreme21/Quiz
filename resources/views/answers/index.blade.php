<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Answers</h1>
            <a href="/answers/create" class="hover:underline"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New Answers</button></a>
        </div>
        <div class="flex justify-between border-b border-gray-700 text-xl pb-2 mb-2">
            <p>Answers</p>
            <p>Correct/Incorrect</p>
            <p>Question</p>
        </div>
        @foreach ($answers as $answer)
        <div class="flex justify-between">
            <a href="/answers/{{ $answer->id }}">
                <p class="hover:underline">{{ $answer->text }}</p>
            </a>
            @if ( $answer->is_correct == 0)
            <p>Incorrect</p>
            @else
            <p>Correct</p>
            @endif
            <a href="/answers/{{ $answer->id }}">
                <p class="hover:underline">{{ $answer->question->text }}</p>
            </a>

        </div>
        @endforeach
    </div>

</x-layout>