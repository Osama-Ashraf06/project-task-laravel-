<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit course</title>
</head>
<body>
    <h2>Edit course</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ui>
           @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
  </div>
@endif
    <form action="{{route('courses.update',$course->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Course Title</label>
        <input type="text" name="title"
        value="{{$course->title}}">

         <label>Description</label>
         <input type="text" name="description"
         value="{{$course->description}}">

        <label>Price($)</label>
        <input type="number" name="price"
        value="{{$course->price}}">

        <label>Duration (hours)</label>
        <input type="number" name="duration"
        value="{{$course->duration}}">

        <button type="submit">Update Course</button>


    </form>
    
</body>
</html>