<x-layout>
    <style>
        .correct {
            background-color: green;
        }
        .incorrect {
            background-color: red;
        }
        .unselected {
            background-color: gray;
        }
    </style>
    <div x-data="game">
        <div class="w-3/5 m-auto">
            <div class="my-4">
                <span>Quizzes > </span>
                <span x-text="quiz.category.name"></span>
                <span> > </span>
                <span x-text="quiz.name"></span>
            </div>
            <form method="POST" action="/quizzes/{{ $quiz->id }}/store">
                @csrf
                <div class="w-3/5 m-auto">
                    <div class="text-center">
                        <template x-if="currentQuestionNumber === -1">
                            <button x-on:click="start" class="border border-gray-500 px-4 py-2 text-xl rounded-xl hover:bg-green-500 hover:text-black">Start Quiz</button>
                        </template>
                    </div>
        
                    <template x-if="currentQuestionNumber >= 0 && currentQuestionNumber < quiz.category.questions.length">
                        <div class="border border-gray-600 p-8 rounded-xl">
                            <div x-show="questionNumber" class="flex justify-between mb-6">
                                <div>Question <span x-text="currentQuestionNumber"></span><span> out of </span><span x-text="quiz.category.questions.length"></span></div>
                                <div>Correct Answers <span x-text="CorrectAnswers.length"></span><span> of </span><span x-text="currentQuestionNumber"></span></div>
                            </div>
                            <div x-text="currentQuestion.text" class="text-center text-2xl"></div>
                            <div class="grid grid-cols-2 gap-8 my-6">
                                <template x-for="answer in currentQuestion.answers">
                                    <button @click.prevent="makeSelection(answer, currentQuestion)" x-bind:class="{ 'unselected': unselected, 'correct': correct, }" class="border border-red-500 py-3 rounded-xl hover:bg-red-800">
                                        <span x-text="answer.text"></span>
                                    </button>
                                </template>
                            </div>
                        </div>
                    </template>
                    <template x-if="currentQuestionNumber == quiz.category.questions.length">
                        <div>
                            <button type="submit">
                                Submit
                            </button>
                        </div>
                    </template>
                </div>
            </form>
            <div>
                <template x-if="currentQuestionNumber == quiz.category.questions.length">
                    <div>
                        <button x-on:click="showResults">
                            See Results
                        </button>
                    </div>
                </template>
            </div>

            <div x-show="results" class="border border-gray-500 p-8">
                <template x-for="answer in answered">
                    <div>
                        <template x-if="answer.category_id">
                            <div x-text="answer.text"></div>
                        </template>
                        <template x-if="answer.is_correct == 1">
                            <div x-text="answer.text" class="text-green-500">
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
                unselected: true,
                correct: false, 
                incorrect: false, 

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
                        this.unselected = false;
                        this.correct = true;
                        setTimeout(() => {
                            this.unselected = true;
                            this.correct = false;
                            this.currentQuestionNumber++;
                        }, 2000);

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