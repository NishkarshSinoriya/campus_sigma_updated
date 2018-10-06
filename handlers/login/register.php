<?php
  require_once '../../inc/db.php';
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $type=$_POST['type'];

  if (!empty($username) and !empty($email) )
  {
    //user already exist check!!!
    $sql="SELECT * from users where username='$username' or email='$email'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);

        if (empty($row))
         {

            if (!empty($password) and !empty($cpassword) and $password===$cpassword )
               {
                   $password_hash=password_hash($password, PASSWORD_DEFAULT);
                   $sql="INSERT into users (username,password_hash,email,type) values ('$username','$password_hash','$email','$type')";
                   if (mysqli_query($link,$sql)) {
                     $msg='success';
                   }
                }
            else {
                $msg='password criteria not satisfied';
                }

        }

        else {
          $msg='username already exist';
        }
  }

  else
  {
    $msg=' username and email cannot be empty';
  }

  $url_msg=urlencode($msg);
  $redirect_link="../../register.php?msg=".$url_msg;

  if ($msg==='success') {
    header("location: ../../login.php");
  }
  else {
    header("location: $redirect_link");
  }



 ?>
