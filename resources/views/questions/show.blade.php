<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">{{ $question->text }}</h1>
        </div>
        <div class="flex justify-between text-xl pb-2">
            <a href="/questions/{{ $question->id }}/edit">
                <button class="bg-gray-900 border border-gray-700 px-2 py-1 hover:bg-gray-700 hover:underline">Edit</button>
            </a>
            <form method="POST" action="/questions/{{ $question->id }}">
                @csrf
                @method('DELETE')                
                <button class="bg-gray-900 border border-gray-700 px-2 py-1 hover:bg-gray-700 hover:underline">
                    Delete
                </button>
            </form>
        </div>
    </div>
</x-layout>
