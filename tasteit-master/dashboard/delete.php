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
 
  include 'deletequery.php';



  ?>
  <body>
    <h1 class = "fw-bolder text-center text-uppercase mt-3">DELETE INFORMATION</h1>
    <table class="table table-striped table-light text-danger">
        <thead>
            <tr>
                <th scope = "col" class = "text-uppercase ">#</th>
                  <th scope = "col" class = "text-uppercase ">Image</th>
                   <th scope = "col" class = "text-uppercase ">NAME</th>
                      <th scope = "col" class = "text-uppercase ">EMAIL</th>
                         <th scope = "col" class = "text-uppercase ">PASSWORD</th>
                            <th scope = "col" class = "text-uppercase ">NUMBER</th>
                               <th scope = "col" class = "text-uppercase ">DATE & TIME</th>
                                  <th scope = "col" class = "text-uppercase ">COUNTRY</th>
                                     <th scope = "col" class = "text-uppercase ">GENDER</th>
                                      <th scope = "col" class = "text-uppercase ">Delete</th>

            </tr>
        </thead>
        <?php

            $query = "SELECT * FROM `signin`";
            $result = mysqli_query($con, $query);
            $serail = 1;
            
            while($row = mysqli_fetch_array($result)){

                ?>
                <tr>
                      <td scope = row ><?php  echo $serail ?></td> 
                       <td><img src="../Userimages/<?php echo $row['image'] ?>" alt="userimage"  alt="userimages" style = "height:100px ; width:100px ;border-radius:50px;" ></td>  
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['Number'] ?></td>
                    <td><?php echo $row['date of birth'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['Gender'] ?></td>
                   <td>
  <a href="deletequery.php?userid=<?php echo urlencode($row['id']); ?>" 
     class="btn btn-danger text-uppercase"
     onclick="return confirm('Are you sure you want to delete this user?');">
    Delete
  </a>
</td>

                </tr>
               
                <?php
                 $serail++;


            }
        ?>
    </table>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>