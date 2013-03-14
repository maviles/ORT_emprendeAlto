<body>
<input id="base_url" type="hidden" value="<?php echo base_url()?>">
	<section id="contenido">
		<article>
		<div style="text-align:left">	
				<!-- {titulo_not_padre}-->
				<legend>
					<div style="float:left;">Nueva sub noticia</div>
					<div style="text-align:right;"><a class="btn btn btn-primary" href="<?php echo base_url()?>admin/editar_noticia_p/{id_not_padre}">Volver a Noticia</a></div>
				</legend>
				<form method="post" action="<?php echo base_url()?>admin/guardar_noticia" onSubmit="return validar_not();" enctype="multipart/form-data">
				<input type="hidden" name="idpadre" value="{id_not_padre}">
				<input type="hidden" name="titulo"  value="{titulo_not_padre}">
				<fieldset>
					<label class="checkbox">
					<input name="activo" checked type="checkbox"> Activo
					</label>
					<label class="checkbox">
					<input name="principal" type="checkbox"> Establecer como principal
					</label>

					<label>Imagen de encabezado</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-search"></i></span>
					<input id="lefile" name="userfile" type="file" style="display:none">
					<div class="input-append">
					<input id="photoCover" class="input-large" type="text">
					<a class="btn" onclick="$('input[id=lefile]').click();">Browse</a>
					</div>
					</div>

					<label>Reseña</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>
					<input name="resena" type="text" placeholder="Reseña...">
					</div>

					<label>Descripción</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>
					<input name="subtitulo" type="text" placeholder="Descripcion...">					
					</div>
					
					<label>Detalle</label>
					<textarea name="detalle" id="editor1"></textarea>					
					<p>&nbsp;</p>
					<button type="submit" class="btn">Guardar</button>
				
				</fieldset>
			</form>
			</div>
		</article>
	</section>
</body>
</html>