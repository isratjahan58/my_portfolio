<?php


include 'connect.php';


$name = $_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$category =$_POST['category'];

// echo $username;


$query = "INSERT INTO orders(name,email,mobile,category)
                              VALUES('$name','$email','$mobile','$category')";

         $run =mysqli_query($conn,$query);
         if(!$run){
            echo "submission failed ";
         }else{
            echo "successfully done ";
            header('location: list.php');
         }                     

?>

