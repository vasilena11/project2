<?php
include('config.php');

// Create connection
$db = mysqli_connect($host, $username, $password, $database);
mysqli_query($db, "SET NAMES utf8");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = intval($_GET['id']);
if($id > 0) {
	$result = mysqli_query($conn, "DELETE FROM messages WHERE id = ".$id);
	if(!$result) {
		echo "greshka";
	} else {
		header("Location: index.php?page=messages");
		exit;
	}
}




