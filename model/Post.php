<?php

class Post{

    private $connect;
    protected $id;              
    protected $title;          
    protected $content;         
    protected $created_at;     
    protected $update_at;
    protected $user;

    public function __construct()
    {
        $db = BddConnect::getInstance();
        $this->connect = $db->getDbh();
    }

       }



?>

