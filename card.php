<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart | Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
<style>
     table{
        margin: 50px 0;
     }
     main{
        width: 50%;
        margin: auto;

     }
     table{
        box-shadow:1px 1px 10px silver;
        text-align: center;
     }
     .link{
        display: inline-block;
        margin-top: 100px;
     }
</style>
</head>

<body>
    <h3 class='text-center'>My cart | My products</h3>
    <center>

    <?php
        include('config.php');
        $q="SELECT * FROM cart";
        $result=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($result)){
                echo "
                <main>
                    <table class='table'>
                        <thead class='table-success'> 
                            <tr>
                                <th scope='col'>Product Name</th>
                                <th scope='col'>Product Price</th>
                                <th scope='col'>Delete Product</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$row[name]</td>
                                <td>$row[id]</td>
                                <td><a href='./del_crad.php? id=$row[id]' class='btn btn-danger' id='$row[id]'>Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </main> 
                ";
         }
         
         ?>
         <a href="./shop.php" class='link '>Go back</a>
    </center>

</body>
</html>
