
<?php

$conn = mysql_connect("localhost", "root", "");
		mysql_select_db('project', $conn);

 
 if($_SERVER['REQUEST_METHOD'] == "POST"){

 $first_name = isset($_POST['first_name']) ? mysql_real_escape_string($_POST['first_name']) : "";
 $last_name = isset($_POST['last_name']) ? mysql_real_escape_string($_POST['last_name']) : "";
 $user_name = isset($_POST['user_name']) ? mysql_real_escape_string($_POST['user_name']) : "";
 $email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
 $password = isset($_POST['password']) ? mysql_real_escape_string($_POST['password']) : "";
 $cpassword = isset($_POST['password_confirmation']) ? mysql_real_escape_string($_POST['password']) : "";
    $slquery = "SELECT 1 FROM sign_up WHERE email = '$email'";
    $selectresult = mysql_query($slquery);
  	if(mysql_num_rows($selectresult)>0)
    {
          header("Location:http://localhost/project/index2.php");
          return;
    }
    elseif($_POST['password'] != $_POST['password_confirmation']){
         echo '<script language="javascript">'; 
         echo 'alert("passwords doesnt match")';
         echo '</script>';
         header("Location:http://localhost/project/index2.php");
    	return;	
    }
    else{
 $sql = "INSERT INTO `sign_up` (`uid`,`first_name`, `last_name`,`user_name`, `email`, `password`) VALUES (NULL, '$first_name',
 '$last_name','$user_name', '$email', '$password')";
	}
 $qur = mysql_query($sql);

if($qur){
	header("Location:http://localhost/project/index2.php");
	}
}


 ?>