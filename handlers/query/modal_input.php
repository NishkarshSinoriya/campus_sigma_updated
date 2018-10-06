<?php
  include_once('../../inc/db.php');
echo  $full_name=$_POST['full_name'];
echo  $contact_no=$_POST['contact_no'];
echo  $college_name=$_POST['college_name'];
echo  $qualification=$_POST['qualification'];
echo  $percentage=$_POST['percentage'];
echo  $year=$_POST['year'];
echo  $sql=" INSERT INTO student (full_name,contact_no,college_name,qualification,percentage,year) VALUES ('$full_name',$contact_no','$college_name','$qualification','$percentage','$year') ";
  mysqli_query($link,$sql);
  header('location:../../list_students.php');
 ?>
