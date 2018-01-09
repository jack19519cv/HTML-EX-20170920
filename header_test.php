<?php
/**
 * Created by PhpStorm.
 * User: jun_wang
 * Date: 2018/1/6
 * Time: 下午 03:28
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Header + Video</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        .whov:hover { background-color: #00695c!important; }
        .view {
            background-position: center center;
            background-repeat: no-repeat;
            height: 500px;
        }
        .secondbase {
            background-color: rgba(255,255,255,.6);
            margin-top: -90px;
        }
    </style>
</head>
<body>
<!--Main Navigation-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark default-color-dark fixed-top">
        <a class="navbar-brand" href="index.html">Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="3">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Peliculas</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">14 <i class="fa fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">8 <i class="fa fa-eye"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">1 <i class="fa fa-bullhorn"></i></a>
                </li>
                <li class="nav-item avatar dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://www.torneodj.com/files/avatar/2_120.jpg" class="img-fluid rounded-circle z-depth-0" width="30"></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-purple" aria-labelledby="navbarDropdownMenuLink-5">
                        <a class="dropdown-item whov" href="#"><i class="fa fa-plus"></i> Agregar post</a>
                        <a class="dropdown-item whov" href="#"><i class="fa fa-edit"></i> Editar cuenta</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=syBR4xiikcQ">
    <div class="full-bg-img">
        <div class="container flex-center">
            <div class="row">
                <div class="col-md-12 wow fadeIn">
                    <div class="text-center text-danger">
                        <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Why r you here!</h1>
                        <h5 class="font-up mb-3 mt-1 font-bold wow fadeInDown" data-wow-delay="0.4s">Para poner imagen o video de fondo. <br>Realizado con <b>Bootstrap 4</b> y <b>Material Design para Bootstrap</b></h5>
                        <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.4s"><i class="fa fa-diamond"></i> Administrador</a>
                        <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s"><i class="fa fa-shield"></i> Moderador</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-2"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <ul class="list-group">
                <li class="list-group-item active">SIDEBAR 1</li>
                <li class="list-group-item">La imagen en el menú tiene un Dropdown</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
            </ul>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <img class="img-fluid" src="https://inst.eecs.berkeley.edu/~cs194-26/fa14/upload/files/proj3/cs194-fi/images/warm_sky.jpg" alt="Ver post">
                        <div class="card-body secondbase">
                            <h4 class="card-title">Titulo del post</h4>
                            <p class="card-text">Por: <a class="text-danger"><b>Miguel92</b></a></p>
                            <div class="text-center d-flex">
                                <a href="#" style="flex: 1 1 auto;" class="btn btn-sm default-color-dark"><i style="font-size: 22px" class="fa fa-facebook-f"></i></a>
                                <a href="#" style="flex: 1 1 auto;" class="btn btn-sm default-color-dark"><i style="font-size: 22px" class="fa fa-twitter"></i></a>
                                <a href="#" style="flex: 1 1 auto;" class="btn btn-sm default-color-dark"><i style="font-size: 22px" class="fa fa-google"></i></a>
                            </div>
                            <a href="#" class="btn btn-primary">Ver post</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <img class="img-fluid" src="https://inst.eecs.berkeley.edu/~cs194-26/fa14/upload/files/proj3/cs194-fi/images/warm_sky.jpg" alt="Ver post">
                        <div class="card-body secondbase">
                            <h4 class="card-title">Titulo del post</h4>
                            <p class="card-text">Por: <a class="text-danger"><b>Miguel92</b></a></p>
                            <div class="text-center d-flex">
                                <a href="#" style="flex: 1 1 auto;" class="btn btn-sm default-color-dark"><i style="font-size: 22px" class="fa fa-facebook-f"></i></a>
                                <a href="#" style="flex: 1 1 auto;" class="btn btn-sm default-color-dark"><i style="font-size: 22px" class="fa fa-twitter"></i></a>
                                <a href="#" style="flex: 1 1 auto;" class="btn btn-sm default-color-dark"><i style="font-size: 22px" class="fa fa-google"></i></a>
                            </div>
                            <a href="#" class="btn btn-primary">Ver post</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 px-2">
            <ul class="list-group">
                <li class="list-group-item active">SIDEBAR 2</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
            </ul>
        </div>
    </div>
</div>

<hr>
<footer class="bg-dark text-white">
    <div class="text-center py-2 lead">Copyright © 2017 - Joel Miguel Valente <p>Visita mi web demo creado con wordpress <br> con mi theme desde cero <a href="http://www.portfolio2017.skn1.com/oficial/" target="_blank">Portfolio2017</a></p></div>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script src="https://mdbootstrap.com/previews/docs/latest/js/bootstrap.min.js"></script>
<script src="https://mdbootstrap.com/previews/docs/latest/js/mdb.min.js"></script>
<script src="https://mdbootstrap.com/previews/docs/latest/js/jarallax.js"></script>
<script src="https://mdbootstrap.com/previews/docs/latest/js/jarallax-video.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
