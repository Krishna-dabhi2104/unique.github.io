<html>

<head>
</head>
<body>
<form action="{{url('/')}}/registers" method="post">
@csrf
name <input type="text" name="name">
address<input type="text" name="address">
<input type="submit" name="submit">

</form>
</body>
</html>