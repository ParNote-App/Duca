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

    <main class="text-white bgDark flex-fill">
        <div class="container d-flex justify-content-center mt-4">
            <img
                    src="assets/img/user.jpg"
                    class="myImage borderPrimary"
                    width="230"
                    height="215"
            />
        </div>

        <div class="d-flex flex-column mt-4">
            <h1 class="d-flex justify-content-center pt-2"><?= $config["name-surname"] ?></h1>
            <h3 class="text-center mt-2 px-2">
                <small><?= $config["welcome-text"] ?></small>
            </h3>
        </div>

        <div class="container mt-4">
            <div class="row justify-content-center pt-2">
                <div class="col-auto">
                    <a href="/aboutme">
                        <button type="button" class="btn btnPersonal">About Me</button>
                    </a>
                </div>
                <div class="col-auto">
                    <?php if (isset($config['cv'])) { ?>
                        <div class="col-6">
                            <a href="<? $config['cv']['url'] ?>" target="_blank">
                                <button type="button" class="btn btnPersonal">CV</button>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-auto">
                    <a href="mailto:<?php echo $config["user-mail"] ?>">
                        <button type="button" class="btn btnPersonal">Contact</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row justify-content-center pt-2">
                <?php require_once "template/social-links.php" ?>
            </div>
        </div>
    </main>

<?php include 'template/footer.php';
