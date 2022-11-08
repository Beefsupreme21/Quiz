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
        <button @click="toggle">Toggle Content</button>
        <div x-show="open">
            Content...
        </div>
        <template x-for="category in categories">
            <div class="my-8">
                <div x-text="category.name"></div>
                <template x-for="question in category.questions">
                    <div class="mt-4">
                        <div x-text="question.text"></div>
                        <template x-for="answer in question.answers">
                            <div>
                                <label x-text="answer.text" for="answer.id"></label>
                                <input 
                                    type="radio"
                                    :id="answer.id"
                                    :name="question.id"
                                >

                            </div>
                        </template>
                    </div>
                </template>
            </div>
        </template>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                open: false,
                categories: <?php echo $categories; ?>,

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
<?php /**PATH C:\xampp\Projects\Quiz\resources\views/home.blade.php ENDPATH**/ ?>