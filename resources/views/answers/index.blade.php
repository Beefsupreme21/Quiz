<x-layout>
    <div class="border border-gray-500 w-1/2 mt-6 mx-auto p-4">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Answers</h1>
            <a href="/answers/create"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New Answer</button></a>
        </div>
        <table class="table-auto m-auto">
            <thead> 
                <tr class="border-b border-gray-600 border-collapse text-left">
                    <th class="px-4">Answers</th>
                    <th class="px-4">Question</th>
                    <th class="px-4">Correct/Incorrect</th>
                </tr>
            </thead>
            @foreach ($answers as $answer)
            <tbody>
                <tr>
                    <td class="px-4">
                        <a href="/answers/{{ $answer->id }}">
                            <p class="hover:underline">{{ $answer->text }}</p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/answers/{{ $answer->id }}">
                            <p class="hover:underline">{{ $answer->question->text }}</p>
                        </a>
                    </td>
                    @if ( $answer->is_correct == 0)
                    <td class="px-4">Incorrect</td>
                    @else
                    <td class="px-4">Correct</td>
                    @endif
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</x-layout>