<?php
include 'config.php';
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0){
        while($row=mysqli_fetch_assoc($result)){
             
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: display.php?email=$row[email]");
            
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Student Login</title>
  </head>
  <body style="background-color: #dee2e6;">
    <h2 style="text-align: center; padding-top: 20px;">Acme Interiors Intern Recruit Test</h2>
    <?php
    if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: center; ">
    <strong >'.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    ?>
    <h3 style="text-align: center; padding-top: 40px;">Login Panel</h3>
    <div class="container mt-4 d-flex justify-content-center"  >
    
    <form action="/internTest/index.php" method="POST">
        <div class="form-group mb-3">
            <label  class="form-label">User Name</label>
            <input  class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required> 
        </div>
        <button type="submit" class="btn btn-outline-success d-grid gap-2 col-6 mx-auto">Login</button>
    </form>
    </div>
    <footer class="footer mt-auto py-3 bg-light fixed-bottom" style="text-align: center; " >
    <div class="container" >
        <span class="text-right">&#169;Copyright ANMOL GUPTA 2021</span>
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>