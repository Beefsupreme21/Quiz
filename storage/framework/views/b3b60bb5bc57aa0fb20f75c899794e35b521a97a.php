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
            <h1 class="text-4xl mb-4"><?php echo e($category->name); ?></h1>
        </div>
        <div class="flex justify-between text-xl pb-2">
            <a href="/categories/<?php echo e($category->name); ?>/edit">
                <button class="bg-gray-900 border border-gray-700 px-2 py-1 hover:bg-gray-700 hover:underline">Edit</button>
            </a>
            <form method="POST" action="/categories/<?php echo e($category->name); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>                
                <button class="bg-gray-900 border border-gray-700 px-2 py-1 hover:bg-gray-700 hover:underline">
                    Delete
                </button>
            </form>
        </div>

        <div>
            <h1 class="text-2xl mb-4">Questions</h1>
        </div>
        <?php $__currentLoopData = $category->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($question->text); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\Projects\Quiz\resources\views/categories/show.blade.php ENDPATH**/ ?>