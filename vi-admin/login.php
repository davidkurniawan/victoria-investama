<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Victoria Investama | Admininstrator Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="controller/login-lo.php">
        <h2 class="form-signin-heading">Administrator Login</h2>
        <div class="login-wrap">

            <input type="text" name='username' class="form-control" placeholder="User ID" autofocus>
            <input type="password" name='password' class="form-control" placeholder="Password">
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            <?php
            if(isset($_REQUEST['msg']))
            {
              echo '          <div class="alert alert-block alert-danger fade in">
                                                <button data-dismiss="alert" class="close close-sm" type="button">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                                <center>'.$_REQUEST['msg'].'</center>
                                                                              </div>';
            }
             ?>

        </div>

          <!-- Modal -->

          <!-- modal -->

      </form>
    </div>

    <br>
    <center><img src="http://www.victoriainvestama.co.id/assets/img/logo.png"></center>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
