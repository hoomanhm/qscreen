<?php

/* formbuilder */
/* Copyright (c) 2015 (v3.0) HHM, Monotech (http://www.monotech.com) */
/* Simple script that stores the form data in a session for demo purposes */

session_start();

$form_data = isset($_POST['formData']) ? $_POST['formData'] : FALSE;

if( !$form_data ) {
	throw new Exception("Error Processing Request", 1);
}

$_SESSION['form_data'] = $form_data;