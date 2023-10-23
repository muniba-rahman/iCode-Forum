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

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $message = $_POST['message'];
        $sql = "INSERT INTO `feedbacks` (`username`, `message`) VALUES ('$username', '$message')";
        $result = mysqli_query($connection, $sql);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Feedback Sent Successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Failed To Send Your Message!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        };
    }
    ?>
  
    <div class="container py-5 px-5">
      <h1 class="text-center heading">We Are Open For Your Feedback!</h1>
      <hr class="line">
    </div>

    <div class="container mb-5">
        <form action='contact.php'  method="POST" class="form my-4">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="input my-3" required>
            <label for="message" class="mt-4">Let us know how can we improve our service?</label>
            <textarea rows="3" type="text" name="message" id="message" class="input my-3" required></textarea>
            <button type="submit" class="btn btn-primary mt-3" style="background-color: #00C4FF; color: #000;">SEND FEEDBACK</button>
        </form>
    </div>

    <?php
    require "components/_footer.php";
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>