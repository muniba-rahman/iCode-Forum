<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCode - Question Thread</title>
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
    .span{
        color: #00C4FF;
        text-align: right;
    }
    .card-title{
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
    }
    .img{
        background-color: #2b3035;
        width: 5rem;
        height: 5rem;
    }
    .card-title{
        color: #00C4FF;
        font-weight: bold;
    }
    .img-bg img{
        border-radius: 50%;
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
    .comment{
        display: flex;
        width: 100%;
        height: max-content;
        border: 1px solid #fff;
        flex-direction: row;
    }
    </style>
  </head>
  <body>
    <?php
    require "components/_dbconnect.php";
    require "components/_header.php";

    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE `thread_id` = $id";
    $result = mysqli_query($connection, $sql);
    while($data = mysqli_fetch_assoc($result)){
        $title = $data['thread_title'];
        $description = $data['thread_description'];
        $posted_time = $data['timestamp'];
    };

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $comment = $_POST['comment'];
        $comment = str_replace("<", "&lt;", $comment);
        $comment = str_replace(">", "&gt;", $comment);
        $sql = "INSERT INTO `comments` (`thread_id` ,`comment_content`, `username`) VALUES ('$id', '$comment', '$username')";
        $result = mysqli_query($connection, $sql);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Comment Added Successfully!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed To Add Your Comment!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        };
    }
    ?>

    <div class="container my-5">
        <div class="alert alert-primary" role="alert">
            <h1 class="alert-heading">Forum Rules:</h1>
            <hr>
            <p>1. No Spam / Advertising / Self-promote in the forums. ...
                </br>
               2. Do not post copyright-infringing material. ...
               </br>
               3. Do not post “offensive” posts, links or images. ...
               </br>
               4. Do not cross post questions. ...
               </br>
               5. Do not PM users asking for help. ...
               </br>
               6. Remain respectful of other members at all times.
            </p>
        </div>
    </div>

    <div class="container">
        <hr>
        <?php
        echo '<h4 class="heading mt-4">' . $title . '</h4>
        <p class="mt-4">' . $description . '</p>
        <p class="text-right">Posted At - <span class="span small-text"> (' . $posted_time .  ') </span><p>';
        ?>
    </div>
    </div>

    <div class="container">
        <h2 class="heading text-center pt-5">Share Your Opinion</h2>
        <hr class="line">

        <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] =  true){
            echo '<form action=' . $_SERVER['REQUEST_URI'] . 'method="POST" class="form my-4">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="input my-3" require>
            <label for="comment" class="mt-4">Comment:</label>
            <textarea rows="3" type="text" name="comment" id="comment" class="input my-3" require></textarea>
            <button type="submit" class="btn btn-primary mt-3" style="background-color: #00C4FF; color: #000;">COMMENT</button>
            </form>';
        }else{
            echo '<div class="container my-5">
            <div class="alert alert-primary" role="alert">
                <h1 class="alert-heading">Note</h1>
                <hr>
                <h5>You must signup / login to share your comments...</h5>
            </div>
        </div>';
        };
        ?>
    </div>

    <div class="container">
        <h2 class="heading text-center pt-5">Comments To Above Query</h2>
        <hr class="mb-5 line">
    </div>

    <div class="container mt-5">
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE `thread_id` = $id";
        $result = mysqli_query($connection, $sql);
        $no_result = true;
        while($data = mysqli_fetch_assoc($result)){
            $no_result = false;
            $username = $data['username'];
            $comment = $data['comment_content'];
            $time = $data['comment_time'];
            echo '<div class="d-flex my-5">
            <div class="flex-shrink-0">
              <img class="img" src="images/user.png" alt="user">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5 class="card-title">' . $username . '</h5>
              <p class="mt-2">' . $comment . '</p>
              <small class="small-text">Last Updated: ' . $time . '</small>
            </div>
          </div>';
        }
        if($no_result){
            echo '<h5 class="text-center mt-5" >No Comments Found...</h5>
        <p class="text-center mb-5">Be the first person to comment on this question</p>';
        }
        ?>
    </div>

    <?php
    require "components/_footer.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>