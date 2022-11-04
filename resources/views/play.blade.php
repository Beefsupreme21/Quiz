<x-layout>
    <div x-data="game">
        <div x-data="{ quiz: {{ $quiz->category }}, questions: {{ $quiz->category->questions }} }">
            <div>{{ $quiz->category->name }}</div>
            <div>{{ $quiz->name }}</div>

            <button @click="toggle">Toggle Answers</button>

            <div>
                <template x-for="question in questions">
                    <div x-text="question.text" class="h-32 cursor-pointer"></div>
                </template>
                <template x-for="answer in question.answers">
                    <div x-text="answer.text" class="h-32 cursor-pointer"></div>
                </template>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                open: false,
                answers: [],
     
                toggle() {
                    this.open = ! this.open
                },
            }))
        })
    </script>
</x-layout>




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
        <div class="px-10">
            <template x-for="text in questions">
                <div 
                    x-text="text"
                    class="h-32 cursor-pointer" 
                >
                </div>
            </template>
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





{{-- <div x-data="quiz">
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






{{-- <script>
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
</script> --}}