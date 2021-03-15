<?php
global $config;
?>

<footer>
    <div class="container d-flex mt-3">
        <a
                href=<?= $config["github-address-of-this-website"] ?>
                target="_blank"
                class="footerText"
        >This Website</a
        >
        <p class="ml-auto text-white">© <?= $config["product-year-and-name-surname"] ?></p>
    </div>
</footer>
</div>

<?php
if ($config["live-reload"]) { ?>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>
<?php } ?>

</body>
</html>
