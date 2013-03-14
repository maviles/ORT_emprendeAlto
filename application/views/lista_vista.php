<ul class="nav" id="nav1">
<?php
foreach($mensajes as $p){
?>
<li><?=$p->de;?>: <?=$p->mensaje;?></li>
<?php
}
echo "</ul>";
echo "<ul id=\"pagination-digg\">";
echo $pag_links;
echo "</ul>";
?>