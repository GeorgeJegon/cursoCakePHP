<?php 
class Palestra extends AppModel{	
	public $order = array('Palestra.nome'=>'ASC');
	public $displayField = 'nome';
	public $belongsTo = array('Palestrante');
	
	public $validate = array(
        'nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo "Nome".'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'Já existe uma palestra com este nome, por favor informe outro!'
            )
        ),
        'inicio' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo "Início".'
            ),
            array(
                'rule' => array('datetime', 'H:i'),
                'message' => 'Horário inválido.'
            )
        ),
        'fim' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo "Fim".'
            ),
            array(
                'rule' => array('datetime', 'H:i'),
                'message' => 'Horário inválido.'
            )
        )
    );
	
}//END CLASS
?>