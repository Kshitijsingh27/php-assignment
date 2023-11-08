<?php 
$success=false;
if($_SERVER['REQUEST_METHOD']=="POST") {
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $pdo = new PDO('mysql:host=localhost;dbname=kshitij', 'root', '');
    $stmt=$pdo->prepare("INSERT INTO name (name,gender,city) VALUES ('$name','$gender','$city')");
    $rs=$stmt->execute();
    if($rs){
        $success=true;
    }
}


?>