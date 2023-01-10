<?php
require_once('connection.php')
?>

  
<nav class="navbar navbar-expand-lg navbar-light col-lg-12 mx-auto">
  <div class="container-fluid col-xl-10">
    <a class="navbar-brand" href="#"><img class="logo img-thumbnail" src="https://banner2.cleanpng.com/20190711/ksf/kisspng-tesla-inc-tesla-model-3-decal-logo-download-tesla-emblem-png-black-tesla-logo-png-p-5d2708d46d55b7.5696886815628392524478.jpg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../fiveG_project">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../fiveG_project/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../fiveG_project/service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        
      </ul>
      
    </div>
    <?php require_once('queryForm.php')?>
  </div>
  
</nav>

