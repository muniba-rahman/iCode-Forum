<style>
    .footer{
        display: flex;
        flex-direction: row;
        width: 100%;
        height: fit-content;
    }
    .footer1{
        width: 30%;
        margin: auto;
    }
    .footer2{
        width: 30%;
        margin: auto;
    }
    .footer3{
        width:30%;
        margin: auto;
    }
    .icon{
        font-size: 1.7rem;
        margin: 0.4rem;
    }
    @media (max-width: 700px){
        .footer{
            flex-direction: column;
        }
        .footer1, .footer2, .footer3{
            width: 100%;
        }
    }
</style>

<div class="container-fluid footer py-5" style="background: #000;">
    <div class="footer1">
        <h2 class="heading">iCode</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem optio debitis dolorum est iusto, nostrum rem tenetur quam voluptas laboriosam modi numquam velit, totam minus, labore fugiat. Cumque repudiandae quos, quibusdam corrupti recusandae neque.</p>
    </div>
    <div class="fooetr2">
        <h5 class="heading">Quick Links</h5>
        <p><a href="index.php" style="color: #fff;">Home</a></p>
        <p><a href="index.php" style="color: #fff;">Threads</a></p>
        <p><a href="index.php" style="color: #fff;">Contact</a></p>
        <p><a href="index.php" style="color: #fff;">About</a></p>
    </div>
    <div class="footer3">
        <h5 class="heading mb-3">Get Social With US</h5>
        <a href="#" style="color: lightblue;" class="icon"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" style="color: yellow;" class="icon"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" style="color: #00c4ff;" class="icon"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" style="color: orangered;" class="icon"><i class="fa-brands fa-google"></i></a>
    </div>
</div>