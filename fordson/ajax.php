<?php

define('AJAX_SCRIPT', true);
// require_login();

require_once('../../config.php');

require_login();

$userid = $_REQUEST['userid'];

//mdl_magzter_user
//insert the user record in the below table april 20 2020
$record1 = new stdClass();
		$record1->date = date('M d, Y');
		$record1->counter = 1;
		$record1->userid = $userid;
		$record1->timecreated = time();
		$lastinsertid1 = $DB->insert_record('magzter_user', $record1);

	$record = new stdClass();
	$counterdetails = $DB->get_record('hpclmagzcounter',array('date'=>date('M d, Y'))); 
	if(empty($counterdetails)){
		$record->date = date('M d, Y');
		$record->counter = 1;
		$record->timecreated = time();
		$lastinsertid = $DB->insert_record('hpclmagzcounter', $record);
	}else{
		$record->id = $counterdetails->id;
		$record->counter = $counterdetails->counter+1;

		$lastupdatedid = $DB->update_record('hpclmagzcounter', $record);
	}


