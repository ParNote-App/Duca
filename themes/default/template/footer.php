<?php
global $config;
?>

<div class="footer">&copy; All rights reserved. </div>

<script defer src="/assets/js/app.js"></script>
<?php
if ($config["live-reload"]) { ?>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>
<?php } ?>
</body>
</html>