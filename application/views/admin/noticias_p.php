<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<article>
			<legend style="text-align:left">Home - Secciones</legend>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>#</th>
					<th>Seccion Inicio</th>
					<th>Acciones</th>
				</tr>
				</thead>
				<tbody>
				<?php 
				$cont=1;
				foreach ($noticias_p as $row) { 
				?> 
				
					<tr>
						<td class="left"><?php echo $cont ?></td>						
						<td class="left"><?php echo $row->titulo_not_padre ?></td>						
						<td><a href="<?php echo base_url()?>admin/editar_noticia_p/<?php echo $row->id_not_padre ?>">Ingresar</a></td>
					</tr>
				<?php 
				$cont++;
				} ?>
				</tbody>
			</table>
		</article>
	</section>
</body>
</html>