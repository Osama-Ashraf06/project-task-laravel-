<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add new student</title>
</head>
<body>
    <h2>Add new student</h2>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ui>
           <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>
    <form action="<?php echo e(route('students.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>name</label>
        <input type="text" name="name">

         <label>email</label>
         <input type="email" name="email">

        <label>phone</label>
        <input type="text" name="phone">

        <label>course</label>
        <select name="course_id">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($course->id); ?>">
                <?php echo e($course->title); ?>

            </option>        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <button type="submit">Add student</button>


    </form>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\training-center\resources\views/students/create.blade.php ENDPATH**/ ?>