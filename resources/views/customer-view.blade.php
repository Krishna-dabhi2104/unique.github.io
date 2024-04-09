<html>
<head>
</head>
<body>
<table>
<thead>
<tr>

<th>name</th>
<th>address</th>
</tr>
</thead>
<tr>
<tbody>
@foreach($registers as $register)
<td>{{$register->name}}</td>
<td>{{$register->address}}</td>
<td>
<a href=" {{ url('edit/'.$register->id)}}">Edit</a>
<a href=" {{ url('delete/'.$register->id)}}">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</html>