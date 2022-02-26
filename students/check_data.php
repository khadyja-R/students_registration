<?php

$username = "root";
$password = "12345678";
if(isset($_POST['check_email']) && $_POST['check_email']==1) {
    $email = $_POST['email'];
    $database = new pdo("mysql:host=localhost;dbname=inscripton;charset=utf8;", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $res1 = $database->prepare("select email ,cin , cne, phone from student where email= :email");
    $res1->bindParam(':email', $email, PDO::PARAM_STR);
    $res1->execute();
    $count1 = $res1->fetchAll();
    $retArr = [
        'status' => 'success',
    ];
    if($count1) {
        $retArr = [
            'status' => 'error',
            'message' => "Email already exists"
        ];

    }
    echo json_encode($retArr);
}

if(isset($_POST['check_cin']) && $_POST['check_cin']==1) {

    $cin = $_POST['cin'];

    $database = new pdo("mysql:host=localhost;dbname=inscripton;charset=utf8;", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $res1 = $database->prepare("select email ,cin , cne, phone  from student where cin= :cin");
    $res1->bindParam(':cin', $cin, PDO::PARAM_STR);
    $res1->execute();
    $count1 = $res1->fetchAll();
    $retArr = [
        'status' => 'success',
    ];
    if($count1) {

        $retArr = [
            'status' => 'error',
            'message' => "Cin already exists"
        ];

    }
    echo json_encode($retArr);
}


if(isset($_POST['check_cne']) && $_POST['check_cne']==1) {

    $cne = $_POST['cne'];
    $database = new pdo("mysql:host=localhost;dbname=inscripton;charset=utf8;", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $res1 = $database->prepare("select email ,cin , cne, phone  from student where cne= :cne");
    $res1->bindParam(':cne', $cne, PDO::PARAM_STR);
    $res1->execute();
    $count1 = $res1->fetchAll();
    $retArr = [
        'status' => 'success',
    ];
    if($count1) {

        $retArr = [
            'status' => 'error',
            'message' => "Cne already exists"
        ];

    }
    echo json_encode($retArr);
}


if(isset($_POST['check_phone']) && $_POST['check_phone']==1) {

    $phone = $_POST['phone'];

    $database = new pdo("mysql:host=localhost;dbname=inscripton;charset=utf8;", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $res1 = $database->prepare("select email ,cin , cne, phone  from student where phone= :phone");
    $res1->bindParam(':phone', $phone, PDO::PARAM_STR);
    $res1->execute();
    $count1 = $res1->fetchAll();
    $retArr = [
        'status' => 'success',
    ];
    if($count1) {

        $retArr = [
            'status' => 'error',
            'message' => "phone already exists"
        ];

    }
    echo json_encode($retArr);
}