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
            $(".view-detail-data").click(function() {
                if($("#view-detail-area").is(':visible')){
                    $("#view-detail-area").hide();
                }else{
                    var id = $(this).data("id");
                    $("#view-detail-area").show();
                    $("#view-detail-area").load("registration_view.php?id="+id);
                }
            });
            $(".payment-confirm").click(function() {
                var id = $(this).data("id");
                var r = confirm("Uang pendaftaran sudah diterima? Klik OK untuk menyimpan data dan mengirimkan email pendaftaran");
                if (r == true) {
                    $(this).load("payment.php?id="+id);
                    $(this).prop("disabled",true);
                    $(this).html("telah dibayar");
                    $('#payment-checkbox-'+id).prop("checked",true);
                } else {
                    return false;
                }
            });
            $(".delete-registration").click(function() {
                var id = $(this).data("id");
                var r = confirm("Yakin ingin menghapus data ini?");
                if (r == true) {
                    $(this).load("delete.php?id="+id);
                    $('#tr-'+id).hide();
                } else {
                    return false;
                }
            });
            $("#download-to-excel").click(function(e) {
                e.preventDefault();
                window.open("download.php", '_blank');
            });
            $(document).on("click",".view-detail-close",function(){
                $("#view-detail-area").hide();
            });
        });
    </script>
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
<div id="view-detail-area" style="display: none; position: fixed;width: 500px; background: white;margin: 5% auto;left: 0;right: 0;height: 704px;z-index: 200;">

</div>
<?php
include "db.php";
$error = "";
if(isset($_POST["id"]) and isset($_POST["password"])){
    if($_POST["id"] == $adminId and $_POST["password"] == $adminPassword){
        $query = "SELECT id,name,email,city,payment_received FROM registration WHERE deleted = 0;";
        $rows = $db->prepare($query);
        $rows->execute();
        echo '<section class="bg-primary" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <h2 class="section-heading" style="color: rgba(255,255,255,.7);">PENDAFTARAN BCP 2016</h2>
                            <hr class="light">
                            <p class="text-faded-white">Daftar Peserta
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <table style="text-align: left;" class="table table-striped">
                            <tr><th>Id</th><th>Nama</th><th>Kota</th><th>Pembayaran</th><th></th><th></th></tr>';
        while($row = $rows->fetch()){
            echo '<tr id="tr-'.$row["id"].'">';
            echo '<td><span class="view-detail-data" data-id="'.$row["id"].'" style="cursor:pointer;">'.($row["id"]+100).'</span></td>';
            echo '<td><span class="view-detail-data" data-id="'.$row["id"].'" style="cursor:pointer;">'.$row["name"].'</span></td>';
            echo '<td><span class="view-detail-data" data-id="'.$row["id"].'" style="cursor:pointer;">'.$row["city"].'</span></td>';
            echo '<td><input id="payment-checkbox-'.$row["id"].'" disabled readonly type="checkbox" '. (isset($row["payment_received"])?'checked':'') .'></td>';
            echo '<td>';
            if(!isset($row["payment_received"])){
                echo '<button class="payment-confirm" data-id="'.$row["id"].'">diterima</button>';
            }else{
                echo "telah dibayar";
            }
            echo '</td>';
            echo '<td><button class="delete-registration" id="delete-registration-'.$row["id"].'" data-id="'.$row["id"].'" title="hapus data">X</button></td>';
            echo '</tr>';
        }
        echo '</table><button id="download-to-excel" class="download-button">Download ke Excel</button></div></div></div>';
        die();
    }else{
        $error = 'User atau password salah.';
    }
}
?>
<form method="post">
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading" style="color: rgba(255,255,255,.7);">PENDAFTARAN BCP 2016</h2>
                    <hr class="light">
                    <p class="text-faded-white">Daftar Peserta
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="text-center-column-left text-align-left" >
                    <div class="panel panel-default"  style="margin:20px;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <td>User:</td><td><input name="id" type="text"></td>
                                </tr>
                                <tr>
                                    <td>Password</td><td><input name="password" type="password"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?=$error?>
                <div class="header-content-title-global" style="margin-top: 50px;">
                    <input type="submit" class="btn btn-primary btn-xl page-scroll" value="Submit">
                </div>
            </div>
        </div>
    </div>
</form>

</body>

</html>
