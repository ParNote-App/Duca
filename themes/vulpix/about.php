<?php

global $config;

include 'template/header.php'
?>


    <br>

    <br>

    <div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <p><?= $config['about-me'] ?><?= $config['about-me'] ?></p>

            </div>
        </div>

        <br>
        <br>

        <div class="col-6">
            <div class="text-center">
                <img src="https://www.w3schools.com/howto/img_avatar.png"
                     class="rounded" alt="...">
            </div>

            <br>

            <div class="card">
                <div class="card-header">
                    Quote
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $config["intro-text"] ?></p>
                        <nav class="nav nav-pills nav-justified">
                            <div class="col-auto">
                                <a href="/index">
                                    <button type="button" class="btn btnPersonal">Home Page</button>
                                </a>
                            </div>
                            <a href="mailto:<?php echo $config["email"] ?>">
                                <button type="button" class="btn btnPersonal">Contact</button>
                            </a>
                           

                        </nav>
                    </blockquote>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header ">Project</div>
                <div class="card-body text-primary">

                    <?php
                    foreach ($config["projects"] as $project) {
                        ?>

                        <a
                                href="<?= $project['link'] ?>"
                                target="_blank">
                            ᐅ <?= $project['title'] ?>:
                        </a>

                        <?= $project['description'] ?>


                        <?php
                    }
                    ?>
                </div>


            </div>
        </div>

    </div>


    <br>
    <br>
    <br>
    <br>
<?php include 'template/footer.php';

