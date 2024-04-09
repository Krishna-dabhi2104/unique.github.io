<html>

<head>
</head>
<body>
<form action="{{url('update-data/'.$registers->id)}}" method="post">
@csrf
@method('PUT')
name <input type="text" name="name" value="{{$registers->name}}">
address<input type="text" name="address" value="{{$registers->address}}">
<input type="submit" name="submit">

</form>
</body>
</html>