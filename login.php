<?php
      $msg = '';
      $conn = mysql_connect("localhost", "root", "");
              mysql_select_db('project', $conn);
      $email = $_POST['email']; 
      $password = $_POST['password'];    
      $sql="SELECT * FROM sign_up WHERE email='$email' and password='$password'";
      $result=mysql_query($sql);
      $count=mysql_num_rows($result);
         if($count==1){
                       $_SESSION['email'] = 'email';
            header("Location:index2.php");
               }
         else {
               header("Location:index.php");
            
               }
         ?>
