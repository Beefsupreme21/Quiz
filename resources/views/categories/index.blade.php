<x-layout>
    <div>
        <a href="/categories/create"><p>Create New</p></a>
    </div>
    <div>
        @foreach ($categories as $category)
            <a href="/categories/{{ $category->name }}">
                <p>{{ $category->name }}</p>
            </a>
        @endforeach
    </div>
</x-layout>