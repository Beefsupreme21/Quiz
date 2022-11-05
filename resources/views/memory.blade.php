<x-layout>
    <div x-data="game">
        <button @click="toggle">Toggle Content</button>
        <div x-show="open">
            Content...
        </div>
        <template x-for="category in categories">
            <div>
                <div x-text="category.name"></div>
                <template x-for="question in category.questions">
                    <div x-text="question.text"></div>
                </template>
            </div>
        </template>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                open: false,
                categories: {!! $categories !!},

                toggle() {
                    this.open = ! this.open
                },
            }))
        })
    </script>
</x-layout>

