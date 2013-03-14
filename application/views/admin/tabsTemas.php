<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
		<legend>
			<div style="float:left;">Listado de preguntas</div>
			<div style="text-align:right;"><a class="btn btn btn-primary" href="<?php echo base_url()?>admin/nuevo_tema/{idSeccion}">Nueva pregunta</a></div>
		</legend>
	
			<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Url</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$cont=1;
				foreach ($temas as $row) { 
				?> 
					<tr>
						<td class="left"><?php echo $cont ?></td>
						<td class="left"><?php echo $row->nombre?></td>
						<td class="left"><?php echo $row->enlace?></td>
						<td><a href="<?php echo base_url()?>admin/editar_tema/<?php echo $row->id_tabs_temas ?>">Editar</a></td>
						<td><a href="<?php echo base_url()?>admin/eliminar_tema/<?php echo $row->id_tabs_temas ?>/{idSeccion}">Eliminar</a></td>
					</tr>
				<?php 
				$cont++;
				} 
				?>
			</tbody>
			</table>
		</article>
	</section>
</body>
</html>