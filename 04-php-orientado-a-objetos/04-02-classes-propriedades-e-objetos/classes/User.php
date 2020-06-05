<?php 

class User{
    public $firstName;
    public $lastName;
    public $email;

    /**
     * @return mixed 
     */
    public function getFirstName(){
        return $this->firstName;
    }
    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName){
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * @return mixed 
     */
    public function getLastName(){
        return $this->lastName;
    }
    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName){
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * @return mixed 
     */
    public function getEmail(){
        return $this->email;
    }
    /**
     * Valida o e-mail dp usuário em um formato válido
     * @param $email
     * @reutrn bool
     */
    public function setEmail($email){
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

}
