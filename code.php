<?php
session_start();
include('dbcon.php');

if(isset($_POST['save_contact'])){
    $name=$_POST['Name'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];
    $message=$_POST['message'];

    $postData = [
        'fullname' => $name,
        'email' => $email,
        'phone no' => $pno,
        'message' => $message
    ];
    $postRef = $database->getReference('contact')->push($postData);

    if($postRef_result){
        $_SESSION['status'] = "Data Inserted";
        header('Location: index.php');
    }
    else{
        $_SESSION['status'] = "Data Not Inserted";
        header('Location: index.php');   
    }
}

?>