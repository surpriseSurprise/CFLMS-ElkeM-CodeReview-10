<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>LIBRARY</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

   <style type="text/css">
       .manageMedia {
           width : 96vw;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 1vh;
       }

       img {
            height: 15%;  
            margin: 0;
       }

       img:hover {
            height: 35%;  
            margin: 0;
       }

       tr:hover {
            background-color: lightgrey;
       }

       .jumbotron {
            background: url("images/library3a.jpg");
            background-repeat: no-repeat;
            object-fit: cover;
       }

       button {
	        background-color: #343A40;
          width: 7vw;
          border: none;
          margin: 0.5vh;
	        border-radius:4px;
        	display:inline-block;
	        cursor:pointer;
	        color:#ffffff;
	        font-family:Arial;
	        font-size:13px;
	        font-weight:bold;
	        padding:6px 12px;
	        text-decoration:none;
        }
        .tw {
          min-width: 12vw;
        }
        .pw {
          min-width: 8vw;
        }

        .tooltip {

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

<div class ="manageMedia">

   <table class="table table-bordered mt-4" cellspacing= "0" cellpadding="0">
       <thead>
           <tr class="pb-4">
               <th>Image</th>
               <th>ISBN / ASIN</th>
               <th>Author</th>
               <th class="tw">Title</th>
               <th>Description</th>
               <th>Publisher</th>    
               <th class="pw">Published</th>
               <th>Type</th>
               <th>Status</th>
               <th>   
               <a href= "create.php"><button class="btn btn-success" type="button" >Add Media</button></a>
               </th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT  media.media_id, `img`, `isbn`, author_fn, author_ln, `title`, `description`, `publisher_name`, `publish_date`, `type`, `stat`
           FROM `media`";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td><img src='" .$row['img']."'</td>
                       <td>" .$row['isbn']."</td>
                       <td>" .$row['author_fn']." " .$row['author_ln']."</td>
                       <td>" .$row['title']."</td>
                       <td>" .$row['description']."</td>
                       <td><a href='publishers.php?id=" .$row['media_id']."'>" .$row['publisher_name']."</a></td>
                       <td>" .$row['publish_date']."</td>
                       <td>" .$row['type']."</td>
                       <td>" .$row['stat']."</td>
                       <td>
                           <a href='single.php?id=" .$row['media_id']."'><button type='button'>Show</button></a>
                           <a href='update.php?id=" .$row['media_id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['media_id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='10'><center>No Data Available</center></td></tr>";
           }
            ?>


       </tbody>
   </table>
</div>

<footer class="footer footer-expand-lg bg-dark pt-0 py-4">
		<div class="container float-left ">
		  <p class="text-white pl-4">(c) Elke M., 2020<br><br></p>
		  <p></p>
		</div>
	</footer>
	<footer class="footer footer-expand-lg bg-dark pt-0 py-3">
	</footer>

  <!-- <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script>
    const button = document.querySelector('#button');
    const tooltip = document.querySelector('#tooltip');

    Popper.createPopper(button, tooltip);

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    }) 

    </script> -->

</body>
</html>