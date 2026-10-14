<?php

include('config.php');


if(isset($_POST['upload'])){

    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up='imges/'.$image_name;


    $q="INSERT INTO prod ( name, price, image) VALUES('$NAME' , '$PRICE','$image_up' )";

    mysqli_query($con,$q);

    if(move_uploaded_file($image_location,'imges/'.$image_name)){
        echo "<script>alert('The file has been uploaded successfully')</script>";
    }else{
        echo "<script>alert('An Error occurred!')</script>";
    }
    header("location: index.php");
}

?>