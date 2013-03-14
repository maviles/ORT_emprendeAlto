<div class="titulo-seccion">
	<div class="texto">Detalle Noticia</div>
	<a href="<?php echo base_url()?>"><img class="home" src="<?php echo base_url()?>design/images/homeChica.png"></img></a>
</div>
<section class="contenido-principal">
	<section class="seccionGeneral">
		<?php //foreach ($subnoticias as $row){ ?>
			<?php echo $noticia; ?>
		<?php //} ?>
		<!-- <div class="pag">{pag_links}</div> -->
	</section>	
	<?php $this->load->view('lateral_der_noticia'); ?>
</section>


<style type="text/css">
.pag{
	margin:20px;
	padding:5px;
	text-align:right;
	font-weight:bold;
}
.pag a{
	font-size:10px;
	color:gray;
	padding:5px;
	text-decoration:none;
	background:white;
	border:1px solid gray;
	display:inline-block;
}
.pag a:hover{
	color:black;
}
</style>