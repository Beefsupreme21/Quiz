<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-6 px-8">
        <div class="text-center">
            <h1 class="text-4xl mb-8">Add New User</h1>
        </div>
        <form action="/users" method="POST">
            <?php echo csrf_field(); ?>
            <div class="text-center">
                <label class="mr-2 text-lg">Name</label>
                <input type="text" name="name" class="border border-black bg-gray-800 px-2 py-1 outline-none" value="">
                <input type="submit" value="Submit" class="border border-black bg-gray-500 px-2 py-1">
            </div>
        </form> 
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\Projects\Quiz\resources\views/users/create.blade.php ENDPATH**/ ?>