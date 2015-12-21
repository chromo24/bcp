<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freie evangelische Gemeinde (FeG) Immanuel Berlin - Bible Camp Pemuridan 2015</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script  type="text/JavaScript">

        $(document).ready(function () {
            console.log("ready");
            $(".temp").click(function() {
                console.log("test");
            });
        });
    </script>
</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.html#page-top">
                <img style="width: 33px;display: inline-block;position: absolute;top: 6px;" src="img/logo.png">&nbsp;
                <span class="main-title">Bible Camp <i>Pemuridan</i></span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="index.html#about">Tentang BCP</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html#speakers">Pembicara</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html#location">Lokasi</a>
                </li><li>
                    <a class="page-scroll" href="index.html#portfolio">BCP 2014</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html#contact">Kontak</a>
                </li>
                <li>
                    <a class="page-scroll" href="registration.php">Pendaftaran</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading" style="color: rgba(255,255,255,.7);">PENDAFTARAN BCP 2016</h2>
                <hr class="light">
                <p class="text-faded-white">Pembayaran
                </p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="header-content-title-global" style="margin-top: 50px;">

            </div>
            <div class="text-center-column-left text-align-left" >

                <?php
                //echo "<pre>";
                //print_r($_POST);
                //echo "</pre>";
                if(empty($_POST["g-recaptcha-response"])){
                    echo "<h2>Anda tidak memvalidasi reCAPTCHA. Klik di <a  onclick='window.history.back();' >sini</a> untuk kembali.</h2>";
                    die();
                }
                include "db.php";
                $insertId = 0;
                $name = "";
                $price = 150;
                if(isset($_POST["name"])){

                    $stmt = $db->prepare("INSERT INTO registration(`name`,`birthday`,`address`,`city`,`postcode`,`telephone`,`email`,`curch_city`,
                                                                `status`,`status_others`,`attended`,`emergency_contact`,`emergency_address`,`allergic`,
                                                                 `translator`,`notes`
                                                               ) VALUES(:name,:birthday,:address,:city,:postcode,:telephone,:email,:curch_city,
                                                                 :status,:status_others,:attended,:emergency_contact,:emergency_address,:allergic,
                                                                 :translator,:notes)");
                    $birthDay =date('Y-m-d H:i:s',strtotime(str_replace("/","-",$_POST['birthday'])));
                    $stmt->execute(array(
                        ':name' => $_POST['name'],
                        ':birthday' =>$birthDay ,
                        ':address' => $_POST['address'],
                        ':city' => $_POST['city'],
                        ':postcode' => $_POST['postcode'],
                        ':telephone' => $_POST['telephone'],
                        ':email' => $_POST['email'],
                        ':curch_city' => $_POST['curch_city'],
                        ':status' => $_POST['status'],
                        ':status_others' => $_POST['status_others'],
                        ':attended' => isset($_POST['attended'])?$_POST['attended']:0,
                        ':emergency_contact' => $_POST['emergency_contact'],
                        ':emergency_address' => $_POST['emergency_address'],
                        ':allergic' => $_POST['allergic'],
                        ':translator' => isset($_POST['translator'])?$_POST['translator']:0,
                        ':notes' => $_POST['notes']
                    ));

                    $insertId = $db->lastInsertId();
                //echo "ID:" . $insertId;
                    $name = $_POST["name"];
                    $now = new DateTime('NOW');
                    $ageDiff = $now->diff(new DateTime(date('Y-m-d',strtotime(str_replace("/","-",$_POST['birthday'])))));
                    $price = 150;
                    $age = $ageDiff->y;
                    if($age<=3){
                        $price = 0;
                    }elseif($age>3 and $age<=6){
                        $price = 70;
                    }

                //    echo "AGE:".$age->y;
                }else{
                    echo "<h2>Invalid use of form. Please proceed from <a href='registration.php'>registration form</a>.</h2>";
                }

                $msg1 = "<div>Terima kasih, ".$name.". Data Anda sudah disimpan</div>";
                $msg2 = "";
                if($price>0){
                    $msg2 = '<div>Selanjutnya silahkan mentransfer uang pendaftaran sebesar '.$price.'EUR ke:</div>
                            <div>
                                <table class="table-responsive" style="padding: 5px;margin: 10px;">
                                    <tr><td>Kontoinhaber: </td><td> Christl. Gemeinde Immanuel</td></tr>
                                    <tr><td>Bank: </td><td> SKB Witten</td></tr>
                                    <tr><td>Kontonummer: </td><td> 115220302</td></tr>
                                    <tr><td>BLZ: </td><td> 45260475</td></tr>
                                    <tr><td>IBAN: </td><td> DE 58 4526 0475 0011 5203 02</td></tr>
                                    <tr><td>BIC: </td><td> GENODEM1BFG</td></tr>
                                    <tr><td>Verwendungszweck: </td><td> BCP' . ($insertId + 100) . '</td></tr>
                                </table>
                            </div>';
                }
                $msg3 = "<div>
                        Nomer pendaftaran Anda adalah: BCP".($insertId + 100).".
                        Gunakan selalu nomer tersebut dalam komunikasi dengan kami.
                        Jangan lupa mencantumkan nomer tersebut sebagai Verwendungszweck ketika mentransfer
                        untuk mempermudah proses administrasi.</div>
                        <div>Apabila dana sudah diterima, Anda akan mendapatkan email konfirmasi yang menyatakan bahwa Anda terdaftar.</div>";

                echo $msg1.$msg2.$msg3;
                sendConfirmationMail($_POST["email"],$msg1.$msg2.$msg3);

                function sendConfirmationMail($address,$content){
                    $subject = 'Konfirmasi Pendaftaran BCP2016';

                    $header  = 'MIME-Version: 1.0' . "\r\n";
                    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $header .= 'From: pendaftaran.bcp@googlemail.com' . "\r\n" .
                        'Reply-To: pendaftaran.bcp@googlemail.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                    mail($address, $subject, $content, $header);
                }

?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="header-content-title-global" style="margin-top: 50px;">
                <a href="registration_form.php" class="btn btn-primary btn-xl page-scroll">DAFTAR ORANG BERIKUT</a>
            </div>
        </div>
    </div>
</div>


<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Butuh info lebih lengkap?</h2>
                <hr class="primary">
                <p>Silahkan menghubungi kami melalui kontak di bawah ini dan kami akan dengan senang hati menjawab pertanyaan Anda!</p>
            </div>
            <div class="col-md-4 col-md-6 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>
                <p>Stephanie V. Limas<br/>0176 3033 9846</p>
            </div>
            <div class="col-md-4 col-md-6 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p><a href="mailto:pendaftaran.bcp@googlemail.com">pendaftaran.bcp@googlemail.com</a></p>
            </div>
            <div class="col-md-4 col-md-6 text-center">
                <i class="fa fa-question fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p><a href="faq.html" title="Pertanyaan yang sering diajukan">FAQ</a></p>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

</body>

</html>
