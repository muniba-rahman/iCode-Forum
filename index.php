<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCode - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <style>
      body{
        background-color: #2b3035;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
      }
      .heading{
        /* color: #F1C93B; */
        color: #00C4FF;
        font-weight: bold;
      }
      .line{
        width: 3%;
        height: 5px;
        background-color: #00C4FF;
        margin: auto;
        margin-top: 1rem;
        border: #00C4FF;
        border-radius: 2rem;
      }
      .card-body{
        background-color: #2b3035;
        color: #fff;
      }
      .card-title{
        color: #00C4FF;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <?php
    require "components/_dbconnect.php";
    require "components/_header.php";
    ?>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slide1.jpg" class="d-block w-100 banner" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/slide2.jpg" class="d-block w-100 banner" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/slide3.jpg" class="d-block w-100 banner" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
    <div class="container py-5 px-5">
      <h1 class="text-center heading">Categories</h1>
      <hr class="line">
    </div>
    <div class="container mb-5">
      <div class="row">
        <?php
        $sql = "SELECT * FROM `categories`";
        $result = mysqli_query($connection, $sql);
        while($data = mysqli_fetch_assoc($result)){
          $id = $data['category_id'];
          $name = $data['category_name'];
          $detail = $data['category_description'];
          echo '<div class="col-md-4">
                <div class="card my-3 mx-auto" style="width: 18rem;">
                  <img src="images/'. $name . '.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">'. $name .'</h5>
                    <p class="card-text">' . substr($detail, 0, 90) .'......</p>
                    <a href="threads.php?catid='. $id . '" class="btn" style="background-color: #00C4FF; color: #000;">Visit Threads</a>
                  </div>
                </div>
                </div>';
        }
        ?>
      </div>
    </div>

    <?php
    require "components/_footer.php";
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>