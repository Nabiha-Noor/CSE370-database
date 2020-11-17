
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
      	<div class="content-three">
        <h1>Job</h1> 
    </div>

      </div>
    </header>

    <section class="search">
    	<div class="container">
    	<table class="content-four">
    		<tr>
    			<th>Name</th>
    			<th>Skillsets</th>
    			<th>Experience</th>
    			<th>Location</th>
    		</tr>

             <?php
                 include 'DBconnect.php';

                 $v = $_POST["job"];
                 echo $v;

                 $sql="SELECT * FROM jobs WHERE skillsets='$v' OR location='$v' OR experience= '$v'";
                 $result = mysqli_query($conn,$sql);
                 $queryResult= mysqli_num_rows($result);

                 if($queryResult >0){
                 	while($row = mysqli_fetch_array($result)){
               ?>
               <tr>
               	<td> <?php echo $row[0]; ?></td>
               	<td> <?php echo $row[1]; ?></td>
               	<td> <?php echo $row[2]; ?></td>
               	<td> <?php echo $row[3]; ?></td>
               </tr>

               <?php
                 	}

                 }
                 else{
                 	echo "Nothing to show";
                 }
                 ?>

    	</table>
    </div>
    </section>











    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>

