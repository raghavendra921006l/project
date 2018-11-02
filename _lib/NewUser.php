<?php

class NewUser{

    function __construct(){
        $this->query_get_check_old_pwd="select * FROM login where email=:email,pwd=:pwd";
        $this->query_get_user_exists="SELECT email,pwd FROM login WHERE email=:email";
        $this->query_get_user="SELECT email,pwd FROM login WHERE email=:email";
        $this->query_register_user="insert into login(firstname,lastname,email,pwd,status,confirmation_code,profile_photo) values( :firstname,:lastname,:emailid,:password,'0',:confirmation_code,'nophoto.jpg')";
        $this->query_profile="UPDATE login SET profile_photo=:profile_photo WHERE email=:email";
        $this->query_update_password="UPDATE login SET pwd=:pwd WHERE email=:email";
    }

    public function getUser($username,$password){
        return getQueryResult($this->query_get_user);
    }
    public function getEmailExist($emailid){
        return getQueryResult($this->query_get_user_exists,["email"=>$emailid]);
    }
    public function setUser($fstname,$lstname,$emailid,$pass,$confirmationcode){
        return setQueryParams($this->query_register_user,["firstname"=>$fstname,"lastname"=>$lstname,"emailid"=>$emailid,"password"=>$pass,"confirmation_code"=>$confirmationcode]);
    }
    public function setUser_ProfilePic($profile_photo,$emailid){
        return setQueryParams($this->query_profile,["profile_photo"=>$profile_photo,"email"=>$emailid]);
    }
    public function setUser_Password($password,$emailid){
        return setQueryParams($this->query_update_password,["pwd"=>$password,"email"=>$emailid]);
    }
    public function getOldPassword($email,$password){
        return getQueryResult( $this->query_get_check_old_pwd,["email"=>$email,"pwd"=>$password]);
    }
}