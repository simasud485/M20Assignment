<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="container my-4">
        <h1>Product Management System</h1>
        <nav class="my-3">
            <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">Products</a>
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success">Create Product</a>
        </nav>
        <hr>
    </header>

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php /**PATH D:\OSTAD\laravel-projects\product-management-system\resources\views/layouts/app.blade.php ENDPATH**/ ?>