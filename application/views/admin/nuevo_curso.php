<body>

<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
		<div style="text-align:left">	
				<!-- {titulo_not_padre}-->
				
				<form method="post" action="<?php echo base_url()?>cursos/guardar_curso" onSubmit="return validar_not();" enctype="multipart/form-data">
				<fieldset>
					<label class="checkbox">
					<input name="activo" checked="checked" type="checkbox"> Activo
					</label>
					
					<br>
					
					<label>Nombre</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>
					<input name="nombre" type="text" placeholder="Nombre...">
					</div>
					
					<br>
					
					<label>Fecha Inicio</label>
					<div  class="input-append">
						<input id="finicio" name="finicio" type="text" placeholder="AAAA-MM-DD"></input>
						<span class="add-on"><i class="icon-calendar"></i></span>
					</div>
					
					<br>
					
					<label>Fecha Fin</label>
					<div  class="input-append">
						<input id="ffin" name="ffin" type="text" placeholder="AAAA-MM-DD"></input>
						<span class="add-on"><i class="icon-calendar"></i></span>
					</div>
					
					<br>
					
					<label>Descripción</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>
					<input name="descripcion" type="text" placeholder="Descripcion...">					
					</div>
					
					<br>
					
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