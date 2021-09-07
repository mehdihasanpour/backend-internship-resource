<?php
class User
{

    public function __construct( protected string $email)
    {
        $this->setEmail($email);

}


    public function setEmail( string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("the email you have entered is invalid");
        }
        $this->email=$email;
    }


}
$essie= new User('kmskartel@gmail.com');

//$essie->setEmail('go##nzel.com');


var_dump($essie);