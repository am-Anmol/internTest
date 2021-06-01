<?php 
   include('config.php');
        $id=$_POST['sid'];
        $name=$_POST['sname'];
        $email=$_POST['semail'];
        $dept = $_POST['sdept'];
        $sem = $_POST['ssem'];
        $batch=$_POST['sbatch'];
        $sql="UPDATE students SET st_id='$id',st_name= '$name' , st_dept='$dept' ,st_email='$email' ,st_sem='$sem',st_batch='$batch' WHERE st_id='$id'";
        $res=mysqli_query($conn,$sql);
        header("Location: display.php?email=$email");    
?>