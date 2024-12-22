<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Create</title>
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
                    <h4>Add Students
                        <a href="index.php" class="btn-btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                 <form action="code.php" method="POST">
                    <div class="mb-3">
                        <label >Name</label>
                        <input type="text" name="name" class="form-control">    
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">    
                    </div>
                    <div class="mb-3">
                        <label>Phone No</label>
                        <input type="text" name="phone" class="form-control">    
                    </div>
                
                    <div class="mb-3">
                        <label>CNIC</label>
                        <input type="text" name="cnic" class="form-control">    
                    </div>
                    <div class="mb-3">
                        <label>Registration No</label>
                        <input type="text" name="reg" class="form-control">    
                    </div>
                    <div class="mb-3">
                        <label>Degree</label>
                        <input type="text" name="degree" class="form-control">    
                    </div>
                   
                    <div class="mb-3">
                        <label>Passing Session</label>
                        <input type="text" name="session" class="form-control">    
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" name="save_student" 
                        class="btn btn-primary" >Save Students</button>
                    </div>
                    

                 </form>
                </div>
            </div>
        </div>
    </div>
   </div>












   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>