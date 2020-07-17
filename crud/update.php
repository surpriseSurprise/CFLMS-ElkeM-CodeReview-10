<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM `media` WHERE media_id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <title>Update Media</title>

<style type= "text/css">


table tr th  {
        padding-top: 20px;
}

input  {
        width: 60vw;
}

.jumbotron {
            background: url("images/library3a.jpg");
            background-repeat: no-repeat;
            object-fit: cover;
       }
       
input, select {
    margin-left: 1vw;
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
      <a class="nav-item nav-link text-white active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-white" href='create.php'>Insert</a>
    </div>
  </div>
</nav>

<div class="container-fluid pl-4">
<fieldset >
<legend class=ml-2>Update Media</legend>

<form class="ml-2" action="actions/a_update.php" method= "post">
   <table cellspacing= "0" cellpadding="0">
            <th>Image</th>
            <td><input  type="text" name="image" value="<?php echo $data['img'];?>"></td>
        </tr> 
        <tr>
            <th>ISBN / ASIN</th >
            <td><input  type="text" name="isbn" value="<?php echo $data['isbn'];?>"></td >
        </tr>   
        <tr>
            <th>Author First Name</th >
            <td><input type="text" name="author_fn" value="<?php echo $data['author_fn'];?>"></td >
        </tr>
        <tr>
            <th>Author Last Name</th >
            <td><input type="text" name="author_ln" value="<?php echo $data['author_ln'];?>"></td >
        </tr>  
        <tr>
            <th>Title</th>
            <td><input  type="text" name= "title" value="<?php echo $data['title'];?>"></td>
        </tr>
        <th>Description</th>
            <td><input  type="text" name= "description" value="<?php echo $data['description'];?>"></td>
        </tr>
        <tr>
            <th>Publisher</th >
            <td><input type="text"  name="publisher_name" value="<?php echo $data['publisher_name'];?>"></td >
        </tr>  
        <tr>
            <th>Published</th>
            <td><input type="text"  name="publish_date" value="<?php echo $data['publish_date'];?>"></td>
        </tr>
        <tr>
        <th>Type</th>
		    <td>
			<select name="type">
				<option value="Book">Book</option>
				<option value="CD">CD</option>
				<option value="DVD">DVD</option>
			</select>
		</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
            <select name="stat">
				<option value="Available">Available</option>
				<option value="Reserved">Reserved</option>
            </td>
			</select>
        </tr>
               <input type= "hidden" name= "media_id" value= "<?php echo $data['media_id']?>" />
               <td><button class="btn btn-warning mt-4" type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button class="btn btn-primary mt-4" type="button" >Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>