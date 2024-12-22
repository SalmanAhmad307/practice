<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Student</title>
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
                    <h4>Student View 
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
                              

                                   
                                    
                                    <div class="mb-3" >
                                        <label >Name</label>
                                        <p class="form-control">
                                        <?= $student['name']; ?> 
                                        </p>   
                                    </div>
                                    <div class="mb-3">
                                    <label>Email</label>  
                                    <p class="form-control">
                                       <?= $student['email']; ?> 
                                        </p>  
                                    </div>
                                    <div class="mb-3">
                                    <label>Phone No</label>
                                    
                                    <p class="form-control">
                                        <?= $student['phone']; ?> 
                                        </p>    
                                    </div>
                                    <div class="mb-3">
                                    <label>CNIC</label>
                                    <p class="form-control">
                                        <?= $student['cnic']; ?> 
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                    <label>Registration No</label>
                                   
                                    <p class="form-control">
                                        <?= $student['regno']; ?> 
                                        </p>    
                                    </div>
                                    <div class="mb-3">
                                    <label>Degree</label>
                                    <p class="form-control">
                                        <?= $student['degree']; ?>
                                        </p>
                                    </div>
                                
                                    <div class="mb-3">
                                    <label>Passing Session</label>
                                   
                                    <p class="form-control">
                                        <?= $student['session']; ?> 
                                        </p>   
                                    </div>
                                
                                   
                    

                            
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