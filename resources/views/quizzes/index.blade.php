<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Quizzes</h1>
            <a href="/quizzes/create"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New Quiz</button></a>
        </div>
        <div class="flex justify-between border-b border-gray-700 text-xl pb-2 mb-2">
            <p>Name</p>
            <p>Category</p>
            <p>Created by</p>
        </div>
        @foreach ($quizzes as $quiz)
        <div class="flex justify-between">
            <a href="/quizzes/{{ $quiz->id }}" class="hover:underline">
                <p>{{ $quiz->name }}</p>
            </a>
            <p>{{ $quiz->category->name }}</p>
            <p>{{ $quiz->user->name }}</p>
        </div>
        @endforeach
    </div>
</x-layout>