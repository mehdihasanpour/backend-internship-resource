<?php
class User
{

    public function __construct(public string $email)
    {
        $this->changeEmail($email);

}


    public function changeEmail( string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("the email you have entered is invalid");
        }
        $this->email=$email;
    }


}
$essie= new User('kmskartel@gmail.com');

//$essie->changeEmail('go##nzel.com');


var_dump($essie);