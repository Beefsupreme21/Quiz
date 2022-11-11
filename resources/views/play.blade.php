<x-layout>
    <div x-data="game">
        <div class="w-2/5 m-auto text-center">
            <div class="my-8 text-xl" x-text="quiz.name"></div>
            <div class="my-8 text-xl" x-text="quiz.category.name"></div>
            <template x-if="currentQuestionNumber === -1">
                <button @click="start">Get Started</button>
            </template>

            <template x-if="currentQuestionNumber >= 0 && currentQuestionNumber < quiz.category.questions.length">
                <div>
                    <p x-text="currentQuestion.text"></p>
                    <template x-for="answer in currentQuestion.answers">
                        <button @click.prevent="makeSelection(answer)">
                            <span x-text="answer.text"></span>
                        </button>
                    </template>
                </div>
            </template>

            <template x-else>
                Done
            </template>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                quiz: {!! $quiz !!},
                answered: [],
                currentQuestionNumber: -1,

                get currentQuestion() {
                    return this.quiz.category.questions.filter((question, index) => {
                        if (index == this.currentQuestionNumber) {
                            return question;
                        }
                    })[0];
                },

                makeSelection(answer) {
                    // console.log(this.currentQuestionNumber, this.quiz.category.questions.length);
                    this.answered.push(answer);
                    if (this.currentQuestionNumber < this.quiz.category.questions.length) {
                        this.currentQuestionNumber++;
                    }
                },

                start() {
                    this.currentQuestionNumber++;
                },
            }))
        })
    </script>


</x-layout>







{{-- <script>
    save() {
        console.log(this.answers);
    }
</script> --}}



{{-- <template x-for="card in cards">
    <div :style="'background: ' + card.color" 
        @click="checkAnswer(card)"
    >
    </div>
</template>  --}}



{{-- Alpine.data('game', () => ({
    cards: [
        { color: 'blue', selected: false, is_correct: true },                
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
})) --}}













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