<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php 
		echo $this->Html->css('reset'); 
		echo $this->Html->css('style'); 
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<!-- begin div principal -->
<div id="principal" class="round-box shadow-box">
	<header>
		<!-- begin div banner -->
		<div id="banner" class="marginAuto">
			<?php echo $this->Html->image('banners/banner-teatro-municipal.jpg',array('alt'=>'teatro municipal',
			'title'=>'Local do Evento')); ?>
		</div><!-- end div banner -->
		
		<?php 
			echo $this->element('menu',array(
				'links'=>array(
					array(
						'titulo'=>'Home',
						'href'=>'/',
						'class'=>'menu-home'
					),
					array(
						'titulo'=>'Palestras',
						'href'=>'/palestras',
						'class'=>'menu-palestras'
					),
					array(
						'titulo'=>'Palestrantes',
						'href'=>'/palestrantes',
						'class'=>'menu-palestrantes'
					),
					array(
						'titulo'=>'Como chegar',
						'href'=>'/como-chegar',
						'class'=>'menu-como-chegar'
					),
					array(
						'titulo'=>'Inscrições',
						'href'=>'/inscricoes',
						'class'=>'menu-inscricoes'
					),
					array(
						'titulo'=>'Sobre o Evento',
						'href'=>'/sobre-evento',
						'class'=>'menu-sobre-evento'
					)
				)		
			));
			
		?>
	</header>
		<?php echo $this->fetch('content'); ?>
	<footer>
		<p>&copy; Nome do Evento - Todos os direitos reservados - 2013</p>
	</footer>
</div><!-- end div principal -->
<?php echo $this->element('google-analytics',array('code_analytics'=>"UA-39968483-1")); ?>
</body>
</html>