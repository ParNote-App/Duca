<?php

global $config;

include 'template/header.php'
?>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><?= $config["name-surname"] ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Form
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=mailto:<?php echo $config["user-mail"] ?>">
                        <button type="button" class="btn btnPersonal">
                            Contact
                        </button></a>

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

                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="/contact">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<br>

<br>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <p><?=$config['description'] ?><?=$config['description'] ?></p>

            </div>
        </div>

        <br>
        <br>

        <div class="col-6">
            <div class="text-center">
                <img src="https://media-exp1.licdn.com/dms/image/C4E03AQHTgRq2Qx8VsA/profile-displayphoto-shrink_800_800/0/1603622188305?e=1621468800&v=beta&t=3PcOR5MQlrmAMThH0TD5TtE91HUOmEOhTYUto3cQadY" class="rounded" alt="...">
            </div>

            <br>

            <h1>Projects</h1>

            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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

            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Experience</div>
                <div class="card-body text-success">

                    <h5 class="card-title"><?= $config["job-title"] ?></h5>
                    <p class="card-text"><?= $config["welcome-text"] ?></p>
                </div>
            </div>


        </div>
    </div>

</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<br>
<br>
<?php include 'template/footer.php';

