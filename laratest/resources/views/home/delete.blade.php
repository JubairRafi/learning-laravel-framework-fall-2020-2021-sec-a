<!DOCTYPE html>
<html>
<head>
	<title>Delete Page</title>
</head>
<body>
	<a href="{{route('home.userlist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Delete User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{$password}}"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{$name}}"></td>
				</tr>
				<tr>
					<td>Cgpa</td>
					<td><input type="text" name="cgpa" value="{{$cgpa}}"></td>
				</tr>
				<tr>
					<td>dept</td>
					<td><input type="text" name="dept" value="{{$dept}}"></td>
				</tr>
				<tr>
					<td>type</td>
					<td><input type="text" name="type" value="{{$type}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Confirm Delete"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>