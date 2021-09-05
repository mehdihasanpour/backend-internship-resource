<?php 

class Request
{
    private static $countOfGet = 0;
    private static $countOfPost = 0;

    public function get(string $url): void {
        self::$countOfGet ++;
    }

    public function post(string $url): void {
        self::$countOfPost ++;
    }

    public function countOfCalls(): int
    {
        return self::$countOfGet+ self::$countOfPost;
    }

    public function countOfCallFor(string $method): int
    {
        if($method == 'get'){
            return self::$countOfGet;
        }elseif($method == 'post'){
            return self::$countOfPost;
        }
    }

}
$f1 = new Request;
$f1->get('mehdi');
$f1->get('mehdi');
$f1->post('ali');
var_dump($f1->countOfCalls());
var_dump($f1->countOfCallFor('get'));
var_dump($f1->countOfCallFor('post'));
