<?php
$url = $_SERVER['REQUEST_URI'];
$tokens = explode('/', $url);
$is_active = $tokens[sizeof($tokens) - 1];
include '../_core/init.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
}
$title = "Questions Short Description | E Learning Portal";
$description = "Questions Short Description on E Learning Portal";
//question table data retrieve
$questions = new Questions();
$result = $questions->getQuestionsReview($id);
$count=sizeof($result);
//subject name subject data retrieve
$subjects = new Subjects();
$result1=$subjects->getSubjectsRelatedId($id);
$count1=sizeof($result1);
//all subjects
$subjects = new Subjects();
$result_all_Sub =$subjects->getSubjectsNotRelatedId($id);
$count_all_sub=sizeof($result_all_Sub);
//end of all subjects
if ($result1 < 1) {
} else { ?>
    <?php
}
?>