<section>
	<h1>Palestras</h1>
	<?php 
		if(isset($palestras) && is_array($palestras) && !empty($palestras)){
			echo '<!-- begin div palestras-list -->';
			echo '<div id="palestras-list">';
				foreach($palestras as $palestra){
					$value = $palestra['Palestra'];
					$slug = Inflector::slug(strtolower($palestra['Palestrante']['nome']),'-');
					$palestranteLink = sprintf('/palestrante/%s/%s',$slug,$palestra['Palestrante']['id']);
					echo '<!-- begin div class palestra-box -->';
					echo '<div class="palestra-box">';
						echo '<!-- begin div class palestra-content -->';
						echo '<div class="palestra-content">';
							printf('<p class="palestra-nome">%s</p>',$value['nome']);
							printf('<p class="palestrante-info">Palestrante: %s</p>',$this->Html->link($palestra['Palestrante']['nome'],$palestranteLink));
							printf('<p class="palestra-horario">Horário: %s</p>',date('H:i\m\i\n',strtotime($palestra['Palestra']['inicio'])));
							printf('<p class="palestra-descricao">%s</p>',$value['descricao']);
						echo '</div><!-- end div class palestra-content -->';
					echo '</div><!-- end div class palestra-box -->';
				}//END FOREACH
			echo '</div><!-- end div palestras-list -->';
		}else{
			echo 'Nenhuma palestra encontrada!';
		}//END IF
	?>
</section>
