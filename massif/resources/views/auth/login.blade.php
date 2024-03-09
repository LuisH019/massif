<!DOCTYPE html>
<html lang="en">
<head>
	<title>Massif</title>
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

				<form class="login100-form validate-form" action ="{{route('login.perform')}}" method="post">
					@csrf
					<span class="login100-form-title">
						Login de usuário
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Coloque um email válido: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						
					</div>

					<div id="input"class="wrap-input100 validate-input" data-validate = "É necessário preencher o campo">
						<input class="input100" type="password" name="password" placeholder="Senha">
						<img title="Ver senha"draggable="false" src="http://i.stack.imgur.com/H9Sb2.png" alt="">
						
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					
					<br><br>

					<div class="text-center p-t-136">
						<span class="txt1">
							Não possui conta?
						</span>
						<a class="txt2" href="{{ route('register.show') }}" title="Criar conta">
							Crie aqui.
						</a>
					</div>
					
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