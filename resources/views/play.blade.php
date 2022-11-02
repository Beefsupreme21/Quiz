<x-layout>
    <div x-data="game()" class="px-10 flex items-center justify-center min-h-screen text-black">
        <div class="flex-1 grid grid-cols-2 gap-10">
            <template x-for="card in cards">
                <div :style="'background: ' + card.color" 
                    class="h-32 cursor-pointer" 
                    @click="checkAnswer(card)"
                >
                </div>
            </template>
        </div>
    </div>

    @foreach ($questions as $question) 
        {{ $question->text }}
    @endforeach

    <script>
        function game() {
            return {
                cards: [
                    { color: 'blue', selected: false, is_correct: true },
                    { color: 'yellow', selected: false, is_correct: false },
                    { color: 'purple', selected: false, is_correct: false },
                    { color: 'cyan', selected: false, is_correct: false },                
                ],

                checkAnswer(card) {
                    if (card.is_correct == true) {
                        card.color = 'green'
                    }
                    else {
                        card.color = 'red'
                    }
                }
            }
        };
    </script>

</x-layout>








<!-- 

<x-layout>
    <body class="w-2/3 mx-auto mt-24">
        <div x-data="game()">
            <div class="border-blue-500">
                <div class="bg-blue-500 rounded-lg min-h-[200px]">Question</div>

                <template x-for='answer in answers'>
                    <div class="bg-yellow-500 rounded-lg min-h-[100px]">
                        <button x-text="answer.answer" @click="checkAnswer(answer)">Hi</button>
                    </div>
                </template>

                <div class="bg-red-500 rounded-lg min-h-[100px]">Answer 2</div>
                <div class="bg-green-500 rounded-lg min-h-[100px]">Answer 3</div>
                <div class="bg-purple-500 rounded-lg min-h-[100px]">Answer 4</div>
            </div>
        </div>

    </body> -->


    
<!-- </x-layout>
