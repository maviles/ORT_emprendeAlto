<div id="banner">
     <ul class="bjqs">
	 <?php foreach ($imagenes as $rowImg) { ?>
		 <li><img src="<?php echo base_url().$rowImg->ruta_banner?>" title="<?php echo $rowImg->nombre?>"></li>
	 <?php } ?>	
    </ul> 
</div>
<section class="contenido-principal">
	<section class="inicio">
		<?php foreach ($noticias as $row) { ?> 
			<article class="noticia">				
				<header>
					<h2><img src="<?php echo base_url()?>img_header/<?php echo $row->ruta_img_noticias ?>"></h2>
					<h3><?php echo $row->titulo_noticias ?></h3>
					<h4><?php echo $row->subtitulo_noticias ?></h4>
				</header>
				<p><?php echo $row->resena_noticias ?> <a href="<?php echo base_url()?>noticias/detalle/<?php echo $row->id_noticias ?>" title="Ver más de esta sección">ver más</a></p>
			</article>
		<?php } ?>		
	</section>
	<?php $this->load->view('lateral_der_inicio'); ?>
</section>