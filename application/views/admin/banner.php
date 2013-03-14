<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
	<article>
		<legend style="text-align:left">Banner</legend>
		<div style="text-align:left; float:left; margin-right:15px;">
			<form action="<?php echo base_url()?>banner/do_upload" enctype="multipart/form-data" method="post"> 
			    <label>Nombre - Descripcion</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-pencil"></i></span>
						<input name="nombreImg" id="nombreImg" type="text">
					</div>
				</div>
		</div>
		<div style="text-align:left;">                             			
				<label>Archivo</label>
		
					<div class="input-prepend">
						<span class="add-on"><i class="icon-search"></i></span>
						<input id="lefile" name="userfile" type="file" style="display:none">
						<div class="input-append">
						<input id="photoCover" class="input-large" type="text">
						<a class="btn" onclick="$('input[id=lefile]').click();">Buscar</a>
						<button type="submit" class="btn">Subir archivo</button>     
					</div>   
				</div>
		         
			</form>
		</div>
        <table class="table table-striped">
		<thead>
			<tr>
			    <th>#</th>
				<th>Nombre</th>
				<th>Imagen</th>					
				<th colspan="2">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php $cont=1; foreach ($imagenes as $row) { ?> 
				<tr>
				    <td><?php echo $cont; ?></td>
				    <td><?php echo $row->nombre ?></td>
					<td><img src="<?php echo base_url()?><?php echo $row->ruta_banner ?>" width="200" height="50" alt="<?php echo $row->nombre ?>" title="<?php echo $row->nombre ?>"></td>
					<td> <a href="<?php echo base_url()?>banner/delete_img/<?php echo $row->id_banner ?>" onclick="if(!confirm('Está seguro de eliminar el Banner?'))return false">Eliminar</a></td>
				</tr>
			<?php $cont++;} ?>
		</tbody>
		</table>        
		</aricle>
	</section>
</body>
</html>