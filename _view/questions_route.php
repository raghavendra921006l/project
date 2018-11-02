<?php
$url = $_SERVER['REQUEST_URI'];
$tokens = explode('/', $url);
$is_active = $tokens[sizeof($tokens) - 1];
include '../_core/init.php';
$title="Questions | E Learning Portal";
$description="Questions & Related Questions on E Learning Portal";

$subject_id = $_GET['s_id'];
$question_id = $_GET['q_id'];

$questions = new Questions();
$result=$questions->getParticularSubject($question_id);
$count=sizeof($result);

//subject name subject data retrieve
$subjects = new Subjects();
$result1=$subjects-> getSubjectsRelatedId($subject_id);
$count1=sizeof($result1);

//get related question
$questions = new Questions();
$result_related_Sub=$questions->getRelatedQuestions($subject_id,$question_id);
$count_relate_sub=sizeof($result_related_Sub);
?>