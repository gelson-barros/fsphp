<?php 

namespace Source\Qualifield;

class User{
    private $firstName;
    private $lastName;
    private $email;

    private $error;

    public function setUser($firstName, $lastName, $email){
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        if (!$this->setEmail($email)) {
            $this->error = "O e-email {$this->getEmail()} não é válido!";
            return false;
        }
        return true;
    }
    /**
     * @return mixed
     */
    public function getError(){
        return $this->error;
    }

    /**
     * @return mixed 
     */
    public function getFirstName(){
        return $this->firstName;
    }
    /**
     * @param mixed $firstName
     */
    private function setFirstName($firstName){
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
    private function setLastName($lastName){
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
    private function setEmail($email){
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

}
