<?php

global $config;

include 'template/header.php'
?>

  <body>
    <div class="top-grid"></div>
    <nav>
      <div class="logo">
        <h4>DUCA</h4>
      </div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="cv.html">CV</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
    <script src="app.js"></script>
    <div class="cv">
      <a
        target="_blank"
        href="./assets/file/Alp_CAKIR_CV.pdf"
        download="Alp_CAKIR_CV"
        >You can download my CV here</a
      >
    </div>
  </body>
</html>

<?php include 'template/footer.php';
