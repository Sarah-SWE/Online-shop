<?php

include('config.php');


if(isset($_POST['add'])){
    
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];

    $q="INSERT INTO cart (name , price) VALUES('$NAME' , '$PRICE' )";

    mysqli_query($con,$q);

    header("location: card.php");
}

?>