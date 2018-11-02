<?php

class Questions{

    function __construct(){
        $this->query_particular_subject="SELECT * FROM questions where id=:id";
        $this->query_featured="SELECT * FROM questions WHERE questions.featured=1 AND questions.active=1 ORDER BY questions.asked DESC LIMIT 25";
        $this->query_particular_subject_active="SELECT * FROM questions where subject_id=:subject_id AND active='1'";
        $this->query_all_question_incl_inactive="SELECT * FROM questions";
        $this->query_all_questions_user="SELECT * FROM questions where login_id=:login_id";
        $this->query_insert_question="INSERT INTO questions(question,short_answer,long_answer,subject_id,login_id) VALUES( :question,:short_answer,:long_answer,:subject_id,:login_id)";
        $this->delete_question_with_ID="DELETE FROM questions WHERE id=:question_id";
        $this->update_question="UPDATE questions SET question=:que,short_answer=:short_answer,long_answer=:long_answer WHERE id=:id";
        $this->getinactive_questions="SELECT * FROM questions where active=:active";
        $this->get_active="select * from questions where active='1'";
        $this->search_questions="SELECT *, MATCH(long_answer) AGAINST(:query) AS Score1, MATCH(question) AGAINST(:query) AS Score2 FROM questions WHERE (MATCH(long_answer) AGAINST(:query) OR MATCH(question) AGAINST(:query)  OR UPPER(question) LIKE UPPER(:query) OR UPPER(long_answer) LIKE UPPER(:query)) && active='1' ORDER BY Score1+ Score2 DESC";
        $this->getrelated_questions="SELECT * FROM questions where subject_id= :subject_id && active='1' && id!=:question_id && id>:question_id ORDER BY id ASC LIMIT 5";
    }
    public function getRelatedQuestions($subject_id,$question_id){
        return getQueryResult( $this->getrelated_questions,["subject_id"=>$subject_id,"question_id"=>$question_id]);
    }
    public function getFeatured(){
        return getQueryResult($this->query_featured);
    }
    public function getParticularSubject($id){
        return getQueryResult($this->query_particular_subject,['id'=>$id]);
    }
    public function getActive(){
        return getQueryResult($this->get_active);
    }
    public function getAllQuestionsInactiveToo(){
        return getQueryResult( $this->query_all_question_incl_inactive);
    }
    public function getQuestionsReview($subject_id){
        return getQueryResult($this->query_particular_subject_active,["subject_id"=>$subject_id]);
    }
    public function searchQuestion($query){
        $query ="%".$query."%";
        return getQueryResult($this->search_questions,["query"=>$query]);
    }
    public function getQuestionsUser($emailid){
        return getQueryResult($this->query_all_questions_user,["login_id"=>$emailid]);
    }
    public function setQuestions($question,$short_answer,$long_answer,$subject_id,$login_id){
        return setQueryParams($this->query_insert_question,["question"=>$question,"short_answer"=>$short_answer,"long_answer"=>$long_answer,"subject_id"=>$subject_id,"login_id"=>$login_id]);
    }
    public function delQuestionWithID($question_id){
        return setQueryParams($this->delete_question_with_ID,["question_id"=>$question_id]);
    }
    public function updateQuestion($que,$short_answer,$long_answer,$id){
        return setQueryParams($this->update_question,["que"=>$que,"short_answer"=>$short_answer,"long_answer"=>$long_answer,"id"=>$id]);
    }
    public function getInactiveQuestion($active){
        return getQueryResult( $this->getinactive_questions,["active"=>$active]);
    }
}