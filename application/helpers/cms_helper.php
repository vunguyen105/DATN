<?php
function is_success_flashdata($flashdata) {
	$CI = & get_instance ();
	return ($CI->session->flashdata ( 'success' ) != false) ? true : false;
}
function is_warning_flashdata($flashdata) {
	$CI = & get_instance ();
	return ($CI->session->flashdata ( 'warning' ) != false) ? true : false;
}
function is_info_flashdata($flashdata) {
	$CI = & get_instance ();
	return ($CI->session->flashdata ( 'info' ) != false) ? true : false;
}
function is_error_flashdata($flashdata) {
	$CI = & get_instance ();
	return ($CI->session->flashdata ( 'error' ) != false) ? true : false;
}
function is_login() {
	$is_logged = $this->session->userdata ( 'loggedin' );
	if (isset ( $is_logged ) && $is_logged == true)
		return true;
	else
		return false;
}


