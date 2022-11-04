<x-layout>
    <div x-data="{ categories: {{ $categories }} }">
        <div x-data="game">
            <button @click="toggle">Toggle Content</button>
            <div x-show="open">
                Content...
            </div>
            <template x-for="category in categories">
                <div x-text="category.name"></div>
            </template>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                open: false,
                // categories: {{ $categories }},
     
                toggle() {
                    this.open = ! this.open
                },
            }))
        })
    </script>
</x-layout>

