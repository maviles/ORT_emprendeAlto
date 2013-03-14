<div class="titulo-seccion">
	<div class="texto">Canal Emprende Alto</div>
	<a href="<?php echo base_url()?>"><img class="home" src="<?php echo base_url()?>design/images/homeChica.png"></img></a>
</div>
<section class="contenido-principal">
	<section class="seccion-videos">
		<?php foreach ($videos as $row) { ?> 
			<article class="videos">
				<iframe width="279" height="169" src="http://www.youtube.com/embed/<?php echo $row->url_videos ?>" frameborder="0" allowfullscreen></iframe>
				<footer class="footer"><?php echo ucfirst($row->descripcion_videos) ?></footer>			
			</article>
		<?php } ?>
	</section>
</section>