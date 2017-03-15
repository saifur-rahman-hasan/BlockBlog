<?php

function has_error($errors)
{
	if($errors){

	}
}

// This function will check a valid email address
function is_valid_email($value)
{
	return !(boolean) (!empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL));
}

// This function will check your data is exists in your database table
// return boolean
function is_exists($param, $table = null)
{
	$table_name = (isset($table)) ? $table : 'users';
	global $db;
	$results = $db->query("SELECT {$param} FROM {$table_name} WHERE {$param} = '{$_POST[$param]}' LIMIT 1");
	if($results->num_rows){
		return true;
	}else{
		return false;
	}
}

// To get a form field value if set
// Return String / False
function get_value($name)
{
	if(isset($_POST[$name])){
		echo $_POST[$name];
	}
	return false;
}

// This function will check is a user is logged in or not
// return type boolean
function is_logged_in()
{
	return (boolean) (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true);
}