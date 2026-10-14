<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit products </title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <?php
        include('config.php');
            $q="SELECT * FROM prod WHERE id=$_GET[id]";
            $result=mysqli_query($con,$q);
            $data=mysqli_fetch_array($result);
    
    ?>

    <center>
        <div class="main">
            <form action="up.php" method="post"  enctype="multipart/form-data">
                <h2>Edit the product</h2>
                <input type="text" name="id" value='<?php echo $data['id']?>'>
                <br>
                <input type="text" name="name" placeholder='Name'  value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name="price" placeholder='Price' value='<?php echo $data['price']?>'>
                <br>
                <label for="inp-file">Update Image</label>
                <input type="file" name="image" id='inp-file'style='display:none;' require>
                <button name='update' type='submit'>Edit</button>
                <br><br>
                <a href="./products.php">show all products</a>
            </form>
        </div>
        <p>Developed By Sarah</p>
    </center>
</body>
</html>