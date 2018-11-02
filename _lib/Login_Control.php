<?php

class Login_Control{

    function __construct(){
        $this->query_login="SELECT * FROM login WHERE email=:email AND pwd=:password";
        $this->query_forget_password="SELECT * FROM login WHERE email=:email";
    }
    public function getLogin($email,$password){
        return getQueryResult($this->query_login,["email"=>$email,"password"=>$password]);
    }
    public function getForget_Password($email){
        return getQueryResult($this->query_forget_password,["email"=>$email]);
    }
}