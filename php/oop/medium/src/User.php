<?php

namespace App;

use Exception;

class User 
{
    public function __construct(private string $name,private string $email)
    {
        $this->setEmail($email);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function setEmail(string $email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('invalid email address.');
        }
        $this->email = $email;
    }
}