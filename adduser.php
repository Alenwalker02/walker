<?php 
   

   $usern=$_POST['loginid'];
   $passd=$_POST['pwd'];
   $gender=$_POST['gender'];
   $dob=$_POST['date1'];
   $address=$_POST['address1'];
   $mobileno=$_POST['mobno'];

   include "dbcom.php";
   if($conn)
   {
      $sql="insert into uaer value('".$usern."','".$passd."','".$gender"','".$dob."','".$address."',".$mobileno.";

      if ($conn->query($sql)==TRUE)
      echo "Record inserted successfully";
      


   }
   $conn->close();
