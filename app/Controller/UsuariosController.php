<?php
class UsuariosController extends AppController{
	public $scaffold = 'painel';

    public function painel_login(){
        if ($this->request->is('post') && !empty($this->request->data)) {
            if($this->Auth->login()){
                $this->redirect($this->Auth->redirect());
            }else{
                $this->Session->setFlash('Login e/ou Senha incorretos!');
            }//END IF
        }//END IF
    }//END FUNCTION

    public function painel_logout(){
        $this->redirect($this->Auth->logout());
    }//END FUNCTION
}//END CLASS
?>