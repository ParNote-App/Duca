<?php

global $config;

include 'template/header.php'
?>
    <div class="personal-info">
        <img
                id="portfolio-image"
                src="<?= $config["photo-url"] ?>"
                alt="portfolio-image"
        />
        <h4>
            <?= $config["intro-text"] ?>
        </h4>
    </div>
    <ul class="personal-links">
        <?php
        foreach ($config["social-links"] as $link) {
            ?>
            <li>
                <a target="_blank" href="<?= $link["url"] ?>"
                ><img src="<?= $link["image-url"] ?>" width="64"/></a>
            </li>
            <?php
        }
        ?>
    </ul>

<?php include 'template/footer.php';
