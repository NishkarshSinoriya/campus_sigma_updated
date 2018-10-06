<?php
  $head="profile";
  $sub_head="add detailed information to your profile";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
  include_once 'inc/head.php';
 ?>
  <body>
  <?php
  include 'inc/db.php';
  include 'handlers/login/check_login.php';
  include 'inc/navi.php';
  $id=$_SESSION['user_id'];
  $sql="SELECT * FROM users where id=$id" ;
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);
  $type=$row['type'];
  if ($type=='college') {
    include 'inc/sidebar/sidebar_clg.php';
    include 'inc/profile/profile_clg.php';
  }
  elseif($type=='company')
  {
    include 'inc/sidebar/sidebar_com.php';
    include 'inc/profile/profile_com.php';
  }
  elseif($type=='student'){
    include 'inc/sidebar/sidebar_student.php';
    include 'inc/profile/profile_student.php';
  }
  else{

  }
  include 'inc/scripts.php';
   ?>
  </body>
</html>
