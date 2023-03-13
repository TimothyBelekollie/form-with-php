<?php
//nclude db connection 

include 'config.php';

if(isset($_POST['submit'])){
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $email=$_POST['email'];
    $passwords=$_POST['passwords'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $district=$_POST['district'];
   // $languages=$_POST['languages'];
   $checkbox2=$_POST['languages'];  
   $lan="";  
   foreach($checkbox2 as $chk2)  
      {  
         $lan .= $chk2.",";  
      } 



    $education=$_POST['education'];
    $dateofgraduate=$_POST['dateofgraduate'];
   // $futureLan1=$_POST['futureLan'];
    $checkbox1=$_POST['futureLan'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
    
    $contact=$_POST['contact'];
    $image=$_FILES['image'];
    //print_r($_FILES['image']);
    $img_loc=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $img_des="upload/".$img_name;


    





    move_uploaded_file($img_loc,'upload/'.$img_name);

   // insert data
  $success= mysqli_query($conn,"INSERT INTO `person`(`fName`, `lName`, `email`,
    `passwords`, `dob`, `gender`, `country`, `district`, `languages`, `image`, 
    `education`, `dateofgraduate`, `futureLan`, `contact`) VALUES ('$fName',
    
    '$lName','$email','$passwords','$dob','$gender','$country',
    '$district','$lan','$img_des','$education','$dateofgraduate','$chk',
    '$contact')");
   
   header("location:index.php");
}


?>