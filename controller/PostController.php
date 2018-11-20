<?php

//models
include_once("./model/Post.php");


function getOnePost($id){
    $post = new Post();
    $onePost = $post->getPost($id);

    return $onePost;
}
