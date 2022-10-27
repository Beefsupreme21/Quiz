<!DOCTYPE html>
    <head>
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>

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

    </body>

    
    
</html>
<?php /**PATH C:\xampp\Projects\Quiz\resources\views/welcome.blade.php ENDPATH**/ ?>