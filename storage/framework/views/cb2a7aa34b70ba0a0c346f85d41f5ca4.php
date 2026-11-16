<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add course</title>
</head>
<body>
    <h2>Add course</h2>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ui>
           <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>
    <form action="<?php echo e(route('courses.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Course Title</label>
        <input type="text" name="title">

         <label>Description</label>
         <input type="text" name="description">

        <label>Price($)</label>
        <input type="number" name="price">

        <label>Duration (hours)</label>
        <input type="number" name="duration">

        <button type="submit">Add Course</button>


    </form>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\training-center\resources\views/courses/create.blade.php ENDPATH**/ ?>