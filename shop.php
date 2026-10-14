<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page | All Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
<style>
    @import url("https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Dancing+Script:wght@400..700&family=Google+Sans+Flex:opsz,wght@6..144,1..1000&family=IBM+Plex+Sans+Arabic:wght@200;300;400&family=Lemonada:wght@300..700&family=M+PLUS+Rounded+1c&family=Outfit:wght@100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap");

    body{
  font-family: "Cairo", sans-serif;
    }
     .card{
        float: left;
        margin: 20px;
     }
     main{
        width: 60%;
        margin: auto;
     }
    .link{
        margin-left: 50px;
        padding: 10px 20px;
        border-radius:20px;
        transition:0.4s all ease-in-out;
     }

    .link:hover{
        background-color: #ffffff21;

    }
    h3{
        font-weight: 700;
    }
</style>
</head>

<body>

<nav class="navbar bg-body-tertiary">
<a href="card.php" class="navbar-brand link">Show Cards </a></nav>

    <center>
        <h3 class='mt-4'>All available products</h3>
    </center>

    <?php
    
        include('config.php');
        $q="SELECT * FROM prod";
        $result=mysqli_query($con,$q);

        while($row=mysqli_fetch_array($result)){
                echo "
                    <main>
                        <section class='card shadow' style='width: 320px'>
                            <img src='$row[image]' class='card-img-top h-25 ' alt='image' >
                            <div class='card-body'>
                              <h4 class='card-title'>$row[name]</h4>
                              <p class='card-text'>$row[price]</p>
                              <div>
                                <a href='val.php? id=$row[id]' style='width:100%' class='btn btn-success'>Add to cart</a>
                              </div>
                            </div>
                        </section>
                    </main>
                
                ";
        }
    ?>
</body>
</html>
