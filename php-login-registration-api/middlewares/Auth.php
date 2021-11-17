<?php
require __DIR__.'/../classes/JwtHandler.php';
class Auth extends JwtHandler{
    protected $db;
    protected $headers;
    protected $token;
    public function __construct($db,$headers) {
        parent::__construct();
        $this->db = $db;
        $this->headers = $headers;
    }
    public function isAuth(){
        if(array_key_exists('Authorization',$this->))
    }
}