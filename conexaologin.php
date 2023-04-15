<?php
	$firstName = $_POST['firstName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$telefone = $_POST['telefone'];
	$nasc = $_POST['nasc'];

	// Database connection
	$conn = new mysqli('localhost','root','','teste', 3307);
    ?>