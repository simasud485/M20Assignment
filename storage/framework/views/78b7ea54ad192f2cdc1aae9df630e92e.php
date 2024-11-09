<?php $__env->startSection('content'); ?>
    <h2 class="mb-4">Product List</h2>

    <form action="<?php echo e(route('products.index')); ?>" method="GET" class="row g-3 mb-4">
        <div class="col-auto">
            <input type="text" name="search" class="form-control" placeholder="Search by ID or description"
                value="<?php echo e(request()->search); ?>">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Id</th>
                <th><a href="?sort=name&direction=<?php echo e(request('direction') == 'asc' ? 'desc' : 'asc'); ?>">Product Name</a></th>
                <th>Description</th>
                <th><a href="?sort=price&direction=<?php echo e(request('direction') == 'asc' ? 'desc' : 'asc'); ?>">Price</a></th>
                <th>Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->product_id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td>$<?php echo e(number_format($product->price, 2)); ?></td>
                    <td><?php echo e($product->stock); ?></td>
                    <td>
                        <?php if($product->image): ?>
                            <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" width="50">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-info btn-sm">View</a>
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST"
                            style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <?php echo e($products->links('pagination::bootstrap-5')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSTAD\laravel-projects\product-management-system\resources\views/products/index.blade.php ENDPATH**/ ?>