<?php  
include 'DBconnect.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>370 Project</title>
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Company</h1> 
      </div>
    </header>

    <section class="heading">
      <div class="container">
        <div class="content-one">
          <h1>Search Job</h1>   
        </div>
        <div class="content-two">
          <form action="job.php" method="POST">
        <input class="form-control" type="text" name="job" placeholder="Search">
        <input type="submit" value="search">
        <!-- <button class="btn btn-outline-secondary" type="button" name="submit-search">Search </button> -->
         </form>
       </div>
    </section>

    <section class="posts">
      <div class="container">
        <div class="content-three">
        <h2>JOB POSTS!</h2>
      </div>



<!--           <div class="content-five">
            <form action="new.php" method="POST">
              <input class="form-control" type="text" name="pos" placeholder="Position"><br>
              <input class="form-control" type="text" name="req" placeholder="Requirement"><br>
              <input class="form-control" type="text" name="ld" placeholder="Last Date"><br>
              <input class="form-control" type="text" name="des" placeholder="Description"><br>

              <input type="submit" value="Add to Database">



              
            </form>
          </div> -->


        <div class="content-four">
          <table>
            <tr>
              <th>Position</th>
              <th>Requirement</th>
              <th>Last Date</th>
              <th>Description</th>  
            </tr>


               <?php
                 include 'DBconnect.php'; 

                 $sql= "SELECT * from post";
                 $result= mysqli_query($conn,$sql);
                 $queryResult = mysqli_num_rows($result);
                 if($queryResult >0){
                  while($row =mysqli_fetch_array($result)){
                    ?>

                    <tr>
                      <td><?php echo $row[0]; ?> </td>
                      <td><?php echo $row[1]; ?> </td>
                      <td><?php echo $row[2]; ?> </td>
                      <td><?php echo $row[3]; ?> </td>
                    </tr>

                    <?php
                      }
                 }
                 else{
                  echo "Invalid";
                 }
                 ?>

           




          </table>
        </div>
      </div>

     <div class="content-six">
      <button type="button" class="btn"> <a href="post.php"> Click here to add data </a></button>

     </div>


    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
