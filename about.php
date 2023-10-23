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
  
    <div class="container py-5 px-5">
      <h1 class="text-center heading">Get To Know More About iCode Forum</h1>
      <hr class="line">
    </div>

    <div class="container mb-5">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quis, distinctio adipisci quos eius eaque aspernatur sunt alias reprehenderit, ut amet sint, provident nemo unde atque repellat temporibus molestiae pariatur quam rem vitae assumenda possimus facere. Fugit recusandae amet, cupiditate totam voluptatum sunt accusamus laudantium iure quisquam. Ducimus error ex laudantium dignissimos facilis, laborum illum vero eum hic eaque voluptates optio libero nostrum repudiandae nulla fuga? Corporis blanditiis quaerat atque? Qui nobis voluptatem vero aliquid officiis eius tempora, voluptatibus, architecto non consequuntur ut a facere aperiam ipsam magni molestiae! Unde, laudantium aut dolorum ratione nisi id suscipit numquam ducimus possimus non, iusto cum autem labore necessitatibus alias in tenetur obcaecati provident quasi eveniet atque incidunt commodi. Numquam sapiente delectus in. Consequuntur modi harum possimus dolorum inventore vero, ipsum aperiam nostrum? Labore amet maxime ea voluptas excepturi, ab corrupti! Dolorem, eos at pariatur quos distinctio placeat? Fugiat, error et ex obcaecati quia eligendi non molestias esse reiciendis quam at cum tempora autem provident quasi voluptas atque impedit dolore neque? A deleniti eaque, quas fugit veritatis exercitationem quos illum neque esse ut facere eius distinctio nam qui odio, ipsam, pariatur eos illo aliquid. Odio, voluptatum, sequi, consequuntur error voluptates ratione vitae libero sint suscipit maiores voluptatibus voluptatem minus hic debitis nihil? Culpa tenetur inventore temporibus veniam possimus delectus, sequi debitis nemo assumenda, iusto provident quibusdam! Nostrum cum rerum, libero earum nemo incidunt voluptas aliquam quam architecto, ipsa exercitationem non id! Voluptatibus consequatur expedita, consectetur magni aperiam rerum nihil voluptate sequi ipsum repellendus commodi quis quasi ratione obcaecati ex corrupti maiores reprehenderit qui ea nulla possimus sapiente! Quaerat suscipit, quisquam molestiae repudiandae placeat quo amet reprehenderit quas dignissimos, nostrum sit tempora officia dolore esse dolorem porro vitae labore accusantium culpa? Aliquid, magni. Voluptatem quis ratione voluptatum ad incidunt laudantium, alias repellendus molestiae doloremque?</p>
    </div>

    <?php
    require "components/_footer.php";
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>