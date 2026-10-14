<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post"  enctype="multipart/form-data">
                <h2>Online Shope</h2>
                <img src="./logo.jpg" alt="imge" width='300' >
                <br>
                <input type="text" name="name" placeholder='Name'>
                <br>
                <input type="text" name="price" placeholder='Price'>
                <br>
                <label for="inp-file">Choose File</label>
                <input type="file" name="image" id='inp-file'style='display:none;' require>
                <button name='upload'>Upload</button>
                <br><br>
                <a href="./products.php">show all products</a>
            </form>
        </div>
        <p>Developed By Sarah</p>
    </center>
</body>
</html>