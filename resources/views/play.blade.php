<x-layout>
    <div x-data="game">
        <div class="w-2/5 m-auto text-center">
            <div class="my-8 text-xl" x-text="quiz.name"></div>
            <div class="my-8 text-xl" x-text="quiz.category.name"></div>
            <template x-for="question in quiz.category.questions">
                <div>
                    <div class="my-8 text-xl" x-text="question.text"></div>
                    <div class="flex-1 grid grid-cols-2 gap-10 mb-16">
                        <template x-for="answer in question.answers">
                            <div>
                                <label 
                                    x-text="answer.text" 
                                    x-bind:for="answer.id" 
                                    class="py-4 px-8 rounded-lg border border-red-500 cursor-pointer" 
                                    x-on:click="addAnswer(question.id, answer.id)"

                                >
                                </label>
                                <input 
                                    type="radio"
                                    id="answer.id"
                                    name="question.id"
                                    value="answer.text"
                                >
                                {{-- <button x-text="answer.text" 
                                        x-bind:class="answer.is_correct ? 'bg-green-900' : 'bg-red-700' "
                                        @click="addAnswer(question.id, answer.id)"
                                    >
                                </button> --}}
                            </div>
                        </template>
                    </div>
                    {{-- <div>
                        <button x-on:click="addAnswer(question.id, answer.id)" class="py-2 px-4 rounded-lg border border-gray-600">
                            Submit
                        </button>
                    </div> --}}
                </div>
            </template>


            {{-- <template x-if="answered.length === quiz.category.questions.length">
                <button @click="save">Save</button>
            </template> --}}
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                quiz: {!! $quiz !!},
                answered: [],

                addAnswer(questionId, answerId) {
                    if (this.answered.includes(questionId, answerId)) {
                        alert('hey');
                    }
                    
                    else {
                        this.answered.push({
                        question_id: questionId,
                        answer_id: answerId,
                    })

                        console.log(this.answered)
                    }
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