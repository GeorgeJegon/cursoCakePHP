<section>
	<h1>Inscrições</h1>
	       
	<fieldset>
		<legend></legend>
		
		<?php 
			echo $this->Form->create('inscricao',array('url'=>array('controller'=>'inscricoes','action'=>'inscrever')));
				echo $this->Form->input('nome',array('name'=>'nome'));
				echo $this->Form->input('email',array('name'=>'email'));
				echo $this->Form->input('telefone',array('name'=>'telefone'));
				echo $this->Form->input('endereco',array('name'=>'endereco'));
				echo $this->Form->submit('Inscrever-se');
			echo $this->Form->end();
		?>
		
	</fieldset>
</section>