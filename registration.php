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
            $(".faq-question").click(function() {
                var id = $(this).data("id");
                var answer = $('#faq-answer-' + id);
                var state = answer.data("state");
                console.log(state);
                if(state==1){
                    answer.data("state",0);
                    answer.hide();
                }else{
                    answer.data("state",1);
                    answer.show();
                }
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
                <p class="text-faded-white">Informasi
                </p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="header-content-title-global" style="margin-top: 50px;">
                Syarat dan ketentuan
            </div>
            <div class="text-center-column-left text-align-left" >
                <ol>
                    <li>Peserta diharapkan mengisi formulir pendaftaran dengan jelas dan lengkap.
                        Peserta yang berusia di bawah 18 tahun didaftarkan oleh orang tua atau walinya.</li>
                    <li>Biaya BCP adalah sebagai berikut (*harga belum termasuk biaya transportasi):
                        <ul style="list-style-type:disc">
                            <li>Umur 0-3 tahun: €    0,00 (tidak dikenakan biaya)</li>
                            <li>Umur 4-6 tahun: €  70,00</li>
                            <li>Umur 7 tahun ke atas: €150,00</li>
                        </ul>
                        Peserta dapat menentukan sendiri alat transportasi ke tempat tujuan. Tetapi sangat dihimbau dan diharapkan agar para peserta sampai di tempat sesuai dengan hari dan jam yang telah ditentukan.
                        Untuk peserta dari Berlin disediakan bus oleh panitia yang berkapasitas kira-kira 55-60 orang dan mempunyai WC.
                        Biaya per orang dikenakan 55€.
                    </li>
                    <li>Setiap peserta yang mengundurkan diri akan dikenakan biaya pembatalan sesuai dengan peraturan yang berlaku di Jugendherberge.</li>
                    <li>Kami memerlukan kontak ( nama/alamat/telepon) orang yang dapat dihubungi di Jerman atau di Indonesia untuk berjaga-jaga jika terjadi sesuatu di luar dugaan.</li>
                    <li>Untuk pertanyaan lebih lanjut mengenai pendaftaran, Saudara-Saudari dapat menghubungi  Sdri. Stephanie Limas.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="header-content-title-global" style="margin-top: 50px;">
                <a href="registration_form.php" class="btn btn-primary btn-xl page-scroll">LANJUT KE FORMULAR</a>
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
