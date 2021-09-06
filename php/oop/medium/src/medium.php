<?php

class User 
{
    public function __construct(private string $email)
    {
        $this->setEmail($email);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('invalid email address.');
        }
        $this->email = $email;
    }
}

class Post
{
    public function __construct(
        private string $title,
        private string $content,
        private string $author,
        private Comment $comment
    ) {
    }

}

class Comment
{
    public function __construct(
        private string $user,
        private string $content,
        private DateTimeImmutable $submitedAt
    ) {
    }
}

$user1 = new User('mehdi@yahoo.com');
var_dump($user1);
