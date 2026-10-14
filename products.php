<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
<style>
     .card{
        float: left;
        margin: 20px;
     }
     main{
        width: 60%;
        margin: auto;
     }
</style>
</head>

<body>
    <center>
        <h3>All available products</h3>
    </center>

    <?php
    
        include('config.php');
        

        $q="SELECT * FROM prod";

        $result=mysqli_query($con,$q);

        while($row=mysqli_fetch_array($result)){
                echo "
                    <main>
                        <section class='card' style='width: 320px'>
                            <img src='$row[image]' class='card-img-top h-25' alt='image' >
                            <div class='card-body'>
                              <h4 class='card-title'>$row[name]</h4>
                              <p class='card-text'>$row[price]</p>
                              <div>
                                <a href='edit.php? id=$row[id]' style='width:100px' class='btn-solid theme-primary'>Edit</a>
                                <a href='delete.php? id=$row[id]' style='width:100px' class='btn-solid theme-danger'>Delet </a>
                              </div>
                            </div>
                        </section>
                    </main>
                
                ";
        }


    
    ?>





</body>
</html>
