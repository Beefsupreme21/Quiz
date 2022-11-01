<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="border border-gray-500 w-1/3 mt-6 mx-auto py-6 px-8 text-center">
        <div>
            <h1 class="text-4xl mb-8">Edit Question</h1>
        </div>
        <form action="/questions/<?php echo e($question->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-2">
                <label class="mr-2 text-lg">Question</label>
                <input type="text" name="text" class="border border-black bg-gray-800 px-2 py-1 outline-none" value="<?php echo e($question->text); ?>">
            </div>
            <div class="mb-2">
                <label class="mr-2 text-lg">Select Category</label>
                <select name="category_id" class="border border-black bg-gray-800 px-2 py-1">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"
                        <?php if($category->id == $question->category->id): ?>
                        " selected>
                        <?php else: ?>
                        ">
                        <?php endif; ?>
                        <?php echo e($category->name); ?>

                    </option>                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>              
            </div>
            <input type="submit" value="Submit" class="border border-black bg-gray-500 px-2 py-1">
        </form> 
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\Projects\Quiz\resources\views/questions/edit.blade.php ENDPATH**/ ?>