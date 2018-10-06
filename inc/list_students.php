<?php
require_once 'inc/db.php';
$id=$_SESSION['user_id'];
$sql="SELECT * FROM college WHERE user_id=$id ";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$college=$row['institute_name'];
?>


<div id="db" class="active">
  <div class="container-fluid">
    <div class="row">
      <div class="head">
        <h3><?php echo $head ?></h3>
      </div>
      <div class="button_pane">
        <button type="button" name="button">check all</button>
        <button data-target='#modal' data-toggle='modal' type="button" id="button" name="button">send message</button>
        <button  class="blue" data-target='#mymodal' data-toggle='modal' type="button"  name="button">add student</button>
      </div>
      <?php
      $sql="SELECT * FROM student WHERE college_name='$college'";
      $result=mysqli_query($link,$sql);
      ?>
      <div class="col-sm-12">
        <table class="table">
          <tr>
            <th>check</th>
            <th>name</th>
            <th>college name</th>
            <th>qualification</th>
            <th>percentage/cgpa</th>
            <th>year of passing</th>
          </tr>
          <?php
          while ($row=mysqli_fetch_assoc($result)) {?>
            <tr>
            <td> <input type="checkbox" name="" value=""> </td>
            <td><?php echo $row['full_name'] ?></td>
            <td><?php echo $row['college_name'] ?></td>
            <td><?php echo $row['qualification'] ?></td>
            <td><?php echo $row['percentage'] ?></td>
            <td><?php echo $row['year'] ?></td>
            </tr>
        <?php  }
           ?>

        </table>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="modal-title" id="modal">Send message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12">
          <textarea name="name" rows="8" cols="80"></textarea>
        </div>
  </div>
        <div class="modal-footer">
          <button type="button" class="blue">Send message</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="modal-title" id="modal">add student to the list</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modalbody">
        <form class="" action="handlers/query/modal_input.php" method="post">
          <div class="col-sm-12">
            <div class="input_group">
              <label for="">full name</label>
              <input class="input" type="text" name="full_name" value="">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input_group">
              <label for="">contact no.</label>
              <input class="input" type="text" name="contact_no" value="">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input_group">
              <label for="">percentage/cgpa</label>
              <input class="input" type="text" name="percentage" value="">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="input_group">
              <label for="">college name</label>
              <input class="input" type="text" name="college_name" value="">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input_group">
              <label for="">year</label>
              <input class="input" type="text" name="year" value="">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input_group">
              <label for="">qualification</label>
              <select class="input" name="qualification">
                <option value="">select qualification </option>
                <option value="mba">mba</option>
                <option value="b.tech">b.tech</option>
                <option value="bsc">bsc</option>
                <option value="msc">msc</option>
              </select>
            </div>
          </div>

  </div>
        <div class="modal-footer">
          <button type="submit" class="blue">add student</button>
        </div>
      </form>
    </div>
  </div>
</div>
