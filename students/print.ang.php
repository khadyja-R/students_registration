<?php
session_start();
require_once 'connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title> </title>
    <link rel="stylesheet" href="../css/print.css" type="text/css">
    <link href="../css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/preloader.min.css" type="text/css" />
</head>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
               <div class="card">
                <span class="logo-lg">
                <img src="../images/iben_zoher.png" alt="" height="24" style="width:180px;height:50px"> <span class="logo-txt"></span>
                </span>
                <span class="fs-12 text-black-50" style="position: absolute;top:0%;left:24%; font-size: 10px">
                    Ministry of National Education, Vocational Training, Higher Education and <br>  </span>
                <span class="fs-12 text-black-50" style="position: absolute;top:2%;left:38%; font-size: 10px">
                    of Scientific Research  </span>
                <span class="fs-12 text-black-50" style="position: absolute;top:4%;left:36%; font-size: 10px">
                 وزارة التربية الوطنية والتكوين المهني والتعليم العالي والبحث العلمي
                </span>
                <h6 class="name" style="position: absolute;top:7%;left:36%;">Ibn Zohr University - Agadir</h6>
                <h6 class="name" style="position: absolute;top:10%;left:41%;"> جامعة ابن الزهر-اكادير </h6>
                <h6 class="name" style="position:absolute;top:16%;left:41%;color: #0DB8DE"> Faculty of Languages, Arts, Humanities</h6>
                <div class="invoice p-5">
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="py-2"> <span class="d-block text-muted" style="text-align: center">Pre-registration file</span> <span style="position: fixed;left:49%">2021-2022</span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product-qty"><img src="<?php echo  $_SESSION['personal_picture']; ?> "></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-qty"> <span class="d-block text-muted">Last name: <?php echo $_SESSION['first_name'];?></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-qty"> <span class="d-block text-muted">First name: <?php echo $_SESSION['last_name'];?></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-qty"> <span class="d-block text-muted">Email: <?php echo $_SESSION['email'];?></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-qty"> <span class="d-block text-muted">Phone: <?php echo $_SESSION['phone'];?></span></div>
                                </td>
                            </tr>
                            <div class="col-md-6">
                                <tr >
                                    <td>
                                        <div class="product-qty"> <span class="d-block text-muted">Birthday: <?php echo $_SESSION['phone'];?></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-qty"> <span class="d-block text-muted">Cne: <?php echo $_SESSION['cne'];?></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-qty"> <span class="d-block text-muted">Cin: <?php echo $_SESSION['cin'];?></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-qty"> <span class="d-block text-muted">Bac year: <?php echo $_SESSION['bac_year'];?> <span></span></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-qty"> <span class="d-block text-muted">Sector: <?php echo $_SESSION['sector'];?></span></div>
                                    </td>
                                </tr>

                                </tr>
                            </div>
                            </tbody>
                        </table>
                        <?php
                        include('../phpqrcode/qrlib.php');
                        $tempDir = "../QRcode_students";
                        $codeContents = "{ {$_SESSION['first_name']} {$_SESSION['last_name']} {$_SESSION['cin']} {$_SESSION['cne']} } ";
                        $fileName = '005_file_' . md5($codeContents) . '.png';
                        $pngAbsoluteFilePath = $tempDir . $fileName;
                        $urlRelativeFilePath = $tempDir . $fileName;
                        // generating
                        if (!file_exists($pngAbsoluteFilePath)) {
                        QRcode::png($codeContents, $pngAbsoluteFilePath);
                        } else {

                        }
                        // displaying
                        echo '<img src="' . $urlRelativeFilePath . '  " />';
                        ?>
                    </div>
                    <p class="font-weight-bold mb-0">NB:ce document n'est pas une inscription</p> <span></span>
                </div>
            </div>
            <button onclick="print()" class="btn btn-primary btn-sm btn-rounded  no-print" style="width: 200px" >print</button>
        </div>
    </div>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @media print {
        .no-print{
            display: none;
        }
    }
</style>
</html>

