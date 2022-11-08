<x-layout>
    <div x-data="game">
        <button @click="toggle">Toggle Content</button>
        <div x-show="open">
            Content...
        </div>
        <template x-for="category in categories">
            <div class="my-8">
                <div x-text="category.name"></div>
                <template x-for="question in category.questions">
                    <div class="mt-4">
                        <div x-text="question.text"></div>
                        <template x-for="answer in question.answers">
                            <div>
                                <label x-text="answer.text" for="answer.id"></label>
                                <input 
                                    type="radio"
                                    :id="answer.id"
                                    :name="question.id"
                                >

                            </div>
                        </template>
                    </div>
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
