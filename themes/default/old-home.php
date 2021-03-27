<?php
global $config;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
    <meta name="description" content="DUCA"/>
    <meta charset="utf-8"/>
    <meta name="robots" content="index,follow"/>

    <link rel="icon" href="/assets/img/duca.ico"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="/assets/css/old-style.css"/>
</head>
<body>
<div class="top-grid"></div>
<nav>
    <div class="logo">
        <h4>DUCA</h4>
    </div>
    <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="cv.html">CV</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>
<script src="app.js"></script>
<div class="personal-info">
    <img
            id="portfolio-image"
            src="./assets/img/portfolio-image.jpeg"
            alt="portfolio-image"
    />
    <h4>
        My name is Alp CAKIR, I'm a Computer Science student, I love
        programming.
    </h4>
</div>
<ul class="personal-links">
    <li>
        <a target="_blank" href="https://github.com/alphazarc"
        ><img src="./assets/img/github.ico" alt="github-link"
            /></a>
    </li>
    <li>
        <a
                target="_blank"
                href="https://www.facebook.com/profile.php?id=1192789517"
        ><img src="./assets/img/facebook.ico" alt="facebook-link"
            /></a>
    </li>
    <li>
        <a target="_blank" href="https://www.instagram.com/alphazarc/"
        ><img src="./assets/img/instagram.ico" alt="instagram-link"
            /></a>
    </li>
    <li>
        <a href="mailto:alphazarc@gmail.com"
        ><img src="./assets/img/email.ico" alt="send-email"
            /></a>
    </li>
</ul>
<?php
global $config;
?>

<div class="footer">&copy; All rights reserved.</div>
<div class="bottom-grid"></div>


<script defer src="/assets/js/popper.min.js"></script>
<script defer src="/assets/js/bootstrap.min.js"></script>
<?php
if ($config["live-reload"]) { ?>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>
<?php } ?>
</body>
</html>