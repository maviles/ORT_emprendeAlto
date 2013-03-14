<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
	<article>
			<legend>
				<div style="float:left;">Temas - {nombrePestana}</div>
				<div style="text-align:right;"><a class="btn btn btn-primary" href="<?php echo base_url()?>admin/nueva_seccion/{idPestana}">Nuevo tema</a></div>
			</legend>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>Nº</th>
					<th>Nombre</th>
					<th colspan="3">Acciones</th>
				</tr>
				</thead>
				<tbody>
				<?php 
				$cont=1;
				foreach ($secciones as $row) { 
				?> 
					<tr>
						<td class="left"><?php echo $cont ?></td>
						<td class="left"><?php echo $row->nombre?></td>
						<td>
						<a href="<?php echo base_url()?>admin/ingresar_temas/<?php echo $row->id_tabs_seccion ?>">Ingresar</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="<?php echo base_url()?>admin/editar_seccion/<?php echo $row->id_tabs_seccion ?>">Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="<?php echo base_url()?>admin/eliminar_seccion/<?php echo $row->id_tabs_seccion ?>/{idPestana}">Eliminar</a>
						</td>
					</tr>
				<?php 
				$cont++;
				} 
				?>
			<tbody>
			</table>
		</article>
	</section>
</body>
</html>