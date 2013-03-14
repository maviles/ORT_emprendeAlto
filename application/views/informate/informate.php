<div class="titulo-seccion">
	<div class="texto">Inf&oacute;rmate</div>
	<a href="<?php echo base_url()?>"><img class="home" src="<?php echo base_url()?>design/images/homeChica.png"></img></a>
</div>
<section class="contenido-principal">
	<section class="seccionGeneral">

<div id="page-wrap">
	     <div class="tabsInfo" id="example-two">
    		<ul class="nav">
                <li class="nav-one"><a href="#featured2" class="current">LABORAL</a></li>
                <li class="nav-two"><a href="#core2">TRIBUTARIO</a></li>
                <li class="nav-three"><a href="#jquerytuts2">HIGIENE Y SALUD LABORAL</a></li>
            </ul>
    		
    		<div class="list-wrap">
    			<ul id="featured2">
				<div class="subCategoria">
					<?php foreach ($seccion as $rowSeccion) { 
						if($rowSeccion->id_pestana==1){
					?>
						<li><a href="#"><?php echo $rowSeccion->nombre ?></a></li>
							<div class="temas">
							<?php foreach ($temas as $rowTemas) { 
								if($rowSeccion->id_tabs_seccion==$rowTemas->id_tabs_seccion){
							?>
								<span class="enlace"><span class="bulll">&bull;</span><a href="<?php echo $rowTemas->enlace ?>" target="_blank"><?php echo $rowTemas->nombre ?></a></span><br />
							<?php } }?>
							</div>
					<?php } } ?>	
				</div>
    			</ul>
				
        		<ul id="core2" class="hide">
					<div class="subCategoria">
					<?php foreach ($seccion as $rowSeccion) { 
						if($rowSeccion->id_pestana==2){
					?>
						<li><a href="#"><?php echo $rowSeccion->nombre ?></a></li>
							<div>
							<?php foreach ($temas as $rowTemas) { 
								if($rowSeccion->id_tabs_seccion==$rowTemas->id_tabs_seccion){
							?>
								&bull; <a href="<?php echo $rowTemas->enlace ?>" target="_blank"><?php echo $rowTemas->nombre ?></a><br>
							<?php } }?>
							</div>
					<?php } } ?>	
					</div>
        		</ul>
				        		 
        		<ul id="jquerytuts2" class="hide">
        		    <div class="subCategoria">
					<?php foreach ($seccion as $rowSeccion) { 
						if($rowSeccion->id_pestana==3){
					?>
						<li><a href="#"><?php echo $rowSeccion->nombre ?></a></li>
							<div>
							<?php foreach ($temas as $rowTemas) { 
								if($rowSeccion->id_tabs_seccion==$rowTemas->id_tabs_seccion){
							?>
								&bull; <a href="<?php echo $rowTemas->enlace ?>" target="_blank"><?php echo $rowTemas->nombre ?></a><br>
							<?php } }?>
							</div>
					<?php } } ?>	
					</div>
        		</ul> 
				
    		 </div> <!-- END List Wrap -->
		 </div> <!-- END Organic Tabs (Example One) -->	
	</div>	

	</section>
	<?php $this->load->view('lateral_der'); ?>	
</section>
