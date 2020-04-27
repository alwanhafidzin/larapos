<!DOCTYPE html>
<html>
<head>
	<title>{{$page['title']}} - LaraCMS</title>
</head>
<body>

	<h2>{{$page['title']}}</h2>

	<hr>

	<form action="/page/contact/save" method="get">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		Nama
		<input type="text" name="nama"><br>

		Email
		<input type="email" name="email"><br>

		Pesan
		<textarea rows="5" name="pesan"></textarea><br>


		<input type="submit" name="Kirim">
	</form>

</body>
</html>