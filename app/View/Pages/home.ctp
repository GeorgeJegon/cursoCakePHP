<section>
	<h1>HTML Ipsum Presents</h1>
	       
	<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

	<h2>Palestrantes</h2>
	
	<!-- begin div palestrantes-list -->
	<div id="palestrantes-list">
		<?php for($x=1;$x<5;$x++){ ?>
			<!-- begin div class palestrante -->
			<div class="palestrante">
				<!-- begin div class palestrante-image -->
				<div class="palestrante-image lfloat" style="background-image:url(img/palestrantes/default.jpg);">
				</div><!-- begin div class palestrante-image -->	
				<!-- begin div class palestrante-brief -->
				<div class="palestrante-brief lfloat">
					<p class="name">
						Nome palestrante
					</p>
					<p class="descricao">
						Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
					</p>
				</div><!-- begin div class palestrante-brief -->
				<div class="clearfix"></div>
			</div><!-- begin div class palestrante -->
		<?php }//END FOR ?>
	</div><!-- begin div palestrantes-list -->
</section>