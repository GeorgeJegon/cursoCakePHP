<?php
class PalestrantesController extends AppController{
	public $scaffold = "painel";
	
	/*public function painel_index(){
		
	}//END FUNCTION*/
	
	public function index(){
		$params = array(
			'fields'=>array('Palestrante.descricao','Palestrante.site','Palestrante.id','Palestrante.nome'),
			'order'=>array('Palestrante.nome'=>'ASC')
		);
		$palestrantes = $this->Palestrante->find('all',$params);
		$this->set('palestrantes',$palestrantes);
	}//END FUNCTION
	
	public function george(){}
	
	public function view($id){
		$this->Palestrante->id = $id;
		$palestrante = $this->Palestrante->read();
		$this->set('palestrante',$palestrante);
	}//END FUNCTION
	
}//END CLASS
?>