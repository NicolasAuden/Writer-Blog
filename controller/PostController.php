<?php



//models
include_once("./model/Post.php");

function getAllPosts(){
    $post = new Post();
    $listPosts = $post->allPosts();

    return $listPosts;
}


?>