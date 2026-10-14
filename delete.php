<?php
    include('config.php');
    $q="DELETE FROM prod WHERE id=$_GET[id]";
    mysqli_query($con,$q);

    header("location: products.php");

?>