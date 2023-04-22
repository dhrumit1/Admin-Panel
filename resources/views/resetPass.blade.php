<!DOCTYPE html>
<html>
<head>
	<title>Password Reset</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
	font-family: Arial, sans-serif;
}

.container {
	margin: 50px auto;
	max-width: 400px;
	padding: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
	background-color: #f2f2f2;
}

h2 {
	text-align: center;
	margin-top: 0;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	margin-top: 10px;
}

input[type="email"],
input[type="password"] {
	padding: 10px;
	border-radius: 5px;
	border: 1px solid #ccc;
}

input[type="submit"] {
	margin-top: 20px;
	padding: 10px;
	border-radius: 5px;
	border: none;
	background-color: #4c8eaf;
	color: #fff;
	font-size: 16px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #2E8B57;
}

    </style>
</head>
<body>
	<div class="container">
		<h2>Password Reset</h2>
		<form action="{{ route('password.update') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{$token}}">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" value="{{$email}}" required>

			<label for="password">New Password</label>
			<input type="password" id="password" name="password" required>

			<label for="confirm-password">Confirm Password</label>
			<input type="password" id="confirm-password" name="confirm-password" required>

			<input type="submit" value="Reset Password">
		</form>
	</div>
</body>
</html>
