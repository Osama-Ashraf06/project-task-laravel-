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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ui>
           @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
  </div>
@endif
    <form action="{{route('students.update',$student->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name"
        value="{{$student->Name}}">

         <label>Email</label>
         <input type="text" name="email"
         value="{{$student->Email}}">

        <label>phone</label>
        <input type="number" name="phone"
        value="{{$student->Phone}}">

        <label>Course</label>
        <select name="course_id">
            @foreach ($courses as $course)
                <option value="{{$course->id}}"
                    {{$student->course->id==$course->id? 'selected' : ''}}>
                    {{$course->title}}
                </option>
            @endforeach
        </select>

        <button type="submit">Update Student</button>


    </form>
    
</body>
</html>