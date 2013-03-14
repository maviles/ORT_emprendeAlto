<aside class="lateral-der-noticia">
 	<div><a title="Ir a consurso emprende alto"href="http://www.emprendealto.cl/capacitate/login/index.php" target="_blank"><img src="<?php echo base_url()?>design/images/acceso_curso.png"></a></div>
 	<div class="aqui-emprende-alto"><a title="Aquí se emprende alto" href=""><img src="<?php echo base_url()?>design/images/se_emprende.png"></a></div>
 	<div class="conectados"><a title="Conectados" target="_blank" href="http://www.facebook.com/emprendealto"><img src="<?php echo base_url()?>design/images/boton_facebook.gif"></a></div>
	
	<div class="paginador">
	<div class="titAnterior">Anteriores...</div>

	<div class="titNoticia" id="titNoticia">
		<?php foreach ($lista as $row){ ?>
			<span class="bull">&bull;</span> <span class="notLink" id="notLink"><a href="<?php echo base_url()?>noticias/detalle/<?php echo $row->id_noticias.'/'.$offset ?>"><?php echo $row->resena_noticias; ?></a></span><br /><br />
		<?php } ?>
		</div>
		<div class="pag">{pag_links}</div>
	</div>
	
	
	
</aside>