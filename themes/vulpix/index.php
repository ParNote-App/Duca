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
                    <img class="card-img-top"
                         src="https://www.w3schools.com/howto/img_avatar.png"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><?= $config["name-surname"] ?></h4>
                        <br>
                        <h5 class="card-title"><?= $config["profession"] ?></h5>
                        <br>
                        <p class="card-text"><?= $config["intro-text"] ?> <?= $config["intro-text"] ?><?= $config["intro-text"] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


                    <br>

                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0RBNEZ1brWx5mD4gh-2XN5utlUmGzstLuGw&usqp=CAU"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Python</h5>
                                <p class="card-text">This is a wider card</p>
                            </div>

                        </div>
                        <div class="card">
                            <img class="card-img-top" src="https://miro.medium.com/max/594/1*ymVNbsdd7KxHXHC4-LP7kw.png"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">C#</h5>
                                <p class="card-text">This card has </p>
                            </div>

                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                 src="data:image/png;base64,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"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Java</h5>
                                <p class="card-text">This is a wider </p>
                            </div>

                        </div>

                    </div>

                    <br>
                    <br>

                    <div class="card">
                        <div class="card-header">
                            Quote
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p><?= $config["intro-text"] ?></p>
                                <nav class="nav nav-pills nav-justified">
                                    <a href="mailto:<?php echo $config["email"] ?>">
                                        <button type="button" class="btn btnPersonal">Contact</button>
                                    </a>
                                    <div class="col-auto">
                                        <a href="/about">
                                            <button type="button" class="btn btnPersonal">About</button>
                                        </a>
                                    </div>


                                </nav>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Project</div>
                    <div class="card-body">
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
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Education</div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"><?= $config["intro-text"] ?></p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
<br>

<?php include 'template/footer.php';