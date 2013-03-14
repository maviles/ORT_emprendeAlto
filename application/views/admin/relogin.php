<body>
<form class="login" method="post" action="<?php echo base_url()?>login/validate" onSubmit="return validar_login();">
	<h1>Emprende Alto</h1>
	<label for="user">Usuario:</label>
	<input type="text" name="user" id="user">
	<label for="password">Contraseña:</label>
	<input type="password" name="password" id="password">
	<button type="submit">Entrar</button>
	<?php
		if ($error==0 OR $error!=1) {
			echo '<span style="color:red">Usuario no se encuentra registrado.</span>';
		} else {
			echo '<span style="color:red">Usuario y/o contraseña mal ingresados.</span>';
		}
	?>
</form>
</body>
</html>