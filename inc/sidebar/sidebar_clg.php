<?php
  $id = $_SESSION['user_id'];
  include_once 'inc/db.php';
  $sql="SELECT * FROM users where id=$id" ;
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);
 ?>


<div id="sidebar" class="active">
  <div class="topbar">
    <span class="toggle" onclick="sidebar_toggle()"></span>
    <div class="logo">
      <h3><?php echo $row['type'] ?></h3>
    </div>
  </div>
  <div  class="profile">
    <div class="avatar">
    </div>
    <h3><?php echo $row['username'] ?></h3>
    <div class="arrow">

    </div>
  </div>
  <ul class="sidebar_nav">
    <a href="dashboard.php"><li><span class="icon" style="background: url('assets/img/analytics.svg');background-position: center;background-repeat:no-repeat;background-size: cover;"></span>dashboard</li></a>
    <a href="profile.php"><li><span class="icon" style="background: url('assets/img/icons/los.svg');background-position: center;background-repeat:no-repeat;background-size: cover;"></span>profile</li></a>
    <a href="#"><li><span class="icon" style="background: url('assets/img/paper.svg');background-position: center;background-repeat:no-repeat;background-size: cover;"></span>list tests</li></a>
    <a href="list_students.php"><li><span class="icon" style="background: url('assets/img/icons/list.svg');background-position: center;background-repeat:no-repeat;background-size: cover;"></span>list of students</li></a>
    <a href="settings.php"><li><span class="icon" style="background: url('assets/img/settings.svg');background-position: center;background-repeat:no-repeat;background-size: cover;"></span> settings</li></a>
    <a href="index.php?logout"><li><span class="icon" style="background: url('assets/img/logout.svg');background-position: center;background-repeat:no-repeat;background-size: cover;"></span> sign out</li></a>
  </ul>
</div>
