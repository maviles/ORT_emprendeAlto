<body>
	<?php $this->load->view('admin/menu'); ?>	
	<section id="contenido">
		<!--<header class="titulo"><h1>Lista de Noticias</h1></header>-->
		<nav class="sub-menus">
			<a href="<?php echo base_url()?>admin/nueva_noticia">[Crear nueva noticia]</a>
		</nav>
		<article>
			<table>
				<tr>
					<th>Titulo</th>
					<th>Sub Titulo</th>
					<th>Reseña</th>
					<th>Activo</th>
					<th colspan="2">Acciones</th>
				</tr>
				<?php foreach ($noticias as $row) { ?> 
					<tr>
						<td class="left"><?php echo $row->titulo_noticias ?></td>
						<td class="left"><?php echo $row->subtitulo_noticias ?></td>
						<td class="left"><?php echo $row->resena_noticias ?></td>
						<td><?php echo $row->activo_noticias==1 ? 'SI' : 'NO' ?></td>
						<td><a href="<?php echo base_url()?>admin/editar_noticia/<?php echo $row->id_noticias ?>">Editar</a></td>
						<td><a href="<?php echo base_url()?>admin/eliminar_noticia/<?php echo $row->id_noticias ?>">Eliminar</a></td>
					</tr>
				<?php } ?>
			</table>
		</article>
	</section>
</body>
</html>