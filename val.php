<?php 

include('config.php');
$ID=$_GET['id'];
$up=mysqli_query($con,"SELECT * FROM prod WHERE id=$ID");
$data=mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    <title>Confirm Buying the card</title>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert_card.php" method="post" class='df'>
                <h3>Do you really want buy this card?</h3>
                <style>
                    input{
                        display:none;
                    }
                    .main{
                        margin-top: 100px;
                        padding:20px ;
                        width: 30%;
                        box-shadow:0px 0px 50px #63626217;
                        border-radius:30px;
                    }
                    button{
                        padding: 5px 40px;
                        margin-top: 20px;
                    }
                    a{
                        display: inline-block;
                        margin-top: 30px;
                    }
                </style>
                <input type="text" name="id" value='<?php echo $data['id']?>' >
                <input type="text" name="name"  value='<?php echo $data['name']?>'>
                <input type="text" name="price" value='<?php echo $data['price']?>' >
                <button name="add" type='submit' class="btn btn-outline-warning">Add Item</button>

             </form>
            <br>
        </div>
        <a href="./shop.php" class='link'>Go back</a>
    </center>
</body>
</html>