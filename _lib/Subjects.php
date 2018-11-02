<?php

class Subjects{

    function __construct(){
        $this->query_home_subjects="SELECT * FROM subject WHERE active=1 LIMIT 5";
        $this->query_all_subjects="SELECT * FROM subject WHERE active=1";
        $this->query_all_subjects_inactive_too="SELECT * FROM subject";
        $this->query_all_subjects_LoginID="SELECT * FROM subject where user_id=:userid";
        $this->query_get_subject_detail = "SELECT * FROM subject where name=:subject";
        $this->query_add_subject = "INSERT INTO subject(name,description,user_id) VALUES( :subject_name,:subject_description,:login_id)";
        $this->query_select_id_name="SELECT id,name FROM subject";
        $this->query_delete_subject="DELETE FROM subject WHERE id=:subject_id";
        $this->query_update_subject="UPDATE subject SET name=:sub_name,description=:sub_desc WHERE id=:id";
        $this->query_notactive_subject="SELECT * FROM subject where active=:active";
        $this->query_subject_select_basisid="SELECT * FROM subject where id=:id";
        $this->query_subject_not_related_id="SELECT * FROM subject where id!=:id";
    }
    public function getSubjectsRelatedId($id){
        return getQueryResult($this->query_subject_select_basisid,["id"=>$id]);
    }
    public function getSubjectsNotRelatedId($id){
        return getQueryResult($this->query_subject_not_related_id,["id"=>$id]);
    }
    public function getHomeSubjects(){
        return getQueryResult($this->query_home_subjects);
    }
    public function getAllSubjects(){
        return getQueryResult($this->query_all_subjects);
    }
    public function getAllSubjects_inactive_too(){
        return getQueryResult($this->query_all_subjects_inactive_too);
    }
    public function getAllSubjects_LoginID($userid){
        return getQueryResult($this->query_all_subjects_LoginID,["userid"=>$userid]);
    }
    public function getSubjects_Detail($subject){
        return getQueryResult($this->query_get_subject_detail,["subject"=>$subject]);
    }
    public function getSubjectsIdName(){
        return getQueryResult($this->query_select_id_name);
    }
    public function setSubject($subject_name,$subject_description,$login_id){
        return setQueryParams($this->query_add_subject,["subject_name"=>$subject_name,"subject_description"=>$subject_description,"login_id"=>$login_id]);
    }
    public function set_Delete_Subject($subject_id){
        return setQueryParams( $this->query_delete_subject,["subject_id"=>$subject_id]);
    }
    public function set_update_Subject($sub_name,$sub_desc,$sub_id){
        return setQueryParams($this->query_update_subject,["sub_name"=>$sub_name,"sub_desc"=>$sub_desc,"id"=>$sub_id]);
    }
    public function getunactivesub($active){
        return getQueryResult($this->query_notactive_subject,["active"=>$active]);
    }
}