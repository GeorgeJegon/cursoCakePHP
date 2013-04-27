<section>
	<h1>Palestrantes</h1>
	<?php 
		if(isset($palestrantes) && is_array($palestrantes)){
			echo '<div id="palestrantes-list">';
				foreach($palestrantes as $key=>$value){
					$current = $value['Palestrante'];
					echo '<!-- begin div class palestrante -->';
					echo '<div class="palestrante">';
						echo '<!-- begin div class palestrante-image -->';
						echo '<div class="palestrante-image lfloat" style="background-image:url(img/palestrantes/default.jpg);">';
						echo '</div><!-- begin div class palestrante-image -->';
						echo '<!-- begin div class palestrante-brief -->';
						echo '<div class="palestrante-brief lfloat">';
							printf('<p class="name">%s</p>',$current['nome']);
							printf('<p>Visite o site deste palestrante: <a href="%s" target="_blank">%s</a></p>',$current['site'],$current['site']);
							printf('<p class="descricao">%s</p>',$current['descricao']);
						echo '</div><!-- begin div class palestrante-brief -->';
						echo '<div class="clearfix"></div>';
					echo '</div><!-- begin div class palestrante -->';
				}//END FOREACH
			echo '</div>';
		}else{
			echo 'Nenhum palestrante encontrado!';
		}//END IF
	?>
</section>