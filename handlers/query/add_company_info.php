<?php
  include_once('../../inc/db.php');
    $id=$_GET['id'];
   $company_name=$_POST['company_name'];
   $email=$_POST['email'];
   $contact_no=$_POST['contact_no'];
   $year=$_POST['year'];
   $business=$_POST['business'];
   $description=$_POST['desc'];
   $address=$_POST['address'];
   $sql="SELECT * FROM company where user_id=$id";
   $result=mysqli_query($link,$sql);
   $row=mysqli_fetch_assoc($result);
   if(!empty($row['company_name']))
   {
     $sql="UPDATE company SET
     company_name='$company_name',email='$email',contact_no='$contact_no', year='$year',business='$business',description='$description',address='$address' WHERE user_id='$id'";
     mysqli_query($link,$sql);
     header('location:../../profile.php');
   }
   else{

     $sql="INSERT INTO company (company_name,email,contact_no,year,business,description,address,user_id) VALUES ('$company_name','$email','$contact_no','$year','$business','$description','$address','$id')";
     mysqli_query($link,$sql);
     header('location:../../profile.php');
   }
 ?>
