<?php
class PalestrasController extends AppController{
	public function index(){
		$params = array(
			'fields'=>array('Palestra.nome','Palestra.descricao','Palestra.inicio','Palestrante.id','Palestrante.nome'),
			'order'=>array('Palestra.inicio'=>'ASC')
		);
		$palestras = $this->Palestra->find('all',$params);
		$this->set('palestras',$palestras);
	}//END FUNCTION
	
	public function view($id){
		echo $id;
	}//END FUNCTION
}//END CLASS
?>