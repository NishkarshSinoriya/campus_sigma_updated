<?php
  include_once('../../inc/db.php');
    $id=$_GET['id'];
   $full_name=$_POST['full_name'];
   $contact_no=$_POST['contact_no'];
   $college_name=$_POST['college_name'];
   $about=$_POST['about'];
   $qualification=$_POST['qualification'];
   $location=$_POST['location'];
   $percentage=$_POST['percentage'];
   $year=$_POST['year'];
   $sql="SELECT * FROM student where user_id=$id";
   $result=mysqli_query($link,$sql);
   $row=mysqli_fetch_assoc($result);
   if(!empty($row['full_name']))
   {
     $sql="UPDATE student SET
     full_name='$full_name',contact_no='$contact_no', college_name='$college_name',about='$about',qualification='$qualification',location='$location',percentage='$percentage',year='$year' WHERE user_id='$id'";
     mysqli_query($link,$sql);
     header('location:../../profile.php');
   }
   else{

     $sql="INSERT INTO student (full_name,contact_no,college_name,about,qualification,location,percentage,year,user_id) VALUES ('$full_name','$contact_no','$college_name','$about','$qualification','$location','$percentage','$year','$id')";
     mysqli_query($link,$sql);
     header('location:../../profile.php');
   }
 ?>
