<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Portal Emprende Alto</title>
	<link rel="stylesheet" href="<?php echo base_url()?>design/css/login.css"/>
</head>

<body>
<div id="box">
<div class="elements">
<div class="avatar"></div>
<form method="post" action="<?php echo base_url()?>login/validate" onSubmit="return validar_login();">
<div class="input-prepend">
<span class="add-on"><i class="icon-user"></i></span>
<input type="text" id="user" name="user" placeholder="Usuario" />
</div>
<div class="input-prepend">
<span class="add-on"><i class="icon-certificate"></i></span>
<input type="password" id="password" name="password" placeholder="Contraseña" />
</div>
<div class="signup">Ingrese sus datos para acceder al sistema</div>
<br>
<input type="submit" name="submit" class="submit" value="Entrar" />
</form>
</div>
</div>
<div class="signup">Acceso Administrador Contenido</div>
<div class="signup">Sitio: <a href="http://www.emprendealto.cl" target="_blank">EmprendeAlto</a> </div>
</body>
</html>
