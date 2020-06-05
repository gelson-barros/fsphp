<?php 

namespace Source\Interpretation;

class User{
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * @return mixed 
     */
    public function getFirstName(){
        return $this->firstName;
    }
    

    /**
     * @return mixed 
     */
    public function getLastName(){
        return $this->lastName;
    }
    

    /**
     * @return mixed 
     */
    public function getEmail(){
        return $this->email;
    }
    

}
