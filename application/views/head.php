<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Portal EmprendeAlto</title>
	<link rel="shortcut icon" href="<?php echo base_url()?>design/icons/favicon.ico" />
	<script src="<?php echo base_url()?>js/jquery-1.8.3.min.js"></script>
	<script src="<?php echo base_url()?>js/main.js"></script>
	<script src="<?php echo base_url()?>slider/basic-jquery-slider.js"></script>
    <script src="<?php echo base_url()?>js/organictabs.jquery.js"></script>
    <script>
        $(function() {
            $("#example-two").organicTabs({
                "speed": 200
            });
        });
    </script>
	<script>
		$(document).ready(function() {
		  $('div.subCategoria> div').hide();  
		  $('div.subCategoria> li').click(function() {
			$(this).next('div').slideToggle('fast').siblings('div:visible').slideUp('fast');
		  });
		});
    </script>
	
	
	<link rel="stylesheet" href="<?php echo base_url()?>slider/basic-jquery-slider.css">
	<link rel="stylesheet" href="<?php echo base_url()?>design/css/normalize.css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>design/css/head.css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>design/css/contenido.css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>design/css/footer.css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>design/css/tabsPersiana.css">
	
</head>
<body>

<section class="bannerMenu">
	<div class="divBanner">
		<div class="divImgSuperiorBanner"></div>
		<div class="divContactoBanner">
			<span class="spanContacto">
				<img class="sobre" src="<?php echo base_url()?>design/images/mail_chico.png"></img>
				<span class="txtContacto">Contacto</span>
			</span>
			<span class="spanEmprendeAlto">
				<img class="logoChico" src="<?php echo base_url()?>design/images/logo_chico.png"></img>
				<span class="txtEmprende"><b>Comprometidos</b> con los <b>negocios</b> de <b>barrio</b> de Chile</span>
			</span>
		</div>
	</div><!-- fin divBanner -->
	
	<div class="divMenu">
	<nav>
		<ul>
			<li><a href="<?php echo base_url()?>emprende">¿qué es emprende alto?</a></li>
			<li><a href="<?php echo base_url()?>quienes">¿quiénes somos?</a></li>
			<li><a href="<?php echo base_url()?>cursos">cursos emprende alto</a></li>
			<li><a href="<?php echo base_url()?>informate">infórmate</a></li>
			<li class="no"><a href="<?php echo base_url()?>financiamiento">financiamiento</a></li>
		</ul>
	</nav>
	</div><!-- fin divMenu -->
</section><!-- fin bannerMenu -->
