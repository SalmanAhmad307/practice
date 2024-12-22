<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <?php
      include('message.php');
      ?>
      <div class="row">
       <div class="col-md-12">
       <div class="card">
          <div class="card-header">
            <h4>Students Details <a href="student-create.php" class="btn btn-primary float-end">Add Students</a></h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>CNIC</th>
                  <th>Reg N0</th>
                  <th>Degree</th>
                  <th>Passing Session</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query= "SELECT * From students";
                  $query_run= mysqli_query($con,$query);
                  if(mysqli_num_rows($query_run)> 0)
                  {
                    foreach ($query_run as $student) 
                    {
                    
                      ?>
                      <tr>
                        <td><?php echo $student['id']; ?></td>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td><?php echo $student['phone']; ?></td>
                        <td><?php echo $student['cnic']; ?></td>
                        <td><?php echo $student['regno']; ?></td>
                        <td><?php echo $student['degree']; ?></td>
                        <td><?php echo $student['session']; ?></td>
                                    <td>
                        <a  href="student-view.php?id=<?php echo $student['id'];?>" class="btn btn-info btn-sm d-inline">View</a>
                          <a href="student-edit.php?id=<?php echo $student['id'];?>" class="btn btn-success btn-sm d-inline">Edit</a>
                          <form action="code.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?=$student['id'];?>">
                                <button type="submit" name="delete_student" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                       </tr>

                      <?php
                    }


                  }
                  else
                  {
                    echo "<h5> No Records Found </h5>";
                    
                  }

                ?>
               
              </tbody>
            </table>

          </div>
        </div>
       </div>
      </div>
    </div>










    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>