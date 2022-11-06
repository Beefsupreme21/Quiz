<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <script>
        .selected {
            background-color: red;
        }
    </script>
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
                                    for="answer.id" 
                                    class="py-4 px-8 rounded-lg border border-red-500 cursor-pointer" 
                                    x-bind:class="{ 'bg-red-700': !answer.id }"  
                                    x-on:click="addAnswer(question.id, answer.id), answer.id = !answer.id"
                                    >
                                    

                                </label>
                                <input 
                                type="radio"
                                id="answer.id"
                                name="question.id"
                            >
                                
                            </div>
                        </template>
                    </div>
                </div>
            </template>
            <template x-if="answered.length === quiz.category.questions.length">
                <button @click="save">Save</button>
            </template>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                quiz: <?php echo $quiz; ?>,
                answered: [],
                selected: false,

                addAnswer(questionId, answerId) {
                    this.answered.push({
                        question_id: questionId,
                        answer_id: answerId,
                    })
                    console.log(this.answered)
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





























<script>
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
</script><?php /**PATH C:\xampp\Projects\Quiz\resources\views/play.blade.php ENDPATH**/ ?>