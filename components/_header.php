<style>
  .nav-link:hover{
    border-bottom: 1px solid #fff;
  }
</style>

<?php
session_start();

echo '<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
<div class="container py-3">
  <a class="navbar-brand mb-0 h1" href="index.php" style="color:#00C4FF; font-size: 1.6rem; font-weight: bold;">iCode</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color:#fff">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" style="color:#fff">About</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php" style="color:#fff;">Contact</a>
    </li>
    </ul>';

  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo '<form class="d-flex mx-auto" role="search" action="/forum/search.php" method="GET">
    <input class="form-control me-2" name="search" type="search" placeholder="Search Category" aria-label="Search">
    <button class="btn" style="background-color: #00C4FF; color: #000;" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>

    <p style="margin: auto;">' . $_SESSION['useremail'] . '</p>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="btn mx-2 mt-2" href="components/_logout.php" role="button" style="background-color: #00C4FF; color: #000;">LOGOUT</a>
    </li>
    </ul>';
  }else{
    echo '<form class="d-flex mx-auto" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn" style="background-color: #00C4FF; color: #000;" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item">
  <a class="btn mx-2 mt-2" href="#" role="button" data-bs-toggle="modal" data-bs-target="#signupModal" style="background-color: #00C4FF; color: #000;">SIGNUP</a>
</li>
<li class="nav-item">
  <a class="btn mx-2 mt-2" href="#" role="button" style="background-color: #00C4FF; color: #000;" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</a>
</li>
</ul>';
}

echo '  </div>
</div>
</nav>';

include "components/_loginModal.php";
include "components/_signupModal.php";
?>