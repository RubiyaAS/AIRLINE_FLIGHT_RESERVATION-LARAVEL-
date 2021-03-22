<html>
<head>
<title></title>
</head>
<style>
table,td,tr{border:1px solid;}
</style>
<body>
<table>
<tr>
<td>ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Age</td>
<td>Gender</td>
<td>Address</td>
<td>Phone</td>
<td>Email</td>

</tr>
@foreach($data as $item)
<tr>
<td>{{$item['id']}}</td>
<td>{{$item['firstname']}}</td>
<td>{{$item['lastname']}}</td>
<td>{{$item['age']}}</td>
<td>{{$item['gender']}}</td>
<td>{{$item['address']}}</td>
<td>{{$item['phone']}}</td>
<td>{{$item['email']}}</td>

</tr>
@endforeach
</table>
</body>
</html>
