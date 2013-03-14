<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
	<article>
		<legend style="text-align:left">Nuevo tema</legend>
		<div style="text-align:left; float:left; margin-right:15px;">
			<form action="<?php echo base_url()?>admin/guardar_seccion" method="post"> 
			    <label>Nombre</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-pencil"></i></span>
						<input name="nombre" id="nombre" type="text">
						<input type="hidden" id="idPestana" name="idPestana" value="{idPestana}">
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