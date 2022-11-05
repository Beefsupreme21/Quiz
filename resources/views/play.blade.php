<x-layout>
    <div x-data="game">
        <div>
            <div x-text="quiz.category.name"></div>
            <div x-text="quiz.name"></div>
            <div>
                <template x-for="question in quiz.category.questions">
                    <div>
                        <div x-text="question.text"></div>
                        <div class="flex justify-between">
                            <template x-for="answer in question.answers">
                                <div class="mb-2">
                                    <button x-text="answer.text + answer.is_correct" 
                                            :style="'background: ' + color"
                                            class="w-64 h-32"
                                            @click="checkAnswer(answer)"
                                        >
                                    </button>
                                </div>
                            </template>
                        </div>

                    </div>
                </template>
            </div>
        </div>

        <button @click="toggle">Toggle Answers</button>

        <div x-show="open">
            Content...
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                open: false,
                quiz: {!! $quiz !!},
                color: 'blue',

                checkAnswer(answer) {
                    if (answer.is_correct == 1) {
                        color = 'green'
                    }
                    else {
                        color = 'red'
                    }
                }, 
     
                toggle() {
                    this.open = ! this.open
                },
            }))
        })
    </script>
</x-layout>









{{-- 
<div x-data="quiz">
    <template x-for="question in questions">
        <p x-text="question.question"></p>
        <template x-for="answer in question.answers">
            <button @click="addAnswer(question.id, answer.id)" x-text="answer.text"></button>
        </template>
    </template>
    <template x-if="answers.length === questions.length">
        <button @click="save">Save</button>
    </template>
</div>

<script>

Alpine.data('quiz', () => ({
    questions: {{ $category->questions }},
    answers: [],

    addAnswer(questionId, answerId) {
        this.answers.push({
            question_id: questionId,
            answer_id: answerId,
        })
    },

    save() {
        console.log(this.answers);
    }
}))
</script> --}}


















{{-- <x-layout>
    <div x-data="game" class="text-white">
        {{ $category->name }}
        <div class="px-10 flex items-center justify-center min-h-screen text-black">
            <div class="flex-1 grid grid-cols-2 gap-10">
                <template x-for="card in cards">
                    <div :style="'background: ' + card.color" 
                        x-text="card.color"
                        class="h-32 cursor-pointer" 
                        @click="checkAnswer(card)"
                    >
                    </div>
                </template> 
            </div>
        </div>
    </div> --}}


     
    {{-- <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                cards: [
                    { color: 'blue', selected: false, is_correct: true },
                    { color: 'yellow', selected: false, is_correct: false },
                    { color: 'purple', selected: false, is_correct: false },
                    { color: 'cyan', selected: false, is_correct: false },                
                ],
                
                checkAnswer(card) {
                    if (card.is_correct == true) {
                        card.selected = true
                        card.color = 'green'
                    }
                    else {
                        card.color = 'red'
                    }
                }, 
            }))
        });
    </script>
</x-layout> --}}












<script>
    Alpine.data('game', () => ({
        cards: [
            { color: 'blue', selected: false, is_correct: true },
            { color: 'yellow', selected: false, is_correct: false },
            { color: 'purple', selected: false, is_correct: false },
            { color: 'cyan', selected: false, is_correct: false },                
        ],

        checkAnswer(card) {
            if (card.is_correct == true) {
                card.selected = true
                card.color = 'green'
            }
            else {
                card.color = 'red'
            }
        }, 
    }));
</script>