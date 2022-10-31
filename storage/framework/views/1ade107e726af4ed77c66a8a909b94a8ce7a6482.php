<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div>
        <a href="/questions/<?php echo e($question->id); ?>">
            <button class="text-blue-500 hover:underline">
                <?php echo e($question->text); ?></p>
            </button>
        </a>
    </div>
    <div class="mb-2">
        <a href="/questions/<?php echo e($question->id); ?>/edit">
            <button class="text-cyan-600 hover:underline pr-3">
                Edit
            </button>
        </a>
    </div>

    <form method="POST" action="/questions/<?php echo e($question->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="text-red-500 hover:underline">
            Delete
        </button>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>




<?php /**PATH C:\xampp\Projects\Quiz\resources\views/questions/show.blade.php ENDPATH**/ ?>