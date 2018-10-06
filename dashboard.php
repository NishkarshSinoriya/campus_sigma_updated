<?php
  include_once 'inc/db.php';
  include 'handlers/login/check_login.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
  include_once 'inc/head.php';
 ?>
  <body>
  <?php
  $head="dashboard";
  $sub_head="information about your profile";
  include 'inc/navi.php';
  include 'inc/dashboard.php';
  $id=$_SESSION['user_id'];
  $sql="SELECT * FROM users where id=$id" ;
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);

  if ($row['type']=='college') {
    include 'inc/sidebar/sidebar_clg.php';
  }
  elseif($row['type']=='company')
  {
    include 'inc/sidebar/sidebar_com.php';
  }
  elseif($row['type']=='student'){
    include 'inc/sidebar/sidebar_student.php';
  }
  else{
    
  }

  include 'inc/scripts.php';
   ?>
  </body>
</html>
