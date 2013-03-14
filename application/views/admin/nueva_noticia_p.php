<body>
<input id="base_url" type="hidden" value="<?php echo base_url()?>">
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<header class="titulo"><h1>Nueva noticia</h1></header>
		<article>
			<form class="formulario" method="post" action="<?php echo base_url()?>admin/guardar_noticia_p" onSubmit="return validar_not_p();">
				<div class="activo">
					<input name="activo" checked type="checkbox"><label>Activo</label>
				</div>
				<div class="contiene">
					<label>Titulo</label>
					<input id="titulo-not-padre" name="titulo" type="text">
				</div>						
				<div class="botones">
					<button type="submit">Guardar</button>
				</div>
			</form>
		</article>
	</section>
</body>
</html>