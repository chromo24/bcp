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
            $("#form-status").change(function() {
                if($(this).val()=="Lainnya"){
                    $("#form-status-others").show();
                }else{
                    $("#form-status-others").hide();
                }
            });
            $('#submit-button').click(function() {
                var errorFound = false;
                $('.form-mandatory').each(function(){
                    event.preventDefault();
                    if($(this).val().trim()==""){
                        $(this).css('background-color', '#AA3939');
                        errorFound = true;
                        $("#message-error").show();
                    }else{
                        $(this).css('background-color', 'white');
                    }
                });
                if(!errorFound) $("#main-form").submit();
            });
        });
    </script>
</head>

<body id="page-top" style="font-size: 16px">

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
                <p class="text-faded-white">Formulir
                </p>
            </div>
        </div>
    </div>
</section>
<form id="main-form" method="post" action="registration_save.php">
    <section id="personal" style="padding-top: 0px;">
        <div class="container">
            <div class="row text-center">
                <h3>Data Pribadi</h3>
            </div>
            <div class="row">

                <div  class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nama*</label>
                        <div class="col-sm-10">
                            <input name="name" data-mandatory="1" type="text" class="form-control form-mandatory form-mandatory" placeholder="Nama lengkap">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Tanggal lahir*</label>
                        <div class="col-sm-10">
    <!--                        <input type="text" class="form-control" placeholder="dd-mm-yyyy">-->
                            <input name="birthday" data-mandatory="1" id="datetimepicker" type="text"  class="form-control form-mandatory" placeholder="dd-mm-yyyy">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Alamat*</label>
                        <div class="col-sm-10">
                            <input name="address" data-mandatory="1" type="text" class="form-control form-mandatory" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Kota*</label>
                        <div class="col-sm-10">
                            <input name="city" data-mandatory="1" type="text" class="form-control form-mandatory" placeholder="Kota">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Kode Pos*</label>
                        <div class="col-sm-10">
                            <input name="postcode" data-mandatory="1" type="text" class="form-control form-mandatory" placeholder="Kode Pos">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Telepon*</label>
                        <div class="col-sm-10">
                            <input name="telephone" data-mandatory="1" type="text" class="form-control form-mandatory" placeholder="Telepon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email*</label>
                        <div class="col-sm-10">
                            <input name="email" data-mandatory="1" type="text" class="form-control form-mandatory" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Kota Persekutuan*</label>
                        <div class="col-sm-10">
                            <input name="curch_city" data-mandatory="1" type="text" class="form-control form-mandatory" placeholder="Kota Persekutuan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control" id="form-status">
                                <option>pilih salah satu</option>
                                <option value="Pekerja">Pekerja</option>
                                <option value="Student">Student/-in</option>
                                <option value="Schüler">Schüler/-in</option>
                                <option value="Pelajar Studienkolleg">Pelajar Studienkolleg</option>
                                <option value="Pelajar Sprachschule">Pelajar Sprachschule</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id="form-status-others" data-visible="0" style="display:none;">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input name="status_others" type="text" class="form-control" placeholder="masukkan status lainnya">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Pernah ikut BCP</label>
                        <div class="col-sm-10">
                            <input name="attended" value="1" type="radio"> Ya
                            <input name="attended"  type="radio"  value="2"> Tidak
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Kontak Emergency</label>
                        <div class="col-sm-10">
                            <input name="emergency_contact" type="text" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input name="emergency_address" type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Telepon">
                        </div>
                    </div>
                    <hr class="primary" style="max-width: 200px;">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Alergi makanan</label>
                        <div class="col-sm-10">
                            <input name="allergic" type="text" class="form-control" placeholder="alergi makanan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Perlu penterjemah bahasa jerman</label>
                        <div class="col-sm-10">
                            <input name="translator" value="1" type="radio"> Ya
                            <input name="translator" value="0" type="radio"> Tidak
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Lainnya</label>
                        <div class="col-sm-10">
                            <input name="notes" type="text" class="form-control" placeholder="contoh: tidur harus dengan lampu menyala">
                        </div>
                    </div>
                </div>

               <div id="message-error" class="col-lg-8 col-lg-offset-2 text-center" style="background-color: lightgrey;padding:5px;display: none;">
                    <p><h2 class="section-heading">Kolom yang ditandai wajib diisi.</h2></p>
               </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10"  style="margin-top: 20px;">
    <!--                    <button id="personal-button" type="submit" class="btn btn-default btn-xl">Lanjut</button>-->
                        <a href="#" id="submit-button" class="btn btn-primary btn-xl">LANJUT KE PEMBAYARAN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
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
<link rel="stylesheet" type="text/css" href="lib/jquery.datetimepicker.css" >
<script src="lib/jquery.datetimepicker.full.min.js"></script>
<script>
    jQuery('#datetimepicker').datetimepicker({
        timepicker:false,
        format:'d/m/Y'
    });
</script>
</html>
