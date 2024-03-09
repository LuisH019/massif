<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="assets/css/loginForm.css">

</head>
<body>
	

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/massif_new(2).png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action ="{{route('register.perform')}}" method="post">
				
					@csrf

					<span class="login100-form-title">
						Registrar usuário
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nome" placeholder="Nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" email-validate>
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div id="input" class="wrap-input101 validate-input" data-validate = "É necessário preencher o campo">
						<input class="input100" type="password" name="password" placeholder="Senha">
						<img draggable="false" src="http://i.stack.imgur.com/H9Sb2.png" alt="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Registrar
						</button>
					</div>
					<br><br>
				</form>
			</div>
		</div>
	</div>

<script>
	var input = document.querySelector('#input input');
	var img = document.querySelector('#input img');
	var visivel = false;
	img.addEventListener('mousedown', function () {
  	visivel = true;
  	input.type = 'text';
	});
	window.addEventListener('mouseup', function (e) {
  	if (visivel) visivel = !visivel;
  	input.type = 'password';
	});
</script>
</body>
</html>
