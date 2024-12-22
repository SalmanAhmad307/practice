<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
   <div class="container mt-5">
    <?php
    include('message.php');?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Student
                        <a href="index.php" class="btn-btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                        if(isset($_GET['id']))
                        {
                            $student_id= mysqli_real_escape_string($con,$_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id'";
                            // $query = "SELECT * FROM students WHERE id='$student_id'";

                            
                            $query_run= mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0)
                            {

                                $student=mysqli_fetch_array($query_run);
                               ?>
                                <form action="code.php" method="POST">

                                    <input type="hidden" name="id" class="form-control" value="<?= $student['id']; ?>" >
                                    
                                    <div class="mb-3" >
                                        <label >Name</label>
                                        <input type="text" name="name" class="form-control" value="<?= $student['name']; ?>">    
                                    </div>
                                    <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?= $student['email']; ?>">    
                                    </div>
                                    <div class="mb-3">
                                    <label>Phone No</label>
                                    <input type="text" name="phone" class="form-control" value="<?= $student['phone']; ?>">    
                                    </div>
                            
                                    <div class="mb-3">
                                    <label>CNIC</label>
                                    <input type="text" name="cnic" class="form-control" value="<?= $student['cnic']; ?>">    
                                    </div>
                                    <div class="mb-3">
                                    <label>Registration No</label>
                                    <input type="text" name="reg" class="form-control" value="<?= $student['regno']; ?>">    
                                    </div>
                                    <div class="mb-3">
                                    <label>Degree</label>
                                    <input type="text" name="degree" class="form-control" value="<?= $student['degree']; ?>">    
                                    </div>


                                    <div class="mb-3">
                                    <label>Passing Session</label>
                                    <input type="text" name="session" class="form-control" value="<?= $student['session']; ?>">    
                                    </div>
                                   
                                    
                                
                                    <div class="mb-3">
                                    <button type="submit" name="update_student" 
                                    class="btn btn-primary" >Update Students</button>
                                    </div>
                    

                                </form>
                               <?php
                            }   
                            else
                            {
                                // echo "<h4> No Such Id Found</h4>"
                                echo "<h4> No Such Id Found</h4>";
                            }


                        }
                    ?>


                
                </div>
            </div>
        </div>
    </div>
   </div>












   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>