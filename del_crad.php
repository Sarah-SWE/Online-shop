<?php
    include('config.php');
    $q="DELETE FROM cart WHERE id=$_GET[id]";
    mysqli_query($con,$q);

    header("location: card.php");

?>