<?php session_start();
if(isset($_POST['innskra'])) {
    $username = $_SESSION['username'];
};
if(isset($_SESSION['user']))
{
    $username = $_SESSION['user'];
    echo "<script> alert($username)</script>";
};
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Verkefni 6</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">


    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css"  href="<?php echo URL; ?>css/style.css">
    <link rel="stylesheet" type="text/css" href=<?php echo URL; ?>vcss/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo URL; ?>js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/modernizr.custom.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

<!-- navigation -->
<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="<?php echo URL; ?>">Verkefni 6</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-home" class="page-scroll">Home</a></li>
                <li><a href="#tf-about" class="page-scroll">About us</a></li>
                <?php if(isset($_SESSION['username'])){ echo "<li><a href=\"#tf-team\" class=\"page-scroll\">My Page</a></li>";}
                else {echo "<li><a href=". URL."nyskraning" . " class=\"page-scroll\">Register</a></li>";}?>
                <li><a href="#tf-works" class="page-scroll">Shit 3</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>