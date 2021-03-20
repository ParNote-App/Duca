<?php
global $config
    ?>

<footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <div class="content">
                    <a class="facebook" href="https://www.facebook.com/arda.burak.atila" target="_blank"><img alt="facebook-logo" src="assets/img/Facebook.png" width="30px"></a>
                    <a class="github" href="https://github.com/archely" target="_blank"><img alt="github-logo" src="assets/img/Github.png" width="30px"></a>
                    <a class="linkedin" href="https://www.linkedin.com/in/arda-burak-atila-a5a126141/" target="_blank"><img alt="linkedin-logo" src="assets/img/Linkedin.png" width="30px"></a>

                </div>
            </div>
        </div>
    </nav>

</footer>

<?php
if ($config["live-reload"]) { ?>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>
<?php } ?>

