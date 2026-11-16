<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>All courses</title>
</head>
<body>
    <h2>All Courses</h2>
    <?php if(session('success')): ?>
    <div class="alert alert-success">
    <?php echo e(session('success')); ?>    
    </div>
    <?php endif; ?>

     <?php if(session('error')): ?>
    <div class="alert alert-danger">
    <?php echo e(session('error')); ?>    
    </div>
    <?php endif; ?>


    <div class="container"><table class="table">
  <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">price($)</th>
      <th scope="col">duration (hours)</th>
      <th scope="col">numbers of student</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($course['title']); ?></td>
      <td><?php echo e($course['description']); ?></td>
      <td><?php echo e($course['price']); ?></td>
      <td><?php echo e($course['duration']); ?></td>
      <td><?php echo e($course['students_count']); ?></td>
      <td><a href="<?php echo e(route('courses.edit',$course->id)); ?>">Edit</a>
      <form
      action="<?php echo e(route('courses.destroy',$course->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit">Delete</button></form></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  </tbody>
</table> 
 <a href="<?php echo e(route('courses.create')); ?>"
    class="btn btn-primary">
    Add new course</a>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\training-center\resources\views/courses/index.blade.php ENDPATH**/ ?>