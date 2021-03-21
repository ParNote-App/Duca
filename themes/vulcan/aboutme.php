<?php
global $config;
include 'template/header.php'
?>

    <div class="navbar navbar-expand-sm">
        <div class="container-fluid d-flex justify-content-sm-end">
            <a href="/" class="nav-link navText">Home</a>
        </div>
    </div>

    <main class="text-white bgDark flex-fill">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 d-flex flex-column align-items-center pt-1">
                    <img
                            src="<?= $config["photo-url"] ?>"
                            class=myImage borderPrimary"
                    width="230"
                    height="215"
                    />

                    <div class="flex-sm-column">
                        <h3 class="text-center mt-4"><?= $config["name-surname"] ?></h3>
                        <h5 class="text-center mt-2"><?= $config["profession"] ?></h5>
                    </div>

                    <div class="d-flex align-content-center mt-4">
                        <?php if (isset($config['cv'])) { ?>
                            <a href="<? $config['cv']['url'] ?>" target="_blank">
                                <button type="button" class="btn btnPersonal">CV</button>
                            </a>
                            <?php
                        }
                        ?>
                        <a class="ml-4" href="mailto:<?php echo $config["email"] ?>">
                            <button type="button" class="btn btnPersonal">
                                Contact
                            </button>
                        </a>
                    </div>

                    <div class="d-flex justify-content-between mt-4 mb-3">
                        <?php require_once "template/social-links.php" ?>
                    </div>
                </div>

                <div class="col-sm-8 flex-fill">
                    <div class="flex-sm-column">
                        <div class="headerAbout">
                            <h4>About me</h4>
                            <hr class="solid"/>
                            <p>
                                <?= $config["about-me"] ?>
                            </p>
                        </div>
                        <div class="headerInterest">
                            <h4>Interests</h4>
                            <hr class="solid"/>
                            <div class="row">
                                <?php
                                foreach ($config["interests"] as $interest) {
                                    ?>
                                    <div class="col-6 mb-2 text-center">
                                        <img
                                                src="<?= $interest['image-url'] ?>"
                                                class="img-fluid"
                                                width="50"
                                                height="50"
                                        />
                                        <p><?= $interest['title'] ?></p>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="headerSkill">
                            <h4>Skills</h4>
                            <hr class="solid"/>
                            <div class="row">
                                <?php
                                foreach ($config["skills"] as $skill) {
                                    ?>
                                    <div class="col-3 text-center">
                                        <img
                                                src="<?= $skill['image-url'] ?>"
                                                class="img-fluid"
                                                width="50"
                                                height="50"
                                        />
                                        <p><?= $skill['title'] ?></p>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="headerProject mb-1">
                            <h4>Projects</h4>
                            <hr class="solid"/>
                            <?php
                            foreach ($config["projects"] as $project) {
                                ?>
                                <p>
                                    <a
                                            href="<?= $project['link'] ?>"
                                            target="_blank">
                                        ᐅ <?= $project['title'] ?>:
                                    </a>

                                    <?= $project['description'] ?>
                                </p>

                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include 'template/footer.php';
