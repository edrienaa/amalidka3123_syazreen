<?php 
    include 'connection.php';

    $query = mysqli_query ($connection, "SELECT * FROM student");
?>

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

            <table class = "table table-striped">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Program</th>
                        <th>CGPA</th>
                    </tr>
                </thead>

                <?php 
                    while ($data = mysqli_fetch_array($query)){
                ?>

                <tbody>
                    <tr>
                        <td>
                            <?php echo $data['id']; ?>
                        </td>
                        <td>
                            <?php echo $data['name']; ?>
                        </td>
                        <td>
                            <?php echo $data['gender']; ?>
                        </td>
                        <td>
                            <?php echo $data['program']; ?>
                        </td>
                        <td>
                            <?php echo $data['cgpa']; ?>
                        </td>

                <?php } ?>

                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</body>
</html>