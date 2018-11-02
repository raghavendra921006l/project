<?php require_once('_core/init.php');
if (isset($_GET['page']) && $_GET['page'] == 'delete') {
    if ($_SESSION["sess_user"] != 'itsmesahilverma@gmail.com' || $_SESSION["name"] != 'Sahil Verma') {
        header("Location: index");
    }
    $view = new View("admin_panel/delete.php");
    $view->title = "Delete Questions | Void Learn";
    $view->description = "Delete questions from all categories on Void Learn";
    /*delete all category page*/
    $subjects = new Subjects();
    $view->result_subject = $subjects->getSubjectsIdName();
    $view->count_subject = sizeof($view->result_subject);
//end of select subject for delete question
    //select  question for delete question paper
    $papers = new Papers();
    $view->result_que = $papers->getAllPapers();
    $view->count_que = sizeof($view->result_que);
//end of question for delete question paper
} elseif (isset($_GET['page']) && $_GET['page'] == 'update') {
    if ($_SESSION["sess_user"] != 'itsmesahilverma@gmail.com' || $_SESSION["name"] != 'Sahil Verma') {
        header("Location: index");
    }
    $view = new View("admin_panel/update.php");
    $view->title = "Update Questions | Void Learn";
    $view->description = "Update questions from all categories on Void Learn";
    //select subject for select box
    $subjects = new Subjects();
    $view->result_update_subjects = $subjects->getSubjectsIdName();
    $view->count_update_subjects = sizeof($view->result_update_subjects);
//end

} elseif (isset($_GET['page']) && $_GET['page'] == 'view') {
    if ($_SESSION["sess_user"] != 'itsmesahilverma@gmail.com' || $_SESSION["name"] != 'Sahil Verma') {
        header("Location: index");
    }
    $view = new View("admin_panel/admin_view.php");
    $view->title = "View Data | Void Learn";
    $view->description = "View Data from all categories on Void Learn";
    $subjects = new Subjects();
    $view->get_subjects_active=$subjects->getAllSubjects();
    $view->count_subjects_active=sizeof($view->get_subjects_active);

    $questions = new Questions();
    $view->result_questions=$questions->getActive();
    $view->count_questions=sizeof($view->result_questions);
    $papers = new Papers();
    $view->result_papers=$papers->getActivePapers();
    $view->count_papers=sizeof($view->result_papers);

} elseif (isset($_GET['page']) && $_GET['page'] == 'tech') {
    if ($_SESSION["sess_user"] != 'itsmesahilverma@gmail.com' || $_SESSION["name"] != 'Sahil Verma') {
        header("Location: index");
    }
    $view = new View("admin_panel/tech_zone.php");
    $view->title = "Technical Zone | Void Learn";
    $view->description = "Technical Zone on Void Learn";
    //select video
    $tech = new Tech();
    $view->result_tech = $tech->getAllVideosInactiveToo();
    $view->count_video = sizeof($view->result_tech);
//end of select video
} elseif (isset($_GET['page']) && $_GET['page'] == 'approve') {
    $view = new View("admin_panel/approve.php");
    $view->title = "Approve | Void Learn";
    $view->description = "Approve all categories on Void Learn";
//subject select code
    $subjects = new Subjects();
    $view->result_subject = $subjects->getunactivesub('0');
    $view->count_subject = sizeof($view->result_subject);
    //end of subject select
//question select code
    $questions = new Questions();
    $view->result_question = $questions->getInactiveQuestion('0');
    $view->count_question = sizeof($view->result_question);
//end of question select
//question select code
    $papers = new Papers();
    $view->result2 = $papers->getUnactivePapers();
    $view->count2 = sizeof($view->result2);
//end of question select
} elseif (isset($_GET['page']) && $_GET['page'] == 'logout') {
    $view = new View("admin_panel/logout.php");
    $view->title = "Logout | Void Learn";
    $view->description = "Void Learn is a e-Learning Website";
} elseif (isset($_GET['page']) && $_GET['page'] == 'your_subjects') {

    if (!$_SESSION["sess_user"] || !$_SESSION["name"]) {
        header("Location: ../login");
    }
    $view = new View("admin_panel/usersubjects.php");
    $view->title = "Your Subjects | Void Learn";
    $view->description = "Void Learn is a e-Learning Website";
    //get all from particular email id from login table
    $login_control = new Login_Control();
    $view->result_id = $login_control->getForget_Password($_SESSION['sess_user']);
    $view->count_id = sizeof($view->result_id);

    $subjects = new Subjects();
    $view->result = $subjects->getAllSubjects_LoginID($view->result_id[0]->id);
    $view->count = sizeof($view->result);

} elseif (isset($_GET['page']) && $_GET['page'] == 'your_papers') {

    if (!$_SESSION["sess_user"] || !$_SESSION["name"]) {
        header("Location: ../login");
    }
    $view = new View("admin_panel/usersquestion_papers.php");
    $view->title = "Your Papers | Void Learn";
    $view->description = "Void Learn is a e-Learning Website";
    $data_id = new Database;
    //get email ID from login table
    $login_Detail = new Login_Control();
    $view->result_id = $login_Detail->getForget_Password($_SESSION['sess_user']);
    $view->count_id = sizeof($view->result_id);
    //select question paper related to particular login ID
    $papers = new Papers();
    $view->result = $papers->getPapersRelatedLoginID($view->result_id[0]->id);
    $view->count = sizeof($view->result);
} elseif (isset($_GET['page']) && $_GET['page'] == 'profile') {

    if (!$_SESSION["sess_user"] || !$_SESSION["name"]) {
        header("Location: ../login");
    }
    $view = new View("admin_panel/profile.php");
    $view->title = "Profile | Void Learn";
    $view->description = "Profile Area on Void Learn";
    //get all from particular email id from login table
    $login_control = new Login_Control();
    $view->result_id = $login_control->getForget_Password($_SESSION['sess_user']);
    $view->count_id = sizeof($view->result_id);
    $view->name = $_SESSION["name"];
    $view->emailid = $_SESSION["sess_user"];
    $view->success = false;
    $view->error = false;
    $view->pwd_change = false;
    $view->errors = array();
    $view->file_ext = "";
    $view->file_name = "";

} elseif (isset($_GET['page']) && $_GET['page'] == 'your_questions') {
    if (!$_SESSION["sess_user"] || !$_SESSION["name"]) {
        header("Location: ../login");
    }
    $view = new View("admin_panel/usersquestions.php");
    $view->title = "Your Questions | Void Learn";
    $view->description = "Void Learn is a e-Learning Website";
    $login_control = new Login_Control();
    $view->result_question = $login_control->getForget_Password($_SESSION['sess_user']);
    $view->count_question = sizeof($view->result_question);

    //select questions
    $questions = new Questions();
    $view->result = $questions->getQuestionsUser($view->result_question[0]->id);
    $view->count = sizeof($view->result);
//end of select Questions
} elseif (isset($_GET['page']) && $_GET['page'] == 'index') {
    if (!$_SESSION["sess_user"] || !$_SESSION["name"]) {
        header("Location: ../login");
    }
    $view = new View("admin_panel/index.php");
    //get login id for particular email id
    $login_control = new Login_Control();
    $view->result_id = $login_control->getForget_Password($_SESSION['sess_user']);
//For Question Paper Count
    $papers = new Papers();
    $view->result_paper = $papers->getPapersRelatedLoginID($view->result_id[0]->id);
    $view->count_paper = sizeof($view->result_paper);

    //For Subject Count
    $subjects = new Subjects();
    $view->result_subject = $subjects->getAllSubjects_LoginID($view->result_id[0]->id);
    $view->count_subject = sizeof($view->result_subject);
    //FOR Question Count
    $questions = new Questions();
    $view->title = "Dashboard | Control Panel";
    $view->description = "Dasboard on Void Learn";
    $view->result_question = $questions->getQuestionsUser($view->result_id[0]->id);
    $view->count_question = sizeof($view->result_question);
} elseif (isset($_GET['page']) && $_GET['page'] == 'add') {
    if (!$_SESSION["sess_user"] || !$_SESSION["name"]) {
        header("Location: ../login");
    }
    $view = new View("admin_panel/add.php");
//select all subjects
    $subjects = new Subjects();
    $view->result_subject = $subjects->getAllSubjects_inactive_too();
    $view->count_subject = sizeof($view->result_subject);
    //get user email_id
    $query_login = new Login_Control();
    $view->result_id = $query_login->getForget_Password($_SESSION['sess_user']);
    //end of getemailid
    $view->title = "Add | Control Panel";
    $view->description = "Add Data on Void Learn";
}
else {
    $view = new View("admin_panel/index.php");
    $view->title = "Admin Dashboard | Void Learn";
    $view->descrition = "Dashboard on Void Learn";
}
$view->is_active = getActive();
echo $view;
?>