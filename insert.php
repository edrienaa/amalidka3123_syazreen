<?php 
    include 'connection.php';

    if(isset($_POST["submit"])){
        $id = $_POST ['id'];
        $name = $_POST ['name'];
        $gender = $_POST ['gender'];
        $program = $_POST ['program'];
        $cgpa = $_POST ['cgpa'];

        $query = mysqli_query ($connection, "INSERT INTO student(id, name, gender, program, cgpa)
        VALUES ('$id', '$name', '$gender', '$program', '$cgpa')")
        or die (mysqli_error());

        echo "<script>alert('Rekod Telah Dimasukkan');
        window.location = 'index.php'</script>";
    }
?>

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

            <!-- Horizontal Form -->
            <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <h4>Insert Form</h4>
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name">
                    </div>
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="gender">
                    </div>
                    <label for="program" class="col-sm-2 col-form-label">Program</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="program">
                        <option selected>Program</option>
                        <option value="MTA">MTA</option>
                        <option value="HSK">HSK</option>
                        <option value="HBP">HBP</option>
                        <option value="BPP">BPP</option>
                        <option value="BKP">BKP</option>
                        <option value="BPR">BPR</option>
                        <option value="KSK">KSK</option>
                        <option value="BAK">BAK</option>
                        <option value="IPD">IPD</option>
                      </select>
                    </div>
                    <label for="cgpa" class="col-sm-2 col-form-label">CGPA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="cgpa">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Insert</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

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