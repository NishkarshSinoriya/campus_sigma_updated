<div id="db" class="active">
  <div class="container-fluid">
    <div class="row">
      <div class="head">
        <h3><?php echo $head ?></h3>
        <p><?php echo $sub_head ?></p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <form class="" action="handlers/query/add_company_info.php?id=<?php echo $id ?>" method="post">
          <?php
          $sql="SELECT * FROM company  WHERE user_id=$id";
          $result=mysqli_query($link,$sql);
          $row=mysqli_fetch_assoc($result);
           ?>
          <div class="grid">
            <div class="col-sm-12">
              <div class="heading">
                <h3> company profile</h3>
              </div>
            </div>
          <div class="col-sm-12">
            <div class="input_group">
              <label for="">company name</label>
              <input  class="input" type="text" name="company_name" value="<?php echo $row['company_name'] ?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input_group">
              <label for="">email</label>
              <input  class="input" type="text" name="email" value="<?php echo $row['email'] ?>">
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
              <label for="">year of establishment</label>
              <input  class="input" type="text" name="year" value="<?php echo $row['year'] ?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input_group">
              <label for="">nature of business</label>
              <input  class="input" type="text" name="business" value="<?php echo $row['business'] ?>">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="input_group">
              <label for="">description</label>
              <textarea  class="input" name="desc" rows="3" cols="80"><?php echo $row['description'] ?></textarea>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="input_group">
              <label for=""> address</label>
              <textarea  class="input" name="address" rows="3" cols="80"><?php echo $row['address'] ?></textarea>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input_group">
              <label for="">upload logo</label>
              <input class="input" type="file" name="" value="">
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
