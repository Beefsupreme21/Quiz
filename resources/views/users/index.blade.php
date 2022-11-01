<x-layout>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Users</h1>
            <a href="/users/create"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New User</button></a>
        </div>
        <div class="flex justify-between border-b border-gray-700 text-xl pb-2 mb-2">
            <p>Name</p>
        </div>
        @foreach ($users as $user)
        <div class="flex justify-between">
            <a href="/users/{{ $user->id }}" class="hover:underline">
                <p>{{ $user->name }}</p>
            </a>
        </div>
        @endforeach
    </div>
</x-layout>