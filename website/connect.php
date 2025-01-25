<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

$con=new mysqli('localhost', 'root', '', 'crud');
if($con){
    //echo "Connection successful";
    $sql="insert into `crudoperation` (Name,Email,Subject,Message) values('$Name', '$Email', '$Subject','$Message')";
   $result=mysqli_query($con,$sql);
   if($result){
        echo "Data inserted successfully";
   }else{
        die(mysqli_error($con));
   }

}else{
    die(mysqli_erroe($con));
}

}
?>