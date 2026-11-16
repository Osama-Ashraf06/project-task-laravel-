<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>
    <h2>Students</h2>
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
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">course</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($student['Name']); ?></td>
      <td><?php echo e($student['Email']); ?></td>
      <td><?php echo e($student['Phone']); ?></td>
      <td><?php echo e($student->course->title); ?></td>
      <td><a href="<?php echo e(route('students.edit',$student->id)); ?>">Edit</a>
      <form
      action="<?php echo e(route('students.destroy',$student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit">Delete</button>
       </form>
      </td>
     </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table> 
 <a href="<?php echo e(route('students.create')); ?>"
    class="btn btn-primary">
    Add new student</a>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\training-center\resources\views/students/index.blade.php ENDPATH**/ ?>