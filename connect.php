<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

//Database Connection
$conn = new mysqli('localhost','root','','test01');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname, lastname, email, password)values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$firstname, $lastname, $email, $password);
    $stmt->execute();
    echo"registration sucessfully...";
    $stmt->close();
    $conn->close();
}
?>