<?php
session_start();
require_once 'connection.php';
if(isset($database)){
    echo 'hello world hhhhhhhhhhhh';
}else{
    echo 'error';
}
$_SESSION['cne']=$_POST['cne'];
$_SESSION['birthday']=$_POST['birthday'];
$_SESSION['first_name']=$_POST['first_name'];
$_SESSION['last_name']=$_POST['last_name'] ;
$_SESSION['cin']=$_POST['cin'] ;
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['sector']=$_POST['sector'];
$_SESSION['bac_year']=$_POST['bac_year'];
$_SESSION['adress']=$_POST['adress'] ;
$_SESSION['adress']=$_POST['adress'];
if(isset($_POST['registre_form'])){
    echo'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh';
    echo 'hello';
    try {
        $target_dir = "../personal_images/";
        $target_file1 = $target_dir . time() . basename($_FILES["personal_picture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["personal_picture"]["tmp_name"], $target_file1);
        $_SESSION['personal_picture']=$_POST['personal_picture'];
        $target_dir = "../bac_images/";
        $target_file2= $target_dir . time() . basename($_FILES["bac_recto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["bac_recto"]["tmp_name"], $target_file2);
        $target_dir = "../bac_images/";
        $target_file3 = $target_dir . time() . basename($_FILES["bac_verso"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["bac_verso"]["tmp_name"], $target_file3);
        $insert = $database->prepare("insert into student(first_name,last_name,phone,email,cne,birthday,password,confirm_password,gender,situation,nationality,disabled,adress,bac_note,cin,bac_recto,bac_verso,personal_picture)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $insert->execute([$_POST['first_name'],$_POST['last_name'],$_POST['phone'],$_POST['email'],$_POST['cne'],$_POST['birthday'],$_POST['password'],$_POST['confirm_password'],$_POST['gender'],$_POST['situation'],$_POST['nationality'],$_POST['disabled'],$_POST['adress'],$_POST['bac_note'],$_POST['cin'],$target_file2,$target_file3,$target_file1]);
        $student_id = $database->lastInsertId();
        $insert = $database->prepare("insert into registration(bac_year,student_id,sector_id,bac_type_id,school_year) values(?,?,?,?,?)");
        $insert->execute([$_POST['bac_year'],$student_id,$_POST['sector'],$_POST['bac_type'],$_POST['school_year']]);
    }catch (PDOException   $exception ){
        var_dump($exception);
    }
    header('location:registre.php');
}
