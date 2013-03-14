<body>
<input id="base_url" type="hidden" value="<?php echo base_url()?>">
	<?php $this->load->view('admin/menu'); ?>
	<section id="contenido">
		<article>
		<legend>
			<div style="float:left;">Lista de Sub Noticias</div>
			<div style="text-align:right;"><a class="btn btn btn-primary" href="<?php echo base_url()?>admin/nueva_noticia/{id_not_padre}">Add SubNoticias</a></div>
		</legend>
					<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>				
					<th>Descripción</th>
					<th>Reseña</th>
					<th>Activo</th>
					<th>Principal</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$cont=1; 
					foreach ($noticias as $row) { 
				?> 
					<tr>
						<td><?php echo $cont ?></td>				
						<td><?php echo $row->subtitulo_noticias ?></td>
						<td><?php echo $row->resena_noticias ?></td>
						<td><?php echo $row->activo_noticias? 'SI' : 'NO' ?></td>
						<td><?php echo $row->principal_noticias? 'SI' : 'NO' ?></td>
						<td><a href="<?php echo base_url()?>admin/editar_noticia/<?php echo $row->id_noticias ?>">Editar</a></td>
						<td><a href="<?php echo base_url()?>admin/eliminar_noticia/<?php echo $row->id_noticias ?>/{id_not_padre}" onclick="if(!confirm('Está seguro de eliminar la Noticia?'))return false">Eliminar</a></td>
					</tr>
				<?php $cont++;} ?>
			</tbody>
			</table>
		</article>
	</section>
</body>
</html>