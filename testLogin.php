<?php 
session_start(); 
include "conexaologin.php";

if (isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['telefone'])  && isset($_POST['nasc'])){	

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$firstName = validate($_POST['firstName']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$telefone = validate($_POST['telefone']);
	$nasc = validate($_POST['nasc']);

	if(empty($firstName)){
		header("Location: index.php?error=Password is required");
		exit();
	}else if (empty($email)) {
		header("Location: index.php?error=Email is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else if(empty($telefone)){
			header("Location: index.php?error=Password is required");
			exit();
	}else if(empty($nasc)){
		header("Location: index.php?error=Password is required");
		exit();

	}else{
		$sql = "SELECT * FROM registro WHERE firstName='$firstName' AND email='$email' AND password='$password' AND telefone='$telefone' AND nasc='$nasc'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['firstName'] === $firstName && $row['email'] === $email && $row['password'] === $password && $row['telefone'] === $telefone && $row['nasc'] === $nasc) {
            	$_SESSION['firstName'] = $row['firstName'];
            	$_SESSION['email'] = $row['email'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['telefone'] = $row['telefone'];
				$_SESSION['nasc'] = $row['nasc'];
			    $_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User email or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User email or password");
	        exit();
		}
	}
	
	}else{
	header("Location: home.php");
	exit();
}
?>