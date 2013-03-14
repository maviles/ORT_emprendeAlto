<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
			<legend>
				<div style="float:left;">Videos</div>
				<div style="text-align:right;"><a class="btn btn btn-primary" href="<?php echo base_url()?>admin/nuevo_video">Nuevo video</a></div>
			</legend>
			<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Descripción</th>
					<th>Video</th>
					<th>Url</th>
					<th>Activo</th>
					<th>Home</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$cont = 1;
				foreach ($videos as $row) { 
				?> 
				<tr>
					<td style="vertical-align:middle;"><?php echo $cont ?></td>
					<td style="vertical-align:middle;"><?php echo $row->descripcion_videos ?></td>
					<td>
						<iframe width="250" height="141" src="http://www.youtube.com/embed/<?php echo $row->url_videos ?>" frameborder="0" allowfullscreen></iframe>
					</td>
					<td style="vertical-align:middle;">
						<div class="input-prepend input-append">
					 	<span class="add-on">http://</span>
						<span class="input-xlarge uneditable-input">youtu.be/<?php echo $row->url_videos ?></span>
						</div>
					</td>
					<td style="vertical-align:middle;"><?php echo $row->activo_videos? 'SI' : 'NO' ?></td>
					<td style="vertical-align:middle;"><?php echo $row->home_videos? 'SI' : 'NO' ?></td>
					<td style="vertical-align:middle;"><a href="<?php echo base_url()?>admin/editar_video/<?php echo $row->id_videos ?>">Editar</a></td>
					<td style="vertical-align:middle;"><a href="<?php echo base_url()?>admin/eliminar_video/<?php echo $row->id_videos ?>" onclick="if(!confirm('Está seguro de eliminar el Video?'))return false">Eliminar</a></td>
				</tr>
			</tbody>
				<?php $cont++;} ?>
			</table>
		</article>
	</section>
</body>
</html>