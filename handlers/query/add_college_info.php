<?php
  include_once('../../inc/db.php');
    $id=$_GET['id'];
   $institute_name=$_POST['institute_name'];
   $institute_desc=$_POST['description'];
   $website=$_POST['website'];
   $year=$_POST['year'];
   $naac_acc=$_POST['naac_acc'];
   $naac_grade=$_POST['naac_grade'];
   $student_no=$_POST['student_no'];
   $courses=$_POST['courses'];
   $region=$_POST['region'];
   $category=$_POST['category'];
   $officer_name=$_POST['officer_name'];
   $contact_no=$_POST['contact_no'];
   $sql="SELECT * FROM college where user_id=$id";
   $result=mysqli_query($link,$sql);
   $row=mysqli_fetch_assoc($result);
   if(!empty($row['institute_name']))
   {
     $sql="UPDATE college SET
     institute_name='$institute_name',institute_desc='$institute_desc',website='$website', year='$year',naac_acc='$naac_acc',naac_grade='$naac_grade',student_no='$student_no',courses='$courses',region='$region',category='$category',officer_name='$officer_name',contact_no='$contact_no' WHERE user_id='$id'";
     mysqli_query($link,$sql);
     header('location:../../profile.php');
   }
   else{

    $sql="INSERT INTO college (institute_name,institute_desc,website,year,naac_acc,naac_grade,student_no,
        courses,region,category,officer_name,contact_no,user_id	)
     VALUES ('$institute_name','$institute_desc','$website','$year','$naac_acc','$naac_grade','$student_no','$courses','$region','$category','$officer_name','$contact_no','$id'	)";
     mysqli_query($link,$sql);
     header('location:../../profile.php');
   }
 ?>
