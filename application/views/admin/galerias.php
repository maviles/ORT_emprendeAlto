<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
	<article>
		<legend style="text-align:left">Galeria de Imagenes</legend>
		<div style="text-align:left">
			<form  action="<?php echo base_url()?>galerias/do_upload" onSubmit="return validar_imagen();" enctype="multipart/form-data" method="post">
			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-search"></i></span>                             			
					<input id="lefile" name="userfile" type="file" style="display:none">
					<div class="input-append">
					<input id="photoCover" class="input-large" type="text">
					<a class="btn" onclick="$('input[id=lefile]').click();">Buscar</a>
					<button type="submit" class="btn">Subir Foto</button>     
					</div>         
				</div>
			</div>	     
			</form>
		</div>
		<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Imagen</th>
				<th>Link</th>					
				<th colspan="2">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$cont=1; 
			foreach ($imagenes as $row) { 
			?> 
				<tr>
					<td style="vertical-align:middle;"><?php echo $cont;?></td>
					<td><img src="<?php echo base_url()?>thumb/<?php echo $row->ruta_thumb_galerias ?>"></td>
					<td class="left" style="vertical-align:middle;">
						<div class="input-prepend input-append">
							<span class="add-on">url</span>
							<span class="input-xlarge uneditable-input"><?php echo base_url()?>img/<?php echo $row->ruta_galerias ?></span>
						</div>
					</td>
					<td style="vertical-align:middle;"><a href="<?php echo base_url()?>galerias/delete_img/<?php echo $row->id_galerias ?>" onclick="if(!confirm('Está seguro de eliminar la Imagen?'))return false">Eliminar</a></td>
				</tr>
			<?php $cont++;} ?>
		</tbody>
		</table>        
	</section>
</body>
</html>