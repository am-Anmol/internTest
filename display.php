<?php
include 'config.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}
$email=$_GET['email'];
$s="SELECT * FROM students WHERE st_email='$email'";
$r = mysqli_query($conn, $s);
$row=mysqli_fetch_assoc($r);

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Display details</title>
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
          <a class="nav-link" href="edit.php?id=<?php echo $row['st_id'] ;?>">Edit</a>
      </ul>
      <form class="d-flex" action='logout.php'>
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>


<div class="container mt-4 ">
<table class="table d-flex justify-content-center table-danger table-striped" style="
    padding-top: 79px;">
  <tbody>
    <tr>
      <th scope="row">Id</th>
      <td><?php echo $row['st_id'];?></td>
    </tr>
    <tr>
      <th scope="row">Name</th>
      <td><?php echo $row['st_name'];?></td>
    </tr>
    <tr>
      <th scope="row">Dept</th>
      <td><?php echo $row['st_dept'];?></td>
    </tr>
    <tr>
      <th scope="row">Batch</th>
      <td><?php echo $row['st_batch'];?></td>
    </tr>
    <tr>
      <th scope="row">Sem</th>
      <td><?php echo $row['st_sem'];?></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><?php echo $row['st_email'];?></td>
    </tr>
  </tbody>
</table>
</div> 
<footer class="footer mt-auto py-3 bg-light fixed-bottom" style="text-align: center; " >
    <div class="container" >
        <span class="text-right">&#169;Copyright ANMOL GUPTA 2021</span>
    </div>
  </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>