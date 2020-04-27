<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>

	<h2>{[$title]}</h2>

	<hr>

	@foreach($user as $key => $value)

	<h4>Id: {($key.$value['id'])},
	Name: {($key.$value['name'])}</h4>

	@endforeach

</body>
</html>