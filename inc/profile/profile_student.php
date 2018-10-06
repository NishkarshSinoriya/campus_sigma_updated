<?php
  require_once 'inc/db.php';
  $id=$_SESSION['user_id'];
  $sql="SELECT * FROM users  WHERE id=$id";
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
        <div class="card">
          <form class="" action="handlers/query/add_student_info.php?id=<?php echo $id ?>" method="post">
            <?php
            $sql="SELECT * FROM student WHERE user_id=$id";
            $result=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($result);
             ?>
            <div class="grid">
              <div class="col-sm-12">
                <div class="heading">
                  <h3>student profile</h3>
                </div>
              </div>
            <div class="col-sm-12">
              <div class="input_group">
                <label for="">full name</label>
                <input  class="input" type="text" name="full_name" value="<?php echo $row['full_name'] ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">email</label>
                <input  class="input" type="text" name="" value="<?php echo $row1['email'] ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">contact no.</label>
                <input  class="input" type="text" name="contact_no" value="<?php echo $row['contact_no'] ?>">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input_group">
                <label for="">college name</label>
                <input  class="input" type="text" name="college_name" value="<?php echo $row['college_name'] ?>">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input_group">
                <label for="">about yourself</label>
                <textarea  class="input" name="about" rows="3" cols="80"><?php echo $row['about'] ?></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">qualification</label>
                <select class="input" name="qualification">
                  <option value="<?php echo $row['qualification'] ?>">select qualification </option>
                  <option value="mba">mba</option>
                  <option value="b.tech">b.tech</option>
                  <option value="bsc">bsc</option>
                  <option value="msc">msc</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">prefered job location</label>
                <select class="input" name="location">
                  <option value="<?php echo $row['location'] ?>">select location</option>
                  <option value="east region">east region</option>
                  <option value="west region">west region</option>
                  <option value="north region">north region</option>
                  <option value="south region">south region</option>
                  <option value="central region">central region</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">Percentage In Engineering/Mba/Both</label>
                <input  class="input" type="text" name="percentage" value="<?php echo $row['percentage'] ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">year of passing</label>
                <input  class="input" type="text" name="year" value="<?php echo $row['year'] ?>">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="input_group">
                <label for="">upload resume</label>
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
