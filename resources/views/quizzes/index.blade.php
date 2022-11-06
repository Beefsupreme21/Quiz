<x-layout>
    <div class="border border-gray-500 w-2/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Quizzes</h1>
            <a href="/quizzes/create"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New Quiz</button></a>
        </div>

        <table class="m-auto w-full">
            <thead> 
                <tr class="border-b border-gray-600 border-collapse text-left">
                    <th class="px-4">Name</th>
                    <th class="px-4">Category</th>
                    <th class="px-4">Created by</th>
                    <th class="px-4"></th>
                </tr>
            </thead>
            @foreach ($quizzes as $quiz)
            <tbody>
                <tr>
                    <td class="px-4">
                        <a href="/quizzes/{{ $quiz->id }}" class="hover:underline">
                            <p>{{ $quiz->name }}</p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/categories/{{ $quiz->category->name }}" class="hover:underline">
                            <p>{{ $quiz->category->name }}</p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/users/{{ $quiz->user->id }}" class="hover:underline">
                            <p>{{ $quiz->user->name }}</p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/quizzes/{{ $quiz->id }}/play" class="text-blue-400 hover:underline">
                            <p>Play</p>
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
</x-layout>
