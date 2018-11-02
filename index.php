<?php require_once('_core/init.php');
$title="Home | E Learning Portal";
$description="E Learning Portal is a e-Learning Website";
$query= "";

if (isset($_GET['page']) && $_GET['page'] == 'frequently_asked_que') {
    $questions = new Questions();
    $view = new View("_view/faq.php");
    $view->featured = $questions->getFeatured();
    $title = "Frequently asked questions | E Learning Portal";
    $description = "Frequently asked questions from all categories on E Learning Portal";
}
elseif(isset($_GET['page']) && $_GET['page'] == 'question_paper')
{
    $view = new View("_view/question_paper.php");
    $papers = new Papers();
    $title="All Question Papers | E Learning Portal";
    $description="All Question Papers on E Learning Portal";
    $view->result = $papers->getActivePapers();
    $view->count = sizeof($view->result);
}
elseif (isset($_GET['page']) && $_GET['page'] == 'allsubjects')
{
    $view = new View("_view/allsubjects.php");
    $subjects = new Subjects();
    $title="All Subjects | E Learning Portal";
    $description="All Subjects on E Learning Portal";
    $view->result = $subjects->getAllSubjects();
    $view->count = sizeof($view->result);
}
elseif (isset($_GET['page']) && $_GET['page'] == '202')
{
    $view = new View("_view/202.php");
    $title="Admin Login | E Learning Portal";
    $descrition="E Learning Portal is a e-Learning Website";
}
elseif (isset($_GET['page']) && $_GET['page'] == 'tech')
{
    $view = new View("_view/tech_zone.php");
    $tech = new Tech();
    $title="Technical Zone | E Learning Portal";
    $description="Technical Education on E Learning Portal";
    $view->result = $tech->getActiveVideos();
    $view->count = sizeof($view->result);
}

elseif (isset($_GET['page']) && $_GET['page'] == 'contacts')
{
    $view = new View("_view/contact.php");
    $title="Contact Us | E Learning Portal";
    $description="Contact Us on E Learning Portal";
}
elseif (isset($_GET['page']) && $_GET['page'] == 'error')
{
    $view = new View("_view/error.php");
    $title="Error | E Learning Portal";
    $description="Nothing Found on E Learning Portal";
}
elseif (isset($_GET['page']) && $_GET['page'] == 'forget_password')
{
    $view = new View("_view/forget_password.php");
    $title="Forget Password | E Learning Portal";
    $description="Forget Password on E Learning Portal";
}
elseif (isset($_GET['page']) && $_GET['page'] == 'login')
{
    $view = new View("_view/login.php");
    $title="Login | E Learning Portal";
    $description="E Learning Portal Login Form";
    $view->notvalid=false;
    $view->notverified=false;
}
elseif (isset($_GET['page']) && $_GET['page'] == 'register')
{
    $view = new View("_view/signup.php");
    $title="Register | E Learning Portal";
    $description="Registration Form | E Learning Portal";
    $view->notvalid=false;
    $view->notverified=false;
}
elseif (isset($_GET['page']) && $_GET['page'] == 'register')
{
    $view = new View("_view/sineup.php");
    $title="Register | E Learning Portal";
    $description="Registration Form  for E Learning Portal";
    $view->notvalid=false;
    $view->notverified=false;
}
elseif (isset($_GET['page']) && $_GET['page'] == 'sub')
{
    $view = new View("_view/compiler_design_questions.php");
    $title="Questions | E Learning Portal";
    $description="All Questions on E Learning Portal";
}
elseif (isset($_GET['search']) && !empty($_GET['search']))
{
    $view = new View("_view/search.php");
    $title="Search :".$_GET['search'];
    $questions = new Questions();
    $query = $_GET['search'];
    $view->results = $questions->searchQuestion($_GET['search']);
    $description="All Questions on E Learning Portal";
}
else {
    $view = new View("_view/home.php");
    $subjects = new Subjects();
    $title="Home Page | E Learning Portal";
    $description="E Learning Portal is a e-Learning Website";
    $view->result = $subjects->getHomeSubjects();
    $view->count = sizeof($view->result);
}
$view->description = $description;
$view->title = $title;
$view->query = $query;
$view->is_active = getActive();
echo $view;
?>