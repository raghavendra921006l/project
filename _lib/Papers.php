<?php

class Papers
{
    function __construct()
    {
        $this->query_active_papers = "SELECT * FROM question_paper WHERE active=1";
        $this->query_all_papers = "SELECT * FROM question_paper";
        $this->query_insert_paper="INSERT INTO question_paper(degree,subject,year,user_id) VALUES( :degree,:subject,:year,:login_id)";
        $this->query_que_del="DELETE FROM question_paper where id=:paper";
        $this->getpaper_related_to_login_ID="SELECT * FROM question_paper where user_id=:userid";
        $this->query_unactive_papers = "SELECT * FROM question_paper WHERE active=0";
    }

    public function getActivePapers()
    {
        return getQueryResult($this->query_active_papers);
    }

    public function getAllPapers()
    {
        return getQueryResult($this->query_all_papers);
    }
    public function getPapersRelatedLoginID($userid)
    {
        return getQueryResult($this->getpaper_related_to_login_ID,["userid"=>$userid]);
    }
    public function setPaper($degree,$subject,$year,$user_id)
    {
        return setQueryParams($this->query_insert_paper,["degree"=>$degree,"subject"=>$subject,"year"=>$year,"login_id"=>$user_id]);
    }
    public function set_delete_Papers($papers)
    {
        return setQueryParams($this->query_que_del,["paper"=>$papers]);
    }
    public function getUnactivePapers()
    {
        return getQueryResult($this->query_unactive_papers);
    }
}