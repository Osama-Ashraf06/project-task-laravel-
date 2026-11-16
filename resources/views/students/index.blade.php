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
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">course</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <td>{{$student['Name']}}</td>
      <td>{{$student['Email']}}</td>
      <td>{{$student['Phone']}}</td>
      <td>{{$student->course->title}}</td>
      <td><a href="{{route('students.edit',$student->id)}}">Edit</a>
      <form
      action="{{route('students.destroy',$student->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
       </form>
      </td>
     </tr>
    @endforeach
  </tbody>
</table> 
 <a href="{{route('students.create')}}"
    class="btn btn-primary">
    Add new student</a>
</div>

</body>
</html>