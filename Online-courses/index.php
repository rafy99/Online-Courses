<?php

/* TODO: Port to a better programming language */

session_start();
$servername = "localhost";
$dbname= "courses";

/* TODO: Set a password on mysql */
$username = "root";
$password = "";

function public_path($st){
	return "http://localhost/courses/Public/" . $st;
}
function url($st){
	return "/courses/" . $st;
}
function app_path($st){
	return "App/" . $st;
}
function redirect($path,$key=-1,$value=-1){
	if($key==-1){
		header("Location: http://localhost/courses/".$path);
	}else{
		header("Location: http://localhost/courses/".$path."/".$key."/".$value);
	}
	exit();
}

/* TODO: If a function is not called why does it exist? */
/* WARN: s/libirary/library/g */

function libirary($path){
	return "lib/" . $path;
}

$conn="";
try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
	echo $e;
}


require_once(app_path('Core/functions.php'));
require_once(app_path('Core/App.php'));
require_once(app_path('Core/Controller.php'));
require_once(app_path('Core/DataBase.php'));
require_once(app_path('Core/Mail.php'));

require_once(app_path('models/category_model.php'));
require_once(app_path('models/course_model.php'));
require_once(app_path('models/lesson_model.php'));
require_once(app_path('models/quiz_model.php'));
require_once(app_path('models/user_model.php'));
require_once(app_path('models/assignment_model.php'));
require_once(app_path('models/resourses_model.php'));
require_once(app_path('models/messages_model.php'));


DataBase::$conn = $conn;


$app = new App();




//end
?>
