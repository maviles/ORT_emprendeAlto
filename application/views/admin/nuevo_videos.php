<body>
<input id="base_url" type="hidden" value="<?php echo base_url()?>">
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
		<div style="text-align:left">
			<form method="post" action="<?php echo base_url()?>admin/guardar_videos" onSubmit="return validar_videos();">
			<fieldset>
					<legend>Nuevo video</legend>
					<label class="checkbox">
					<input id="activo" name="activo" checked type="checkbox"> Activo
					</label>
					<label class="checkbox">
					<input id="home" name="home" type="checkbox"> Mostrar en el home
					</label>
					<p>&nbsp;</p>
					<label>Código Url video ( http://youtu.be/<span style="color:green;font-weight:bold">xxxxxxxxxx</span> )</label>
					<div class="input-prepend input-append">
					<span class="add-on">http://youtu.be/</span>
					<input class="input-large" placeholder="xxxxxxxxxx" id="url" name="url" type="text">
					</div>

					<label>Descripción</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>  
					<input class="input-xlarge" id="descripcion" name="descripcion" type="text" placeholder="Detalle video...">
					</div>
					<p>&nbsp;</p>	
					<button type="submit" class="btn">Guardar</button>

				</form>
			</fieldset>
			</fieldset>
		</article>
	</section>
</body>
</html>