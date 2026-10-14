<?php

include('config.php');


if(isset($_POST['update'])){
    $ID=$_POST['id'];
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up='imges/'.$image_name;


    $q="UPDATE prod SET id=$ID, name='$NAME'  , price='$PRICE' , image='$image_up' WHERE id='$ID'";

    mysqli_query($con,$q);

    if(move_uploaded_file($image_location,'imges/'.$image_name)){
        echo "<script>alert('The file has been uploaded successfully')</script>";
    }else{
        echo "<script>alert('An Error occurred!')</script>";
    }
    header("location: products.php");
}

?>