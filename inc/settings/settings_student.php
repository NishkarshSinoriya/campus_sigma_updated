<?php
include_once 'inc/db.php';
include 'handlers/login/check_login.php';
$id=$_SESSION['user_id'];
$sql=" SELECT * FROM users WHERE id=$id ";
$result=mysqli_query($link,$sql);
$row1=mysqli_fetch_assoc($result);

 ?>
<div id="db" class="active">
  <div class="container-fluid">
    <div class="row">
      <div class="head">
        <h3><?php echo $head ?></h3>
        <p><?php echo $sub_head ?></p>
      </div>

      <div class="col-sm-6">
        <div class="card set">
          <form class="" action="handlers/query/add_student_info.php?id=<?php echo $id ?>" method="post">
            <?php
            $sql="SELECT * FROM student_info  WHERE user_id=$id";
            $result=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($result);
             ?>
            <div class="grid">
              <div class="col-sm-12">
                <div class="heading">
                  <h3>profile</h3>
                </div>
              </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">first name</label>
                <input  class="input" type="text" name="first_name" value="<?php echo $row['first_name'] ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">last name</label>
                <input  class="input" type="text" name="last_name" value="<?php echo $row['last_name'] ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">college name</label>
                <input  class="input" type="text" name="college_name" value="<?php echo $row['college_name'] ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">academic qualification</label>
                <input  class="input" type="text" name="qualification" value="<?php echo $row['qualification'] ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">contact no.</label>
                <input  class="input" type="text" name="contact_no" value="<?php echo $row['contact_no'] ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">email</label>
                <input  class="input" type="text" name="" value="<?php echo $row1['email'] ?>">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input_group">
                <label for="">full address</label>
                <textarea  class="input" name="address" rows="3" cols="80"><?php echo $row['address'] ?></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">user's avatar</label>
                <input style="border:0;" class="input" type="file" name="" value="">
              </div>
            </div>
            <div class="col-sm-12">
                <div class="button_pane">
                  <a href="#"><button type="submit" name="button">update</button></a>
                </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
