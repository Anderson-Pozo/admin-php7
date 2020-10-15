<!--<html>-->
<!--<body>-->
<!--<form action="" method="post">-->
<!---->
<!--    <div class="form-group">-->
<!--        <div class="form-row">-->
<!--            <div class="col"><label class="text-secondary">Nombre:&nbsp;</label>-->
<!--                <input class="form-control" name="name" type="text" required="true" pattern="[A-Za-z]+">-->
<!--            </div>-->
<!--            <div class="col"><label class="text-secondary">Apellido:&nbsp;</label>-->
<!--                <input class="form-control" name="lastname" type="text" required="true" pattern="[A-Za-z]+">-->
<!--            </div>-->
<!--            <div class="col"><label class="text-secondary">Nombre de usuario:&nbsp;</label>-->
<!--                <input class="form-control" name="username" type="text" required="true" pattern="[A-Za-z]+">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <div class="form-row">-->
<!--            <div class="col"><label class="text-secondary">Email:</label>-->
<!--                <input class="form-control" name="email" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group"><label class="text-secondary">Contraseña:</label>-->
<!--        <input class="form-control" name="password" type="password" required="true">-->
<!--    </div>-->
<!--    <button class="btn btn-info mt-2" type="submit">Aceptar</button>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro - Vive Tulcán</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../static/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../static/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body style="background-image: url('../static/images/body.jpg'); background-repeat: no-repeat; background-size: cover;">

<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="../static/images/logotipo.svg" alt="">
                </a>
            </div>
            <div class="login-form">
                <form action="" method="post">
                    <?php
                    if (isset($errorMessage)){
                        echo "<span class=\"badge badge-danger\">" . $errorMessage . "</span>";
                        echo "<br>";
                    }
                    ?>
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" name="name" required class="form-control" placeholder="Ingrese sus nombres">
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" name="lastname" required class="form-control" placeholder="Ingrese sus apellidos">
                    </div>
                    <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input type="text" name="username" required class="form-control" placeholder="Ingrese su nombre de usuario">
                    </div>
                    <div class="form-group">
                        <label>Correo electrónico</label>
                        <input type="email" name="email" required class="form-control" placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" required class="form-control" placeholder="Ingrese su contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrarse</button>

                    <div class="register-link m-t-15 text-center">
                        <p>Ya tiene una cuenta ? <a href="../controller/login.php"> Ingresar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../static/assets/js/main.js"></script>

</body>
</html>

