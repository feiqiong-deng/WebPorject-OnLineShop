<?php
    // Connect database.
    include "connection.php";
    
    $target_dir = "imgs/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // If there is a image is uploaded, move the image to the imgs folder.
    if(isset($_FILES['image'])) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    }

    // SQL insert data query.
    $sql = "INSERT INTO Product (product_name, product_image, brand, rating, price, details)
    VALUES ('$_POST[product_name]','$target_file', '$_POST[brand]','$_POST[rating]','$_POST[price]','$_POST[details]')";
    
    // Execute insert query.
    if (!mysqli_query($conn,$sql)) {
        die('Error: ' . mysqli_error($conn));   
    }

    echo "1 record added, data successfully saved.";
    
    // close connection
    mysqli_close($conn)    
?>
