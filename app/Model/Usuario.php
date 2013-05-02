<?php
App::uses('AuthComponent', 'Controller/Component');

class Usuario extends AppModel{

    public function beforeSave($options = array()){
        if(isset($this->data['Usuario']['senha'])){
            $pass = &$this->data['Usuario']['senha'];
            $pass = AuthComponent::password($pass);
        }//END IF
        return parent::beforeSave($options);
    }//END FUNCTION
}//END CLASS
?>