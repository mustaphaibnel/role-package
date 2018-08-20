<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
<h1>Contact Us any time</h1>
<form action="{{route('roles.store')}}" method="post">
    @csrf
    <input type="text" name="name" >
    <input type="text" name="slug" >
    <input type="submit" value="Submit">
</form>
<h2>les roles</h2>
@foreach($roles as $role)
<li>{{$role}}</li>
@endforeach
</body>
</html>