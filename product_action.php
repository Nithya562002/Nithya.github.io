<?php
$connect=mysqli_connect("localhost","root","","con");
if($connect->connect_errno){
    echo "error in connection";
}
if(isset($_POST['send'])){
    $name=$_POST['name']; 
    $email =$_POST['email']; 
    $subject =$_POST['subject'];  
    $message=$_POST['message'] ;
    $query="INSERT INTO `con`( `name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
    $query_run=mysqli_query($connect,$query);
    if($query_run){
        echo "<script>alert('Record Inserted Successfully')</script>";
        header("Location:contact.html");
    }
    else{
        echo "Not Found";
    }
}
?>