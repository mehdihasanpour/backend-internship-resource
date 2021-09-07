<?php
class User
{
protected string $email;
    public function __construct(string $email)
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
 class Comment extends User
{
    public string $contents;
    public DateTimeImmutable $submitedAt;



}
class Post extends User
{

    public array $comments;
    public function addComment (string $user, string $contents,DateTimeImmutable $submitedAt ){
        $comment= new Comment;
        $this->user=$user;
        $this->contents=$contents;
        $this->submitedAt=$submitedAt;
        $this->comments[]=$comment;
    }



public function __construct(string $user, public string $content,public  string $title){

}


}
$post = new Post ('kms@gmail.com', 'nonon ', 'nooooo');
$post->addComment('hoshi','nazrinadarm','2019-09-99');


var_dump($post);