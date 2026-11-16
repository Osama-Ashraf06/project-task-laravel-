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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ui>
           @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
  </div>
@endif
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <label>name</label>
        <input type="text" name="name">

         <label>email</label>
         <input type="email" name="email">

        <label>phone</label>
        <input type="text" name="phone">

        <label>course</label>
        <select name="course_id">
            @foreach ($courses as $course)
            <option value="{{$course->id}}">
                {{$course->title}}
            </option>        
            @endforeach
        </select>

        <button type="submit">Add student</button>


    </form>
    
</body>
</html>