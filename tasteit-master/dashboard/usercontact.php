<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Information!</title>
  </head>
  <?php

  include 'navbar.php';
  include '../php/connection.php';
  ?>
  <body>
    <h1 class = "fw-bolder text-center text-uppercase mt-3">COntact INFORMATION</h1>
    <table class="table table-striped table-light text-danger">
        <thead>
            <tr>
                <th scope = "col" class = "text-uppercase ">#</th>
                  <th scope = "col" class = "text-uppercase ">Name</th>
                   <th scope = "col" class = "text-uppercase ">Email</th>
                      <th scope = "col" class = "text-uppercase ">Subject</th>
                         <th scope = "col" class = "text-uppercase ">Message</th>
                           
                              

            </tr>
        </thead>
        <?php

            $query = "SELECT * FROM `contact`";
            $result = mysqli_query($con, $query);
            $serail = 1;
            while($row = mysqli_fetch_array($result)){

                ?>
                <tr>
                      <td scope = row ><?php  echo $serail ?></td> 
                     
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['subject'] ?></td>
                    <td><?php echo $row['message'] ?></td>

                </tr>
               
                <?php
                 $serail++;


            }
        ?>
    </table>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>