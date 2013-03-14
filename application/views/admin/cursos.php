<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
		<legend>
			<div style="float:left;">Cursos</div>
			<div style="text-align:right;"><a class="btn btn btn-primary" href="<?php echo base_url()?>cursos/nuevo_curso">Nuevo curso</a></div>
		</legend>
			<table class="table table-striped">
				<tr>
					<th>#</th>
					<th>nombre</th>
					<th>fecha_inicio</th>
					<th>fecha_fin</th>
					<th>descripcion</th>
					<th>estado</th>
					<th colspan="2">Acciones</th>
				</tr>
				<?php 
					$cont=1; 
					foreach ($cursos as $row) { 
				?> 
					<tr>
						<td class="left"><?php echo $cont ?></td>
						<td class="left"><?php echo $row->nombre ?></td>
						<td class="left"><?php echo $row->fecha_inicio ?></td>
						<td class="left"><?php echo $row->fecha_fin ?></td>
						<td class="left"><?php echo $row->descripcion ?></td>
						<td><?php echo $row->estado==1 ? 'principal' : 'no principal' ?></td>
						<td><a href="<?php echo base_url()?>cursos/editar_curso/<?php echo $row->id_curso ?>">Editar</a></td>
						<td><a href="<?php echo base_url()?>cursos/eliminar_curso/<?php echo $row->id_curso ?>" onClick="if(!confirm('Está seguro de eliminar el curso?'))return false">Eliminar</a></td>
					</tr>
				<?php $cont++; } ?>
			</table>
		</article>
	</section>
</body>
</html>