<?php

    include 'connection.php';

    $id = $_GET ['id'];

    $query = mysqli_query ($connection, "SELECT * FROM student WHERE id = '$id'");

    if(isset ($_POST['submit'])){

        $up_name = $_POST ['up_name'];
        $up_gender = $_POST ['up_gender'];
        $up_program = $_POST ['up_program'];
        $up_cgpa = $_POST ['up_cgpa'];

        $query_update = mysqli_query ($connection, "UPDATE student 
        SET name='$up_name', gender='$up_gender', program='$up_program', cgpa='$up_cgpa' 
        WHERE id = '$id'");

        echo "<script>alert('Rekod Telah Dikemaskini');
        window.location = 'index.php'</script>";

    }
?>

<!--form-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-10" style="margin-left:auto; margin-right:auto;">
            <h1 style="padding: 2em 0; text-align: center; background-color:#1ABC9C;">Amali K2 DKA3213</h1>
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">List Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="insert.php">Insert Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="updated.php">Update/Remove</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>

    <!--Update From-->
    <div class="card -card-info">

        <div class = "card-body">
            <form class="form-horizontol" action="" method="post">
                <?php
                    while($data = mysqli_fetch_array($query)){
                ?>
                <div class = "mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value = "<?php echo $data ['name']?>" name="up_name">
                </div>
                <div class = "mb-3">
                    <label class="form-label">Gender</label>
                    <input type="text" class="form-control" value = "<?php echo $data ['gender']?>" name="up_gender">
                </div>
                <div class = "mb-3">
                    <label class="form-label">Program</label>
                    <input type="text" class="form-control" value = "<?php echo $data ['program']?>" name="up_program">
                </div>
                <div class = "mb-3">
                    <label class="form-label">CGPA</label>
                    <input type="text" class="form-control" value = "<?php echo $data ['cgpa']?>" name="up_cgpa">
                </div>
                <button type = "submit" name = "submit" class="btn btn-primary">Update</button>
                <?php } ?>
            </form>
        </div>
    </div>
</body>
</html>