
<?php

$conn = mysqli_connect("localhost", "root", "", "project");

 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 if($_SERVER['REQUEST_METHOD'] == "POST"){

 $book_title = isset($_POST['book_title']) ? mysql_real_escape_string($_POST['book_title']) : "";
 $book_description = isset($_POST['book_description']) ? mysql_real_escape_string($_POST['book_description']) : "";
 $price = isset($_POST['price']) ? mysql_real_escape_string($_POST['price']) : "";
 $name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";
 $email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
 $contact_no = isset($_POST['contact_no']) ? mysql_real_escape_string($_POST['contact_no']) : "";
 $city = isset($_POST['city']) ? mysql_real_escape_string($_POST['city']) : "";
 
  
 $sql = "INSERT INTO `new_entry` (`userID`,`book_title`,`book_description`, `price`, `name`, `email`, `contact_no`,`city`) VALUES (NULL, '$book_title', '$book_description', '$price', '$name','$email', '$contact_no','city')";

$qur = mysqli_query($conn, $sql);

if($qur){
	
	header("Location:http://localhost/project/index.php#!/view");
	}
}
 ?>
