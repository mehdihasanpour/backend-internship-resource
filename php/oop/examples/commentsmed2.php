<?php

class User
{
    protected string $email;

    public function __construct(string $email)
    {
        $this->setEmail($email);


    }


    public function setEmail(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("the email you have entered is invalid");
        }
        $this->email = $email;
    }


}

class Comment
{


    public function __construct(public int $id, public string $contents, public User $user, public DateTimeImmutable $submitedAt)
    {

    }


}

class Post
{

    public array $comments;

    public function __construct(public int $id, public User $author, public string $content, public string $title)
    {
    }

    public function addComment(Comment $comment)
    {

        $this->comments[] = $comment;
    }


    public function removeComment(int $id): void
    {
        foreach ($this->comments as $key => $comment) {
            if ($comment->id == $id) {
                unset($this->comments[$key]);

            }
        }

    }


}

$user = new User('hooshi@gmail.com');
$date = new DateTimeImmutable('2026-09-13');
$comment = new Comment(1, 'comment commment comment comment', $user, $date);
$post = new Post(1, $user, 'nocontetn', 'notil');
$post->addComment($comment);
//$post->removeComment(1);


var_dump($post);