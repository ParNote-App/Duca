<?php
global $config;
include 'template/header.php'
?>

    <div class="d-flex flex-column min-vh-100">
    <div class="navbar navbar-expand-sm">
        <div class="container-fluid d-flex justify-content-sm-end">
            <a href="/" class="nav-link navText">Home</a>
        </div>
    </div>

    <main class="navText bgDark flex-fill">
        <div class="d-flex flex-column mt-5">
            <h1 class="display-1 d-flex justify-content-center mt-5 pt-5"><?= $config["404-tag"] ?></h1>
            <h3 class="display-4 text-center mt-3 px-2">
                <small><?= $config["404-error"] ?></small>
            </h3>
        </div>
    </main>

<?php include 'template/footer.php';

