<!DOCTYPE html>
<html>
<head>
	<title>Criar Conta</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-image: 'assets/logo.png';">
	<div class="container">



		<div class="login-box">
			<div class="login-logo"></div>
            
            <br>
            <br><br>
			<h2>Login</h2>
			<form method ="get" action="{{route('login')}}">
				<!-- <label for="password">Password:</label> -->
				<input type="password" id="email" name="email" placeholder="email" required>

                <input type="password" id="password" name="password" placeholder="password" required>

				<button type="submit">Entrar</button>
			</form>
		</div>
	</div>
</body>
</html>
