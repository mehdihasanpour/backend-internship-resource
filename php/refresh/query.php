<?php

$requested_query = $argv[1];

$data = file_get_contents("movies.json");

$all_movie_array = json_decode($data, true);

$movie_name = [];
// All of movies(): int
if($requested_query == 1){

    $result = count($all_movie_array);
    
}elseif($requested_query == 2){ //All of movies since specific year
    $requested_year = (int)$argv[2];

    foreach($all_movie_array as $value){
        if((int)$value['Year'] > $requested_year){
            $movie_name[] = $value['Title'];
        }
        
    }
    $result = $movie_name;

}elseif($requested_query == 3){//List of all movies
    foreach($all_movie_array as $value){
        $movie_name[] = $value['Title'];
    }
    $result = $movie_name;

}elseif($requested_query == 4){ //List of movies made by specific director
    $requested_director = $argv[2];
    foreach($all_movie_array as $value){
        if($value['Director'] == $requested_director){
            $movie_name[] = $value['Title'];
        }
    }
    $result = $movie_name;

}elseif($requested_query == 5){ //All movies with award

    foreach($all_movie_array as $value){
        if($value['Awards'] == 'Yes'){
            $movie_name[] = $value['Title'];
        }
    }
    $result = $movie_name;

}elseif($requested_query == 6){ //All movies with specific subject, since specific year
    $requested_subject = $argv[2];
    $requested_year = (int)$argv[3];

    foreach($all_movie_array as $value){
        if((int)$value['Year'] > $requested_year && $value['Subject'] == $requested_subject){
            $movie_name[] = $value['Title'];
        }
    }
    $result = $movie_name;
}

var_dump($result);

