<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<title>Delete Media</title>

<style type= "text/css">
fieldset {
        margin: auto;
         margin-top: 100px;
        width: 50% ;
}

table tr th  {
        padding-top: 20px;
}

input  {
        width: 50vw;
}

.jumbotron {
            background: url("../images/library3a.jpg");
            background-repeat: no-repeat;
            object-fit: cover;
       }
       
</style>

</head>
<body>
<div class="jumbotron text-white mb-0">
  <h1 class="display-4">LIBRARY CATALOGUE</h1>
  <p class="lead">Find your favorite book, CD or DVD!</p>
</div>
<nav class="navbar navbar-expand-lg navbar-light  bg-dark pl-4 mb-2 pt-0">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-white active" href="../index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-white" href='../create.php'>Insert</a>
    </div>
  </div>
</nav>|

<div class="container-fluid pl-4">
<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM `media`
   WHERE media_id = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<h2>Successfully deleted!</ph2>" ;
    //    echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
<div>
<a class="btn btn-primary" type='button' role="button" href='../index.php'>Back</a>
</div>
</div>
</body>
</html>