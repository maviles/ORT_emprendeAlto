<body>
<input id="base_url" type="hidden" value="<?php echo base_url()?>">
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
		<div style="text-align:left">
			<form  method="post" action="<?php echo base_url()?>admin/modificar_videos" onSubmit="return validar_videos();">
			<fieldset>
					<legend>Detalle video</legend>
					<input type="hidden" value="{id_videos}" name="id">
					<label class="checkbox">
						<input name="activo" <?php echo $activo_videos? 'checked' : '' ?> type="checkbox"> Activo
					</label>
					<label class="checkbox">
						<input name="home" <?php echo $home_videos? 'checked' : '' ?> type="checkbox"> Mostrar en el home
					</label>
					<p>&nbsp;</p>
					<div class="input-prepend input-append">
					<label>Código Url video ( http://youtu.be/<span style="color:green;font-weight:bold">{url_videos}</span> )</label>
					<span class="add-on">http://youtu.be/</span>
					<input class="input-large" id="url" name="url" type="text" value="{url_videos}" placeholder="{url_videos}">
					</div>
			
					<label>Descripcion</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>  
					<input class="input-xlarge" id="descripcion" name="descripcion" type="text" value="{descripcion_videos}" placeholder="Detalle video...">
					</div>
					<p>&nbsp;</p>	
					<button type="submit" class="btn">Guardar</button>
			</fieldset>
			</form>
		</div>
		</article>
	</section>
</body>
</html>