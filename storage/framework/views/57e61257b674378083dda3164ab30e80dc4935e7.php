<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="border border-gray-500 w-2/3 mt-6 mx-auto py-4 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-4">Quizzes</h1>
            <a href="/quizzes/create"><button class="bg-gray-900 border border-gray-700 mb-6 px-2 py-1 hover:bg-gray-700 hover:underline">Add New Quiz</button></a>
        </div>

        <table class="m-auto w-full">
            <thead> 
                <tr class="border-b border-gray-600 border-collapse text-left">
                    <th class="px-4">Name</th>
                    <th class="px-4">Category</th>
                    <th class="px-4">Created by</th>
                    <th class="px-4"></th>
                </tr>
            </thead>
            <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td class="px-4">
                        <a href="/quizzes/<?php echo e($quiz->id); ?>" class="hover:underline">
                            <p><?php echo e($quiz->name); ?></p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/categories/<?php echo e($quiz->category->name); ?>" class="hover:underline">
                            <p><?php echo e($quiz->category->name); ?></p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/users/<?php echo e($quiz->user->id); ?>" class="hover:underline">
                            <p><?php echo e($quiz->user->name); ?></p>
                        </a>
                    </td>
                    <td class="px-4">
                        <a href="/quizzes/<?php echo e($quiz->id); ?>/play" class="text-blue-400 hover:underline">
                            <p>Play</p>
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
<?php endif; ?>
<?php /**PATH C:\xampp\Projects\Quiz\resources\views/quizzes/index.blade.php ENDPATH**/ ?>