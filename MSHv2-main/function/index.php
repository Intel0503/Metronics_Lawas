<?php
include'connect.php';
session_start();

// if(isset($_POST['action'])){
// 	$action=$_POST['action'];



// }

	$email=$_POST['email'];
	$pass=($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    //extract($row)

	    $db_pass=$row['password'];

	    if($pass==$db_pass){
	    	echo"1";
	    	$_SESSION['email']=$email;
	    }else{
	    	echo"0";
	    }
	  }
	} else {
	  echo "2";
	}

?>