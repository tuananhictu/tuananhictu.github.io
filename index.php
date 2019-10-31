<?php
	$action = $_GET['action'];
	require_once("controller/Controller.php");
	$Controller = new Controller();
	if ($action == 'list') {
		$Controller -> ShowData();
	}
	if ($action == 'insertData') {
		$Controller -> insertData();
	}
	if ($action == 'insert') {
		$Controller -> insert();
	}
	if($action == 'delete'){
		$Controller -> delete();
	}
	if($action == 'updateData'){
		$Controller -> updateData();
	}
	if($action == 'update'){
		$Controller -> update();
	}
	if($action == 'search'){
		$Controller -> search();
	}
	
?>