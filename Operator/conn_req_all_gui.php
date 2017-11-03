
<html>
<head>
    <title>NEW REQUESTS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets3/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets3/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets3/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets3/css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header" class="skel-layers-fixed">
    <h1><a href="index.html">CEYLON ELECTRICITY BOARD</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="conn_req_all.html">NEW REQUESTS</a></li>
        <li><a href="Inquery.html">INQUIRIES</a></li>
        <li><a href="Mail.html">DROP MAIL</a></li>
    </ul>
</nav>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>NEW CONNECTION REQUESTS</h2>
            <p>We Light Up Your Future</p>
        </header>


        <!-- Table -->
        <section>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    include "conn_req_all_php.php";
                    $tab=new table();
                    $result=$tab->addToTable();

		                while ($row = $result->fetch_assoc()) {
                            if ($row['Read_state']=='No') {
                                echo '<tr>
					    <td>' . $row['request_id'] . '</td>
					    <td>' . $row['name'] . '</td>
					    <td><a href="conn_req_view.html">VIEW</a>   </td>
				        </tr>';
                            }
                        }



                    ?>



                      </tbody>

                </table>
            </div>
        </section>





    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="#" class="icon fa-facebook">
                    <span class="label">Facebook</span>
                </a></li>
            <li><a href="#" class="icon fa-twitter">
                    <span class="label">Twitter</span>
                </a></li>
            <li><a href="#" class="icon fa-instagram">
                    <span class="label">Instagram</span>
                </a></li>
            <li><a href="#" class="icon fa-linkedin">
                    <span class="label">LinkedIn</span>
                </a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled.</li>

            <li>Design by: <a href="">MIND LABS GROUP</a>.</a>.</li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="assets3/js/jquery.min.js"></script>
<script src="assets3/js/skel.min.js"></script>
<script src="assets3/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets3/js/main.js"></script>

</body>
</html>