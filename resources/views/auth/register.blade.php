<!DOCTYPE html>
<html>
<head>
	<title>Criar Conta</title>
	<link rel="stylesheet" href="css/styles.css">
	
</head>
<body>
	<div class="container">
		<div class="login-box">
			<div class="login-logo"></div>
            
            <br>
            <br><br>
			<h2>Create account</h2>
			<form method ="get" action="{{route('register')}}">
				<!-- <label for="username">Username:</label> -->
				<input type="text" id="username" name="username" placeholder="nome" required>

				<!-- <label for="password">Password:</label> -->
				<input type="email" id="email" name="email" placeholder="email" required>

                <input type="password" id="password" name="password" placeholder="password" required>
				<button type="submit">Confirm</button>
			</form>
			<a href="#">Ja tem conta</a>
		</div>
	</div>
</body>
</html>
