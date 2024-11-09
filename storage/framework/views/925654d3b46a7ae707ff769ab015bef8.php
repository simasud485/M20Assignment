<?php $__env->startSection('content'); ?>
    <h2>Product Details</h2>
    <p><strong>Product ID:</strong> <?php echo e($product->product_id); ?></p>
    <p><strong>Name:</strong> <?php echo e($product->name); ?></p>
    <p><strong>Description:</strong> <?php echo e($product->description); ?></p>
    <p><strong>Price:</strong> $<?php echo e($product->price); ?></p>
    <p><strong>Stock:</strong> <?php echo e($product->stock); ?></p>

    <?php if($product->image): ?>
       <p><strong>Image:</strong> <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" width="200"></p>
    <?php endif; ?>


    <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">Back to Products</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSTAD\laravel-projects\product-management-system\resources\views/products/show.blade.php ENDPATH**/ ?>