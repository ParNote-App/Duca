<?php
global $config;
include 'template/header.php'
?>

    <main class="text-white bgDark flex-fill d-flex pt-4">
        <div class="container align-self-center">
            <div class="d-flex justify-content-center">
                <img
                        src="<?= $config["photo-url"] ?>"
                        class="myImage borderPrimary"
                        width="230"
                        height="215"
                />
            </div>

            <div class="d-flex flex-column mt-4">
                <h1 class="d-flex justify-content-center pt-2 text-center"><?= $config["name-surname"] ?></h1>
                <h3 class="text-center mt-2 px-2">
                    <small><?= $config["intro-text"] ?></small>
                </h3>
            </div>

            <div class="mt-4">
                <div class="row justify-content-center pt-2">
                    <div class="col-auto">
                        <a href="/aboutme">
                            <button type="button" class="btn btnPersonal">About Me</button>
                        </a>
                    </div>
                    <div class="col-auto">
                        <?php if (isset($config['cv'])) { ?>
                            <div class="col-6">
                                <a href="<?= $config['cv']['url'] ?>" target="_blank">
                                    <button type="button" class="btn btnPersonal">CV</button>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-auto">
                        <a href="mailto:<?php echo $config["email"] ?>">
                            <button type="button" class="btn btnPersonal">Contact</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="row justify-content-center pt-2">
                    <?php require_once "template/social-links.php" ?>
                </div>
            </div>
        </div>
    </main>

<?php include 'template/footer.php';
