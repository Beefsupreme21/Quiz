<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div x-data="game">
        <div x-data="{ quiz: <?php echo e($quiz->category); ?>, questions: <?php echo e($quiz->category->questions); ?> }">
            <div><?php echo e($quiz->category->name); ?></div>
            <div><?php echo e($quiz->name); ?></div>

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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>







     
    












<?php /**PATH C:\xampp\Projects\Quiz\resources\views/play.blade.php ENDPATH**/ ?>