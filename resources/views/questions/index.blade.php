<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Questions</h1>
            <a href="/questions/create" class="hover:underline"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New Question</button></a>
        </div>
        <table class="table-auto m-auto">
            <thead> 
                <tr class="border-b border-gray-600 border-collapse text-left">
                    <th class="px-4">Question</th>
                    <th class="px-4">Category</th>
                </tr>
            </thead>
            @foreach ($questions as $question)
            <tbody>
                <tr>
                    <td class="px-4">
                        <a href="/questions/{{ $question->id }}">
                            <p class="hover:underline">{{ $question->text }}</p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/questions/{{ $question->id }}">
                            <p class="hover:underline">{{ $question->category->name }}</p>
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</x-layout>