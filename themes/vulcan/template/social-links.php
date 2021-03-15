<?php
global $config;

foreach ($config["social-links"] as $link) {
    ?>
    <div class="col-auto">
        <a
                href="<?= $link["url"] ?>"
                target="_blank">
            <img
                    src="<?= $link["image-url"] ?>"
                    class="imgFeature"
                    width="50"
                    height="50"/>
        </a>
    </div>
    <?php
}
?>