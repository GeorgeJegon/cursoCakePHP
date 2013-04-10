<nav id="menu-navegacao">
	<?php 
		if(isset($links) && is_array($links) && count($links)>0){
			echo '<ul>';
				foreach($links as $key=>$value){
					printf('<li class="%s"><a href="%s" title="%s" class="round-box">%s</a></li>',$value['class'],$value['href']
						,$value['titulo'],$value['titulo']);
				}//END FOREACH
			echo '</ul>';
		}//END IF
	?>
</nav>