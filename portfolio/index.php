<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio & CV en ligne de Colin LEVERGER">
    <meta name="author" content="Colin LEVERGER">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Colin LEVERGER</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php
include "header.php";
?>

<!-- +++++ Welcome Section +++++ -->
<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 centered">
                <img src="assets/img/colinleverger.jpg" class="circular" alt="Colin LEVERGER">

                <h1>Hi there!</h1>

                <p>I am <em>Colin LEVERGER</em>, a young developer & student engineer, and you are now
                    on my web-portfolio.</p>

                <p>I've always been interested in new technologies & computing science, that's why I'm currently working
                    as aprentice engineer in the Orange company.
                    I have the opportunity to work with <em>DevOps tools</em> such as <b>Jenkins</b>, <b>Scala</b>, <b>Scala
                        SBT</b>, <b>Docker</b>, and also the opportunity to learn
                    how works the application performance management in the
                    Orange's Application Performance Experts team.</p>

                <p>You will find on this website some information about me, my skills, and about some of my
                    projects.</p>

            </div>
            <!-- /col-lg-8 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /welcome -->

<div id="about" class="container pt"></div>
<div class="row mt centered">
    <div class="col-lg-3">
        <span class="glyphicon glyphicon-user"></span>

        <h3>About me:</h3>

        <p>21 y-o</p>

        <p>
            <a href="https://www.google.fr/maps/place/Rennes/@48.1159156,-1.6884545,13z/data=!3m1!4b1!4m2!3m1!1s0x480ede2fa7d69085:0x40ca5cd36e4ab30">
                Rennes</a> city - France</p>

        <p>Guitarist / Singer / Music player & lover</p>
    </div>

    <div class="col-lg-3">
        <span class="glyphicon glyphicon-book"></span>

        <h3>Studies:</h3>

        <p>Currently: student at engineering school <a href="http://www.enssat.fr/">ENSSAT</a> Lannion -
            Computing
            Science</p>

        <p>2014: D.U.T <a
                href="https://iut-rennes.univ-rennes1.fr/formations/dut/dut-genie-electrique-et-informatique-industrielle-geii">GEII</a>,
            Rennes (Technical Degree in Electronics & Computing Sciences) </p>
    </div>

    <div class="col-lg-3">
        <span class="glyphicon glyphicon-plane"></span>

        <h3>Travels:</h3>

        <p>2014 (<em>3 months</em>): Ireland, <a href="http://www.ait.ie/">Athlone AIT</a> during a half semester in an
            internship</p>

        <p>2013 (<em>15 days</em>): Scotland, Glasgow</p>

        <p>2012 (<em>10 days</em>): England, Reading</p>
    </div>

    <div class="col-lg-3">
        <span class="glyphicon glyphicon-globe"></span>

        <h3>Languages:</h3>

        <p>French: Native tongue</p>

        <p>English: Fluent & good technicals skills</p>

        <p>Spanish: Basis</p>

    </div>
</div>
<!-- /row -->
</div>
<!-- /container -->

<div id="grey">
    <div class="container pt" id="skills">
        <div class="row mt">
            <div class="col-lg-6">

                <h3>Development skills</h3>

                <p><b>Java</b>: 2 years background, several projects.</p>
                
                <p><b>Scala</b>: learning it since February 2015; I truly love this language, which
                    allow to develop things more concise and in a very pretty way.</p>

                <p><b>Web</b>: PHP, HTML5 / CSS3, JavaScript, Wordpress</p>

                <p><b>C</b>: robust experience (loop invariant, strict  methodology & concepts).</p>

                <p><b>Databases</b>: SQL (MySQL, PostgreSQL...) / MongoDB</p>

            </div>
            <!-- /colg-lg-6 -->

            <div class="col-lg-6">
                <h3>DevOps & Virtualization stuff</h3>
                <p>I love both DevOps and continuous delivery; this is my thing and I like to experiments.</p>
                <p>I play a lot with <b>Docker</b> and <b>Jenkins</b> on my personal server.</p>
                <p>This website is for example built by a dockerized Jenkins at every push detected on GitHub, and
                    deployed automatically into a Docker ngnix/PHP contener. The reverse proxy which route all my services
                on my server is also a dockerized ngnix.</p>
                <p>See: <a href="https://www.docker.com/">Docker</a> / <a href="https://jenkins-ci.org/">Jenkins</a></p>
            </div>
            <hr>
        </div>
        <div class="row mt">
            <div class="col-lg-12">
                <h3>Skills "progress bar" (fancy, eh?):</h3>
                Java
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                         aria-valuemax="100" style="width: 80%;">
                        <span class="sr-only">80% Complete</span>
                    </div>
                </div>

                Scala
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                         aria-valuemax="100" style="width: 25%;">
                        <span class="sr-only">25% Complete</span>
                    </div>
                </div>

                HTML + CSS
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                         aria-valuemax="100" style="width: 80%;">
                        <span class="sr-only">80% Complete</span>
                    </div>
                </div>

                Docker
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100" style="width: 75%;">
                        <span class="sr-only">75% Complete</span>
                    </div>
                </div>

                Jenkins
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                         aria-valuemax="100" style="width: 60%;">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>

                Unix / System
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                         aria-valuemax="100" style="width: 90%;">
                        <span class="sr-only">90% Complete</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /col-lg-6 -->
    </div>
    <!-- /row -->
</div>

<div class="container pt" id="work">
    <div class="row mt">
        <div class="col-lg-6 col-lg-offset-3 centered">
            <h3>My work & projects</h3>
            <hr>
            <p>Click on a project to have more details!</p>
        </div>
    </div>
    <div class="row mt centered">
        <div class="col-lg-4">
            <a class="zoom green" href="work01.html"><img class="img-responsive" src="assets/img/portfolio/port01.jpg"
                                                          alt=""/></a>

            <p>APE</p>
        </div>
        <div class="col-lg-4">
            <a class="zoom green" href="work01.html"><img class="img-responsive" src="assets/img/portfolio/port02.jpg"
                                                          alt=""/></a>

            <p>RAIDERS</p>
        </div>
        <div class="col-lg-4">
            <a class="zoom green" href="work01.html"><img class="img-responsive" src="assets/img/portfolio/port02.jpg"
                                                          alt=""/></a>

            <p>RAIDERS2</p>
        </div>
    </div>
</div>
<!-- /container -->

<?php
include "footer.php";
?>
</body>
</html>
