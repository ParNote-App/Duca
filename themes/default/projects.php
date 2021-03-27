<?php

global $config;

include 'template/header.php'
?>

<div class="project-parnote">
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

<?php include 'template/footer.php';
