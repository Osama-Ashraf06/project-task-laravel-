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
    @if (session('success'))
    <div class="alert alert-success">
    {{session('success')}}    
    </div>
    @endif

     @if (session('error'))
    <div class="alert alert-danger">
    {{session('error')}}    
    </div>
    @endif


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
    @foreach ($courses as $course)
    <tr>
      <td>{{$course['title']}}</td>
      <td>{{$course['description']}}</td>
      <td>{{$course['price']}}</td>
      <td>{{$course['duration']}}</td>
      <td>{{$course['students_count']}}</td>
      <td><a href="{{route('courses.edit',$course->id)}}">Edit</a>
      <form
      action="{{route('courses.destroy',$course->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button></form></td>
    </tr>
    @endforeach


  </tbody>
</table> 
 <a href="{{route('courses.create')}}"
    class="btn btn-primary">
    Add new course</a>
</div>

</body>
</html>