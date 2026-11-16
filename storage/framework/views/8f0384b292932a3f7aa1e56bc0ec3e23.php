<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit student</title>
</head>
<body>
    <h2>Edit student</h2>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ui>
           <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>
    <form action="<?php echo e(route('students.update',$student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label>Name</label>
        <input type="text" name="name"
        value="<?php echo e($student->Name); ?>">

         <label>Email</label>
         <input type="text" name="email"
         value="<?php echo e($student->Email); ?>">

        <label>phone</label>
        <input type="number" name="phone"
        value="<?php echo e($student->Phone); ?>">

        <label>Course</label>
        <select name="course_id">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($course->id); ?>"
                    <?php echo e($student->course->id==$course->id? 'selected' : ''); ?>>
                    <?php echo e($course->title); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <button type="submit">Update Student</button>


    </form>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\training-center\resources\views/students/edit.blade.php ENDPATH**/ ?>