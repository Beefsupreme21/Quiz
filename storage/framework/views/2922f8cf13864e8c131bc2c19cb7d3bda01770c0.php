<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Questions</h1>
            <a href="/questions/create" class="hover:underline"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New Question</button></a>
        </div>
        <table class="table-auto m-auto">
            <thead> 
                <tr class="border-b border-gray-600 border-collapse text-left">
                    <th class="px-4">Question</th>
                    <th class="px-4">Category</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td class="px-4">
                        <a href="/questions/<?php echo e($question->id); ?>">
                            <p class="hover:underline"><?php echo e($question->text); ?></p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/questions/<?php echo e($question->id); ?>">
                            <p class="hover:underline"><?php echo e($question->category->name); ?></p>
                        </a>
                    </td>
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
<?php endif; ?><?php /**PATH C:\xampp\Projects\Quiz\resources\views/questions/index.blade.php ENDPATH**/ ?>