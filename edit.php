<?php
include 'config.php';
$id=$_GET['id'];
$s="SELECT * FROM students WHERE st_id=$id";
$r = mysqli_query($conn, $s);
$row=mysqli_fetch_assoc($r);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Edit Details</title>
  </head>
  <body style="background-color: #dee2e6;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" >Student Details</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="display.php?email=<?php echo $row['st_email'] ;?>">Display</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit.php?id=<?php echo $id ;?>">Edit</a>
      </ul>
      <form class="d-flex" action='logout.php'>
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
  <div class="container mt-4 d-flex justify-content-center"  >
  <form action='update.php' method="post">
        <div class="form-group mb-3">
            <label  class="form-label">Id</label>
            <input  class="form-control" id="sid" name="sid"  value="<?php echo $row['st_id'];?>">
        </div>
        <div class="form-group mb-3">
            <label  class="form-label">Name</label>
            <input  class="form-control" id="sid" name="sname" value="<?php echo $row['st_name'];?>">
        </div>
        <div class="form-group mb-3">
            <label  class="form-label">Dept</label>
            <input  class="form-control" id="sdept" name="sdept" value="<?php echo $row['st_dept'];?>">
        </div>
        <div class="form-group mb-3">
            <label  class="form-label">Batch</label>
            <input  class="form-control" id="sbatch" name="sbatch" value="<?php echo $row['st_batch'];?>">
        </div>
        <div class="form-group mb-3">
            <label  class="form-label">Sem</label>
            <input  class="form-control" id="ssem" name="ssem" value="<?php echo $row['st_sem'];?>">
        </div>
        <div class="form-group mb-3">
            <label  class="form-label">Email</label>
            <input  class="form-control" id="semail" name="semail" value="<?php echo $row['st_email'];?>">
        </div>
        <button type="submit" class="btn btn-outline-success d-grid gap-2 col-6 mx-auto">Update</button>
    </form>
    </div>
    <footer class="footer mt-auto py-3 bg-light " style="text-align: center; " >
    <div class="container" >
        <span class="text-right">&#169;Copyright ANMOL GUPTA 2021</span>
    </div>
  </footer>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>