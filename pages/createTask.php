<?php

$formError = false;
// check form is submitted
if (isset($_POST["submit"])){
	$formError = true;
	// check all field given
	if(isset($_POST["category"]) && isset($_POST["title"]) && isset($_POST["affectedUser"]) && isset($_POST["description"])){
		$formError = false;
		createTask($_POST["category"], $_POST["title"], getUsername(), $_POST["affectedUser"], $_POST["description"]);
		redirect('listTask');
	}
}
include_once('views/createTaskForm.php');