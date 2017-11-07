

<!DOCTYPE HTML>

<html>
<head>
    <title>Retrospect by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../CSS/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../CSS/assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../CSS/assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../CSS/assets/css/ie9.css" /><![endif]-->
</head>
<body class="landing">

<!-- Header -->
<header id="header" class="alt">
    <h1><a href="home.php">CEB LOGIN</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="home.php">Home</a></li>
    </ul>
</nav>

<!-- Banner -->
<section id="banner">
    <i class="icon fa-diamond"></i>
    <h2>Cylon Electricity Board</h2>
    <p>We light up your future</p>
    <form action="login_submit.php" method="POST">
        <div class="container 75%">
            <div class="row uniform 50%">
                <div class="6u 12u$(xsmall)">
                    <h4>Username</h4>
                    <input name="username" placeholder="Username" type="text" />
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <h4>Password</h4>
                    <input name="password" placeholder="Password" type="password" />
                </div>
            </div>
        </div>
        <ul class="actions">
            <li><button type="submit" class="btn tf-btn btn-default" name='from' value="1">Login</button></li>
        </ul>
        <P><?php echo $message?></P>
    </form>

</section>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="https://www.facebook.com/CeylonElectricityBoard/" class="icon fa-facebook">
                <span class="label">Facebook</span>
            </a></li>
            <li><a href="https://twitter.com/CEB_lk?lang=en" class="icon fa-twitter">
                <span class="label">Twitter</span>
            </a></li>
            <li><a href="#" class="icon fa-instagram">
                <span class="label">Instagram</span>
            </a></li>
            <li><a href="https://www.linkedin.com/company/ceylon-electricity-board" class="icon fa-linkedin">
                <span class="label">LinkedIn</span>
            </a></li>
        </ul>
        <ul class="copyright">
            <li>24 hours call center DIAL 1987</li>

        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="../CSS/assets/js/jquery.min.js"></script>
<script src="../CSS/assets/js/skel.min.js"></script>
<script src="../CSS/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="../CSS/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../CSS/assets/js/main.js"></script>

</body>
</html>