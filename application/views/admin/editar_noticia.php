<body>
<?php $this->load->view('admin/menu'); ?>
<input id="base_url" type="hidden" value="<?php echo base_url()?>">
	<section id="contenido">
		<article>
		<div style="text-align:left">
			<form method="post" action="<?php echo base_url()?>admin/mod_not" onSubmit="return validar_not();" enctype="multipart/form-data">
				<input type="hidden" name="id" value="{id_noticias}">
				<input type="hidden" name="idpadre" value="{id_not_padre}">
				<input type="hidden" name="titulo"  value="{titulo_noticias}">
				<fieldset>
					<legend>Editar noticia</legend>
				<label class="checkbox">
					<input <?php echo $activo_noticias? 'checked' : '' ?> name="activo" type="checkbox">Activo
				</label>
				<label class="checkbox">
					<input <?php echo $principal_noticias? 'checked' : '' ?> name="principal" type="checkbox"> Establecer como principal
				</label>
				<p>&nbsp;</p>
				<?php if ($ruta_img_noticias==""): ?>
					<label >Imagen de encabezado</label>
					<input id="img-header-a" name="userfile" type="file">
				<?php else: ?>
					<label>Imagen de encabezado</label>
					<img class="img-header" src="<?php echo base_url()?>img_header/{ruta_img_noticias}">
					<a class="link-eliminar" href="<?php echo base_url()?>admin/eliminar_img_header/{id_noticias}">Eliminar imagen</a>
				<?php endif ?>	
				<p>&nbsp;</p>
				<label>Descripción</label>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>  
					<input name="subtitulo" type="text" value="{subtitulo_noticias}" placeholder="Descripcion...">
				</div>
			
				<label>Reseña</label>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>  
				<input name="resena" type="text" value="{resena_noticias}" placeholder="Reseña...">
				</div>
			
				<label>Detalle</label>
				<textarea name="detalle" id="editor1">{detalle_noticias}</textarea>					
				<p>&nbsp;</p>
				<button type="submit" class="btn">Guardar</button>
				</fieldset>
			</form>
		</div>
		</article>
	</section>
</body>
</html>