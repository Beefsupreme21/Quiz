<!DOCTYPE html>
    <head>
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>

    <body class="w-2/3 mx-auto mt-24 bg-black">
        <div x-data="game()">
            <div class="border-blue-500">

                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-gray-500 rounded-lg min-h-[100px]">
                            <button><?php echo e($question->question); ?></button>
                        </div>

                        
                <div class="flex flex-wrap rounded-lg min-h-[200px]">

                        <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if($answer == $question->answer): ?>
                                <div class="bg-green-500 rounded-lg min-h-[100px] w-1/2">
                                    <a href="/<?php echo e($question->id); ?>/<?php echo e($answer); ?>"><?php echo e($answer); ?></a>
                                </div>
                            <?php else: ?>
                                <div class="bg-red-500 rounded-lg min-h-[100px] w-1/2">
                                    <a href="/<?php echo e($question->id); ?>/<?php echo e($answer); ?>"><?php echo e($answer); ?></a>
                                </div>
                            <?php endif; ?>
                             
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                </div>

                <?php if(session()->has('message')): ?>

                    <div class="bg-white">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>





                <template x-for='answer in answers'>
                    <div class="bg-yellow-500 rounded-lg min-h-[100px]">
                        <button x-text="answer.answer" @click="checkAnswer(answer)">Hi</button>
                    </div>
                </template>
                
                <a href="/pagelink">Link name/Embedded Button</a>

                

                
            </div>
        </div>

    </body>
    
</html>
<?php /**PATH C:\xampp\Projects\Quiz\resources\views/index.blade.php ENDPATH**/ ?>