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
    </div>
    <div class="col-sm-12">
      <div id="job" class="card">
        <div class="heading">
          <h3>about institute</h3>
        </div>
        <form class="" action="handlers/query/add_college_info.php?id=<?php echo $id ?>" method="post">
          <?php
          $sql="SELECT * FROM college  WHERE user_id=$id";
          $result=mysqli_query($link,$sql);
          $row=mysqli_fetch_assoc($result);
           ?>
          <div class="container-fluid">
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">institute name</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <input class="input" type="text" name="institute_name" value="<?php echo $row['institute_name'] ?>">
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">upload logo</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <input type="file" name="" value="">
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">institute description</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <textarea name="description" rows="8" cols="80"><?php echo $row['institute_desc'] ?></textarea>
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">institute website</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <input class="input" type="text" name="website" value="<?php echo $row['website'] ?>">
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">year of establishment</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <select  class="selectpicker" name="year" required="true" data-live-search="true">
                    <optgroup label="2000">
                      <option value="<?php echo $row['year'] ?>">select year</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">Naac Accredation</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group float">
                  <input type="radio" name="naac_acc" value="yes">
                  <label for="">yes</label>
                </div>
                <div class="input_group float">
                  <input type="radio" name="naac_acc" value="no">
                  <label for="">no</label>
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">NAAC GRADE IF Accredited</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <select class="selectpicker" name="naac_grade" required="true" data-live-search="true">
                    <optgroup label="grades">
                      <option value="<?php echo $row['naac_grade'] ?>" >select grade</option>
                      <option value="a++">a++</option>
                      <option value="a+">a+</option>
                      <option value="a">a</option>
                      <option value="b++">b++</option>
                      <option value="b+">b+</option>
                      <option value="b">b</option>
                      <option value="c">c</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">number of students</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <input class="input" type="text" name="student_no" value="<?php echo $row['student_no'] ?>">
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">courses offered</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <select class="selectpicker" name="courses" required="true" data-live-search="true">
                    <option value="<?php echo $row['courses'] ?>">select course</option>
                    <option value="engineering">engineering</option>
                    <option value="mba">MBA</option>
                    <option value="bba/bbm">BBA/BBM</option>
                    <option value="bca">BCA</option>
                    <option value="mca">MCA</option>
                    <option value="m.com">M.COM</option>
                    <option value="b.com">B.COM</option>
                    <option value="mca">MCA</option>
                    <option value="ba">BA</option>
                    <option value="ma">MA</option>
                    <option value="others">others</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">select college region</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <select class="selectpicker" name="region">
                    <option value="<?php echo $row['region'] ?>">select region</option>
                    <option value="east region">east region</option>
                    <option value="west region">west region</option>
                    <option value="north region">north region</option>
                    <option value="south region">south region</option>
                    <option value="central region">central region</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">select college category</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group float">
                  <select class="selectpicker" name="category">
                    <option value="<?php echo $row['category'] ?>">select category</option>
                    <option value="IIM">IIM</option>
                    <option value="IIT">IIT</option>
                    <option value="NIT">NIT</option>
                    <option value="B-School">B-School</option>
                    <option value="Private college">Private college</option>
                    <option value="Govt. College">Govt. College</option>
                    <option value="Govt. University">Govt. University</option>
                    <option value="Central University">Central University</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row marg">
              <div class="heading">
                <h3>placement officer detail</h3>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">placement officer name</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <input class="input" type="text" name="officer_name" value="<?php echo $row['officer_name'] ?>">
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">contact number</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <input class="input" type="text" name="contact_no" value="<?php echo $row['contact_no'] ?>">
                </div>
              </div>
            </div>
            <div class="row marg">
              <div class="col-sm-3">
                <label for="">email</label>
              </div>
              <div class="col-sm-9">
                <div class="input_group">
                  <input class="input" type="text" name="" value="<?php echo $row1['email'] ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="button_pane">
            <button class="" type="submit" name="button">submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
