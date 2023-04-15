<?php
	$firstName = $_POST['firstName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$telefone = $_POST['telefone'];
	$nasc = $_POST['nasc'];

	// Database connection
	$conn = new mysqli('localhost','root','','teste', 3307);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registro(firstName, email, password, telefone, nasc)  values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstName, $email, $password, $telefone, $nasc, );
		$execval = $stmt->execute();
		echo $execval;
		header("Location: login.php");
		$stmt->close();
		$conn->close();
	}
?>