
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\Projects\Quiz\resources\views/home.blade.php ENDPATH**/ ?>