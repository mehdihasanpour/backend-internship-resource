<?php

 class Post{

     public array $comments=[];
     public function __construct( public string $title, public string $content, public string $author){

     }
     public function addComment(string $comments){
         $this->comments[]=$comments;
     }
 }

$uho= new Post('no title','two title','shuemacher ');
 $uho->addComment('comment are feedbacks of user who vist the website');

 $uho->addComment('another comment from author');
var_dump($uho);