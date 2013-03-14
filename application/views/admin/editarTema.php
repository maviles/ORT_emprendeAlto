<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
	<article>
		<legend style="text-align:left">Editar Pregunta</legend>
		<div style="text-align:left; float:left; margin-right:15px;">
			<form action="<?php echo base_url()?>admin/modificar_tema" method="post"> 
			    <label>Nombre</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-pencil"></i></span>
						<input class="input-xxlarge" name="nombre" id="nombre" type="text" value="{nombre}">
					</div>
				</div>
				<label>Url</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-hand-right"></i></span>
					<input class="input-xxlarge" name="enlace" id="enlace" type="text" value="{enlace}">
					<input type="hidden" id="id_tabs_seccion" name="id_tabs_seccion" value="{id_tabs_seccion}">
					</div>
				</div>
				<p>&nbsp;</p>
				<button type="submit" class="btn">Guardar</button>
			</form>
		</div>
		</aricle>
	</section>
</body>
</html>