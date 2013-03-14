<body>
<input id="base_url" type="hidden" value="<?php echo base_url()?>">
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
		<div style="text-align:left">
			<form method="post" action="<?php echo base_url()?>admin/modificar_articulos" onSubmit="return valida_emprende();">
			<fieldset>
					<legend>{nombre_articulos}</legend>
					<input type="hidden" name="id" value="{id_articulos}">

					<label>Detalle sección</label>
					<textarea name="detalle_articulos" id="editor1">{detalle_articulos}</textarea>					
					<p>&nbsp;</p>
					<button type="submit" class="btn">Guardar</button>
			</fieldset>
			</form>
		</div>
		</article>
	</section>
</body>
</html>