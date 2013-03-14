<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
		<div style="text-align:left">
			
			<form method="post" action="<?php echo base_url()?>cursos/modificar_curso" onSubmit="return validar_not();" enctype="multipart/form-data">
				<fieldset>
					<legend>Editar Curso</legend>
					<input type="hidden" name="id" value="<?php echo $idcurso ?>">
					<label class="checkbox">
					<?php if($estado==1){?>
						<input name="activo" checked="checked" type="checkbox"> Activo
					<?php }else{ ?>	
						<input name="activo" type="checkbox"> Activo
					<?php } ?>
					
					
					
					</label>
					
					<br>
					
					<label>Nombre</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>
					<input name="nombre" type="text" placeholder="Nombre..." value="<?php echo $nombre ?>">
					</div>
					
					<br>
					
					<label>Fecha Inicio</label>
					<div  class="input-append">
						<input id="finicio" name="finicio" type="text" placeholder="AAAA-MM-DD" value="<?php echo $fecha_inicio ?>"></input>
						<span class="add-on"><i class="icon-calendar"></i></span>
					</div>
					
					<br>
					
					<label>Fecha Fin</label>
					<div  class="input-append">
						<input id="ffin" name="ffin" type="text" placeholder="AAAA-MM-DD" value="<?php echo $fecha_fin ?>"></input>
						<span class="add-on"><i class="icon-calendar"></i></span>
					</div>
					
					<br>
					
					<label>Descripción</label>
					<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>
					<input name="descripcion" type="text" placeholder="Descripcion..." value="<?php echo $descripcion ?>">					
					</div>
					
					<br>
					
					<label>Detalle</label>
					<textarea name="detalle" id="editor1"><?php echo $detalle ?></textarea>
					
										
					<p>&nbsp;</p>
					<button type="submit" class="btn">Guardar</button>
				
				</fieldset>
			</form>
			
			
			
		</div>
		</article>
	</section>
</body>
</html>