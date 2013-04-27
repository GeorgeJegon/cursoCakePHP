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
			array(
				'rule'=>'notEmpty',
				'message'=>'Preencha o campo "E-mail"'
			),
			array(
				'rule'=>'email',
				'message'=>'E-mail inválido'
			),
			array(
				'rule'=>'isUnique',
				'message'=>'Este e-mail já esta cadastrado em nossa base de dados!'
			)
		),
		'telefone' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo "Telefone".',
            ),
            array(
                'rule' => 'naturalNumber',
                'message' => 'Apenas números.',
            ),
        ),
        'endereco' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo "Endereço"',
            ),
            array(
                'rule' => array('minLength', 10),
                'message' => 'Informe ao menos 10 caracteres para o endereço!',
            )
        )
	);
}//END CLASS
?>