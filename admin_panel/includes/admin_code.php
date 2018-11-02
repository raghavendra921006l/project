<?php
if (isset($_FILES['profile_photo'])) {
    $file_name = $_FILES['profile_photo']['name'];
    $file_size = $_FILES['profile_photo']['size'];
    $file_tmp = $_FILES['profile_photo']['tmp_name'];
    $file_type = $_FILES['profile_photo']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['profile_photo']['name'])));
    $expensions = array("jpeg", "jpg", "png", "bmp");
    if (in_array($file_ext, $expensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }
    if (empty($errors) == true) {
        try {
            move_uploaded_file($file_tmp, "../assets/images/profile/" . $emailid . "." . $file_ext);
            $n = $emailid . "." . $file_ext;
            $update_pic = new NewUser();
            $update_pic->setUser_ProfilePic($n, $emailid);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $success = true;
    } else {
        $error = true;
    }
}
//end of profile photo

if (isset($_POST['pwd_button'])) {
    $check_old_password = new NewUser();
    $old=$check_old_password->getOldPassword($_SESSION["sess_user"],$_POST['old_pwd']);
    if( $old )
    {
        $password = $_POST['pwd'];
        if ($_POST['pwd'] == $_POST['retype_pwd']) {
            try {

                $update_password = new NewUser();
                $update_password->setUser_Password($password, $emailid);
                $pwd_change = true;
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
        }
    }

}
//add questions query
if (isset($_POST['submitquestion'])) {
    try {
        $question = $_POST['question'];
        $short_answer = $_POST['short_answer'];
        $long_answer = $_POST['long_answer'];
        $subject = $_POST['subject_selectbox'];
        //get subject id
        $subjects = new Subjects();
        $subject_get_id = $subjects->getSubjects_Detail($subject);
        $subject_id = $subject_get_id[0]->id;
        //end of get subject id
        //insert question to related subject
        $questions = new Questions();
        $questions->setQuestions($question, $short_answer, $long_answer, $subject_id, $result_id[0]->id);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
//end of add questions query

//insert subject
if (isset($_POST['submitsubject'])) {
    $data = new Database;
    try {
        $subject_name = $_POST['subname'];
        $subject_description = $_POST['subdesc'];
        $subjects = new Subjects();
        $subjects->setSubject($subject_name, $subject_description, $result_id[0]->id);
        header("Location:add");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
//end of insert subject
//insert question paper
if (isset($_POST['submitquestionpaper']) || isset($_FILES['paper_file'])) {
    try {
        $label = $_POST['label'];
        $subject = $_POST['subject'];
        $year = $_POST['year'];
        $papers = new Papers();
        $papers->setPaper($label, $subject, $year, $result_id[0]->id);
        //code for file upload
        $f_name = $label . $subject . $year;
        $f = str_replace(' ', '', $f_name);
        $file_name = $_FILES['paper']['name'];
        $file_size = $_FILES['paper']['size'];
        $file_tmp = $_FILES['paper']['tmp_name'];
        $file_type = $_FILES['paper']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['paper']['name'])));
        $expensions = array("pdf", "doc", "docx");
        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        move_uploaded_file($file_tmp, '../papers/' . $f . '.' . $file_ext);
        echo "Success";
        //end for code to fileupload
        header("Location:add");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
//end of insert question paper
if (isset($_POST['submit_delete_paper'])) {
    $paper = $_POST['select_oldpaper'];
    $papers_obj = new Papers();
    $papers_obj->set_delete_Papers($paper);
    header("Refresh:0");
}
if (isset($_POST['submit_delete_subject'])) {
    $subject_id = $_POST['subjectname'];
    $subjects = new Subjects();
    $subjects->set_Delete_Subject($subject_id);
    header("Refresh:0");
}
if (isset($_POST['submit_delete_question'])) {
    $subject = $_POST['select_subject'];
    $question_id = $_REQUEST['new_select'];
    $questions = new Questions();
    $questions->delQuestionWithID($question_id);
    header("Refresh:0");
}

if (isset($_POST['update_subject'])) {
    try {
        $sub_id = $_POST['subid'];
        $sub_name = $_POST['subname'];
        $sub_desc = $_POST['subdesc'];
        $subject = new Subjects();
        $subject->set_update_Subject($sub_name, $sub_desc, $sub_id);
        header("Refresh:0");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
if (isset($_POST['update_question'])) {
    try {
        $que_id = $_POST['que_id'];
        $que = $_POST['que'];
        $short_answer = $_POST['short_answer'];
        $long_answer = $_POST['long_answer'];
        $question = new Questions();
        $question->updateQuestion($que, $short_answer, $long_answer, $que_id);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
//insert tech video
if (isset($_POST['submit_insert_video'])) {
    $label = $_POST['label'];
    $desc = $_POST['desc'];
    try {
        $tech = new Tech();
        $tech->setInsertVideo($label, $desc, "1");
        header("Location:tech");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
//end of insert tech video
//delete tech video
if (isset($_POST['submit_delete_video'])) {
    $title = $_POST['video_title'];
    try {
        $tech = new Tech();
        $tech->setDeleteVideo($title);
        header("Location:tech");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
//end of delete tech video

if(isset($_POST['approve']) && !empty($_POST['subject_approve']))
{
    $i=0;
    $data = new Database;
    foreach($_POST['subject_approve'] as $check) {
        $query="UPDATE subject SET active='1'  WHERE id=:id";
        $data->query($query);
        $data->bind(':id',$check);
        $data->execute();
        $i++;
    }
    header("Refresh:0");
}

if(isset($_POST['q_approve']) && !empty($_POST['question_approve']))
{

    $i=0;
    $data = new Database;
    foreach($_POST['question_approve'] as $check) {
        $query="UPDATE questions SET active='1'  WHERE id=:id";
        $data->query($query);
        $data->bind(':id',$check);
        $data->execute();
        $i++;
    }
    header("Refresh:0");
}

//que approve
if(isset($_POST['que_approve']) && !empty($_POST['question_paper_approve']))
{
    $i=0;
    $data = new Database;
    foreach($_POST['question_paper_approve'] as $check) {
        $query="UPDATE question_paper SET active='1'  WHERE id=:id";
        $data->query($query);
        $data->bind(':id',$check);
        $data->execute();
        $i++;
    }
    header("Refresh:0");
}
//end of que approve
//update video
if(isset($_POST['update_video'])){
    try{
    $title=$_POST['video_title'];
    $id=$_POST['video_id'];
    $video_url=$_POST['video_url'];
    $tech = new Tech();
    $tech->setUpdateVideo( $title,$video_url,$id);
    header("Refresh:0");
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
//update video end
//deactive subject
if(isset($_POST['disapprove']) && !empty($_POST['subject_disapprove']))
{
    $i=0;
    $data = new Database;
    foreach($_POST['subject_disapprove'] as $check) {
        $query="UPDATE subject SET active='0'  WHERE id=:id";
        $data->query($query);
        $data->bind(':id',$check);
        $data->execute();
        $i++;
    }
    header("Refresh:0");
}
//end

//deactive questions
if(isset($_POST['q_disapprove']) && !empty($_POST['question_disapprove']))
{
    $i=0;
    $data = new Database;
    foreach($_POST['question_disapprove'] as $check) {
        $query="UPDATE questions SET active='0'  WHERE id=:id";
        $data->query($query);
        $data->bind(':id',$check);
        $data->execute();
        $i++;
    }
    header("Refresh:0");
}
//end
//deactive papers
if(isset($_POST['paper_disapprove']) && !empty($_POST['question_paper_disapprove']))
{
    $i=0;
    $data = new Database;
    foreach($_POST['question_paper_disapprove'] as $check) {
        $query="UPDATE question_paper SET active='0'  WHERE id=:id";
        $data->query($query);
        $data->bind(':id',$check);
        $data->execute();
        $i++;
    }
    header("Refresh:0");
}
//end
?>

