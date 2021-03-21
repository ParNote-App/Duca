<?php
global $config;
?>

<footer>
    <div class="container d-flex">
        <a
                href=<?= $config["repo"] ?>
                target="_blank"
                class="footerText"
        >This Website</a
        >
        <p class="ml-auto text-white">© <?= $config["copyright"] ?></p>
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
