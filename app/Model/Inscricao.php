<?php 
class Inscricao extends AppModel{	
	public $order = array('nome'=>'ASC');
	public $displayField = 'nome';
	
	public $validate = array(
		'nome'=>array(
			'rule'=>'notEmpty',
			'message'=>'Preencha o campo "Nome"'
		),
		'email'=>array(
			'campoRequired'=>array(
				'rule'=>'notEmpty',
				'message'=>'Preencha o campo "E-mail"'
			),
			'validaEmail'=>array(
				'rule'=>'email',
				'message'=>'E-mail inválido'
			)
			
		)
	);
}//END CLASS
?>