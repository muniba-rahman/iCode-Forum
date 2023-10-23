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
    .card{
        width: 100%;
        border: none;
        /* border-bottom: 1px solid #fff; */
        margin: 1rem;
        background: transparent;
    }
    .card-body{
        background-color: #2b3035;
        color: #fff;
        border: none;
    }
    .small-text{
        background-color: #2b3035;
        color: #00C4FF;
        font-size: 0.9rem;
        text-align: right;
    }
    .card-title{
        color: #00C4FF;
        font-weight: bold;
    }
    .img-bg{
        background-color: #2b3035;
        border: none;
    }
    .img-bg img{
        border-radius: 50%;
    }
    .alert-heading{
        font-weight: bold;
    }
    .thread_title{
        color: #00C4FF;
        text-decoration: none;
    }
    .thread_title:hover{
        text-decoration: underline;
    }
    .form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    label{
        font-size: 1.1rem;
    }
    .input{
        width: 100%;
        font-size: 1.1rem;
        background: transparent;
        outline: none;
        border: 2px solid #00c4ff;
        border-radius: 8px;
        padding: 0.4rem;
        color: #fff;
    }
    @media (max-width: 300px){
        .img-bg img{
            width: 6rem;
            height: 6rem;
        }
    }
    .search-result{
        min-height: 45.19vh;
    }
    </style>

  </head>
  <body>
    <?php
    require "components/_dbconnect.php";
    require "components/_header.php";
    ?>
  <div class="search-result">

    <div class="container py-5 px-5">
      <h1 class="text-center heading">Result for "<?php echo $_GET['search'] ?>"</h1>
      <hr class="line">
    </div>

    <div class="container mb-5">
      <div class="row">
        <?php
        $search = $_GET['search'];
        $sql = "SELECT * FROM `threads` WHERE MATCH (`thread_title`, `thread_description`) AGAINST ('$search');";
        $result = mysqli_query($connection, $sql);
        $no_result = true;
        while($data = mysqli_fetch_assoc($result)){
            $no_result = false;
            $thread_id = $data['thread_id'];
            $title = $data['thread_title'];
            $question = $data['thread_description'];
            $time = $data['timestamp'];
            $thread_user_id = $data['thread_user_id'];
            
            echo '<div class="card my-5" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 img-bg">
                    <img src="images/user.png" class="img-fluid rounded-start" alt="user">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><a href="question.php?threadid=' . $thread_id . '" class="thread_title">' . $title . '</a></h5>
                        <p class="card-text">' . $question . '</p>
                        <p class="card-text small-text pb-5">At - ' . $time . '</p>
                    </div>
                    </div>
                </div>
            </div>';
        }
        if($no_result){
            // echo '<h5 class="text-center mt-5" >No Result Found...</h5>';
            echo '<div class="container my-5">
            <div class="alert alert-primary" role="alert">
                <h1 class="alert-heading">No Result Found...</h1>
                <hr>
                <h5>Make sure to spell keyword correctly</h5>
            </div>
        </div>';
        }
        ?>
      </div>
    </div>

    </div>

    <?php
    require "components/_footer.php";
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>