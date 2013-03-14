<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
	<article>
		<legend style="text-align:left">Editar Tema</legend>
		<div style="text-align:left; float:left; margin-right:15px;">
			<form action="<?php echo base_url()?>admin/modificar_seccion" method="post"> 
			    <label>Nombre</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-pencil"></i></span>
						<input name="nombre" id="nombre" type="text" value="{nombre}">
						<input type="hidden" id="id_tabs_seccion" name="id_tabs_seccion" value="{id_tabs_seccion}">
						<input type="hidden" id="id_pestana" name="id_pestana" value="{id_pestana}">
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