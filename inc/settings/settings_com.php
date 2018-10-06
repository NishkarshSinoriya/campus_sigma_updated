  <?php
  include_once 'inc/db.php';
  include 'handlers/login/check_login.php';
  $id=$_SESSION['user_id']
  $sql="SELECT * FROM users WHERE id=$id";

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
          <form class="" action="handlers/query/add_info.php" method="post">
            <div class="grid">
              <div class="col-sm-12">
                <div class="heading">
                  <h3>update profile</h3>
                </div>
              </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">company name</label>
                <input placeholder="metronest" class="input" type="text" name="company_name" value="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">company sector</label>
                <input placeholder="IT company" class="input" type="text" name="company_stream" value="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">contact no.</label>
                <input placeholder="7894561230" class="input" type="text" name="contact_no" value="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">email</label>
                <input placeholder="metronest@gmail.com" class="input" type="text" name="" value="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">website</label>
                <input  placeholder="metronest.in" class="input" type="text" name="" value="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input_group">
                <label for="">location</label>
                <input placeholder="indore" class="input" type="text" name="" value="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input_group">
                <label for="">full address</label>
                <textarea placeholder="near chappan market, indore." class="input" name="name" rows="3" cols="80"></textarea>
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
                  <a href="#"><button type="button" name="button">update</button></a>
                </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
