<x-layout>

    <body class="w-2/3 mx-auto mt-24 bg-black">
        <div x-data="game()">
            <div class="border-blue-500">

                    @foreach ($questions as $question)
                        <div class="bg-gray-500 rounded-lg min-h-[100px]">
                            <button>{{ $question->question }}</button>
                        </div>

                        
                <div class="flex flex-wrap rounded-lg min-h-[200px]">

                        @foreach ($answers as $answer)

                            @if ($answer == $question->answer)
                                <div class="bg-green-500 rounded-lg min-h-[100px] w-1/2">
                                    <a href="/{{ $question->id }}/{{ $answer }}">{{ $answer }}</a>
                                </div>
                            @else
                                <div class="bg-red-500 rounded-lg min-h-[100px] w-1/2">
                                    <a href="/{{ $question->id }}/{{ $answer }}">{{ $answer }}</a>
                                </div>
                            @endif
                             
                        @endforeach

                    @endforeach
                        
                </div>

                @if(session()->has('message'))

                    <div class="bg-white">
                        {{session('message')}}
                    </div>
                @endif





                <template x-for='answer in answers'>
                    <div class="bg-yellow-500 rounded-lg min-h-[100px]">
                        <button x-text="answer.answer" x-click="checkAnswer(answer)">Hi</button>
                    </div>
                </template>
                
                <a href="/pagelink">Link name/Embedded Button</a>

                {{-- <a href="{{ action('QuestionController@test') }}">Link name/Embedded Button</a> --}}

                {{-- <div class="bg-red-500 rounded-lg min-h-[100px]">Answer 2</div>
                <div class="bg-green-500 rounded-lg min-h-[100px]">Answer 3</div>
                <div class="bg-purple-500 rounded-lg min-h-[100px]">Answer 4</div> --}}
            </div>
        </div>

    </body>
    
</x-layout>
