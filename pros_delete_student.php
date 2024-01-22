<?php

    include 'connection.php';
    $id = $_GET ['id'];

    $query = mysqli_query ($connection ,"DELETE FROM student WHERE id = '$id' ");

    echo "<script>alert('Rekod Telah Dihapuskan');
    window.location = 'index.php'</script>";
?>