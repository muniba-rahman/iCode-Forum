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
        border-bottom: 1px solid #fff;
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
    </style>

  </head>
  <body>
    <?php
    require "components/_dbconnect.php";
    require "components/_header.php";

    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id = $id";
    $result = mysqli_query($connection, $sql);
    while($data = mysqli_fetch_assoc($result)){
        $name = $data['category_name'];
        $description = $data['category_description'];
    };

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $query_title = $_POST['query_title'];
        $query_desc = $_POST['query_desc'];
        $query_title = str_replace("<", "&lt;", $query_title);
        $query_title = str_replace(">", "&gt;", $query_title);
        $query_desc = str_replace("<", "&lt;", $query_desc);
        $query_desc = str_replace(">", "&gt;", $query_desc);
        $sql = "INSERT INTO `threads` (`thread_cat_id`, `thread_user_id`, `thread_title`, `thread_description`) VALUES ('$id', '0', '$query_title', '$query_desc')";
        $result = mysqli_query($connection, $sql);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Query Addedd Successfully!</strong> Refresh the page if you cannot see your query in the below list.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed To Add Your Query!</strong> It might happen due to bad internet connection.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        };
    }
    ?>
  
    <div class="container py-5 px-5">
      <h1 class="text-center heading">Welcome To <?php echo $name ?> Threads</h1>
      <hr class="line">
    </div>

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
        <?php
        echo '<h3 class="heading">' . $name . '</h3>
        <p>' . $description . '</p>';
        ?>
    </div>
    </div>
    
    <div class="container">
        <h2 class="heading text-center pt-5">Post Your Query Here</h2>
        <hr class="line">

        <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] =  true){
            echo '<form action=' . $_SERVER['REQUEST_URI'] . ' method="POST" class="form my-4">
            <label for="query_title">Title:</label>
            <input type="text" name="query_title" id="query_title" class="input my-3" required>
            <small>NOTE: Keep your title short and precise</small>
            <label for="query_desc" class="mt-4">Description:</label>
            <textarea rows="3" type="text" name="query_desc" id="query_desc" class="input my-3" required></textarea>
            <button type="submit" class="btn btn-primary mt-3" style="background-color: #00C4FF; color: #000;">POST</button>
            </form>';
        }else{
            echo '<div class="container my-5">
            <div class="alert alert-primary" role="alert">
                <h1 class="alert-heading">Note</h1>
                <hr>
                <h5>You must signup / login to post your queries...</h5>
            </div>
        </div>';
        };
        ?>

    </div>

    <div class="container">
        <h2 class="heading text-center pt-5">Top Questions</h2>
        <hr class="mb-5 line">
    </div>

    <div class="container mt-5">
        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
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
            echo '<h5 class="text-center mt-5" >No Result Found...</h5>
        <p class="text-center mb-5">Be the first person to post a question</p>';
        }
        ?>
    </div>

    <?php
    require "components/_footer.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>