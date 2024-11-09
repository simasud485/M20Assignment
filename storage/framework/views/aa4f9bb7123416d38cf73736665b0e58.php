<?php $__env->startSection('content'); ?>
    <h2>Create New Product</h2>

    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data" class="mt-4">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="product_id" class="form-label">Product ID:</label>
            <input type="text" id="product_id" name="product_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Product Image:</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number" id="stock" name="stock" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSTAD\laravel-projects\product-management-system\resources\views/products/create.blade.php ENDPATH**/ ?>