<?php

class Tech{

    function __construct(){
        $this->query_active_videos="SELECT * FROM technical_zone WHERE active=1";
        $this->query_all_videos="SELECT * FROM subject WHERE active=1";
        $this->query_all_videos_inactive_too="SELECT * FROM technical_zone";
        $this->query_set_video="INSERT INTO technical_zone(title,video_url,active) VALUES( :label,:desc,:active)";
        $this->query_delete_video="DELETE from technical_zone where id=:id";
        $this->query_update_video="update technical_zone set title=:title,video_url=:video_url where id=:id";
    }

    public function getActiveVideos(){
        return getQueryResult($this->query_active_videos);
    }
    public function getAllVideos(){
        return getQueryResult($this->query_all_videos);
    }
    public function getAllVideosInactiveToo(){
        return getQueryResult($this->query_all_videos_inactive_too);
    }
    public function setInsertVideo($title,$video_url,$active){
        return setQueryParams($this->query_set_video,["label"=>$title,"desc"=>$video_url,"active"=>$active]);
    }
    public function setDeleteVideo($id){
        return setQueryParams($this->query_delete_video,["id"=>$id]);
    }
    public function setUpdateVideo($title,$video_url,$id){
        return setQueryParams($this->query_update_video,["title"=>$title,"video_url"=>$video_url,"id"=>$id]);
    }
}