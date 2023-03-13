<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (empty($_POST['user_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['photo'])) {
		die('All fields are required.');
	}

	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$photo = $_FILES['photo'];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		die('Invalid email format.');
	}

	$upload_dir = 'uploads/';
	$filename = uniqid() . '_' . date('Y-m-d_H-i-s') . '_' . $photo['name'];

	if (!move_uploaded_file($photo['tmp_name'], $upload_dir . $filename)) {
		die('Error uploading file.');
	}

	
	$data = array($user_name, $email, $filename);
	$file = fopen('users.csv', 'a');

	if (fputcsv($file, $data) === false) {
		die('Error writing to file.');
	}

	fclose($file);

	session_start();
	setcookie('username', $user_name);

	header('Location: user_list.php');
	exit();
}
