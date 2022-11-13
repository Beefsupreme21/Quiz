<x-layout>
    <div x-data="game">
        <div class="w-2/5 m-auto">
            <div class="my-4">
                <span>Quizzes > </span>
                <span x-text="quiz.category.name"></span>
                <span> > </span>
                <span x-text="quiz.name"></span>
            </div>
            <div x-show="questionNumber" class="flex justify-between my-6">
                <div>Question <span x-text="currentQuestionNumber"></span><span> out of </span><span x-text="quiz.category.questions.length"></span></div>
                <div>Correct Answers <span x-text="CorrectAnswers.length"></span><span> of </span><span x-text="currentQuestionNumber"></span></div>
            </div>
            <div class="text-center">
                <template x-if="currentQuestionNumber === -1">
                    <button x-on:click="start" class="border border-gray-500 px-4 py-2 text-xl rounded-xl hover:bg-green-500 hover:text-black">Start Quiz</button>
                </template>
            </div>

            <template x-if="currentQuestionNumber >= 0 && currentQuestionNumber < quiz.category.questions.length">
                <div>
                    <p x-text="currentQuestion.text" class="text-center text-2xl"></p>
                    <div class="grid grid-cols-2 gap-8 my-6">
                        <template x-for="answer in currentQuestion.answers">
                            <button @click.prevent="makeSelection(answer, currentQuestion)" class="border border-red-500 py-3 rounded-xl hover:bg-red-800">
                                <span x-text="answer.text"></span>
                            </button>
                        </template>
                    </div>
                </div>
            </template>
            <template x-if="currentQuestionNumber == quiz.category.questions.length">
                <button x-on:click="showResults">
                    See Results
                </button>
            </template>
            <div x-show="results" class="border border-gray-500">
                <template x-for="answer in answered">
                    <div>
                        <template x-if="answer.category_id">
                            <div x-text="answer.text"></div>
                        </template>
                        <template x-if="answer.is_correct == 1">
                            <div x-text="answer.text" class="text-green-500"></div>
                        </template>
                        <template x-if="answer.is_correct == 0">
                            <div x-text="answer.text" class="text-red-500"></div>
                        </template> 
                    </div>
                </template>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                quiz: {!! $quiz !!},
                answered: [],
                currentQuestionNumber: -1,
                results: false, 
                questionNumber: false, 

                get currentQuestion() {
                    return this.quiz.category.questions.filter((question, index) => {
                        if (index == this.currentQuestionNumber) {
                            return question;
                        }
                    })[0];
                },

                makeSelection(answer, question) {
                    this.answered.push(answer, question);
                    if (this.currentQuestionNumber < this.quiz.category.questions.length) {
                        this.currentQuestionNumber++;
                    }
                },

                start() {
                    this.currentQuestionNumber++;
                    this.questionNumber = true;
                },

                showResults() {
                    console.log(this.answered, this.results);
                    this.results = !this.results;
                },

                get CorrectAnswers() {
                    return this.answered.filter(($answer, $key) => {
                        if ($answer['is_correct'] == 1) {
                            return $answer;
                        }
                    });
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