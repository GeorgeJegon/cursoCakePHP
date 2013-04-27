<section>
	
	<?php 
		if(isset($palestrante) && is_array($palestrante) && !empty($palestrante)){
			$current = $palestrante['Palestrante'];
			printf('<h1>Palestrante - %s</h1>',$current['nome']);
			if(isset($current['site']) && $current['site']!=""){
				printf('<p>Site: %s</p>',$this->Html->link($current['site'],$current['site'],array('target'=>'_blank')));
			}//END IF
			printf('<p>%s</p>',$current['descricao']);
		}//END IF
	?>
</section>
