<?php 

class User 
{
    private string $user_email;

    public function __construct(string $email)
    {
        $this->setEmail($email);
    }

    public function getEmail(): string
    {
        return $this->user_email;
    }

    public function setEmail(string $email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('invalid email address.');
        }
        $this->user_email = $email;
    }
}


 
$user1 = new User('mehdi@yahoo.com');
var_dump($user1);
$user1->setEmail('vahid@yahoo.com');
var_dump($user1);