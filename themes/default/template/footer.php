<?php
global $config;
?>
<script defer src="/assets/js/popper.min.js"></script>
<script defer src="/assets/js/bootstrap.min.js"></script>
<?php
if ($config["live-reload"]) { ?>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>
<?php } ?>
</body>
</html>