<?php 
class Palestrante extends AppModel{	
	public $order = array('nome'=>'ASC');
	public $displayField = 'nome';
	public $hasMany = array('Palestra');
	
	public $validate = array(
        'nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo "Nome".'
            )
        ),
        'descricao' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo "Descrição".'
            )
        ),
        'url' => array(
			array(
                'rule' => 'url',
				'allowEmpty'=>true,
                'message' => 'Você deve informar uma url válida.'
            )
        )
    );
	
}//END CLASS
?>