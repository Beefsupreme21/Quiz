<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="border border-gray-500 w-1/2 mt-6 mx-auto p-4">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Answers</h1>
            <a href="/answers/create"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New Answer</button></a>
        </div>
        <table class="table-auto m-auto">
            <thead> 
                <tr class="border-b border-gray-600 border-collapse text-left">
                    <th class="px-4">Answers</th>
                    <th class="px-4">Question</th>
                    <th class="px-4">Correct/Incorrect</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td class="px-4">
                        <a href="/answers/<?php echo e($answer->id); ?>">
                            <p class="hover:underline"><?php echo e($answer->text); ?></p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/answers/<?php echo e($answer->id); ?>">
                            <p class="hover:underline"><?php echo e($answer->question->text); ?></p>
                        </a>
                    </td>
                    <?php if( $answer->is_correct == 0): ?>
                    <td class="px-4">Incorrect</td>
                    <?php else: ?>
                    <td class="px-4">Correct</td>
                    <?php endif; ?>
                </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\Projects\Quiz\resources\views/answers/index.blade.php ENDPATH**/ ?>