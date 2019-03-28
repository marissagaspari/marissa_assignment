<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">

</head>
<body>
    
    <div class="container">
        <div class="row">
      

            <h1 style="border:2px solid palevioletred;">Beauty Appointment Tracker</h1>
            
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: palevioletred;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: mintcream;
}
</style>
        
        
<ul style="list-style-type:square;">
    <li> <a href="index.php">Home</a></li>        
    <li> <a href="create.php">Add a beauty_appointment</a></li>
            <li> <a href="read.php">List all beauty_appointments</a></li>
            <li><a href="update.php">Edit a beauty_appointment</a></li>
            <li><a href="delete.php">Delete a beauty_appointment</a></li>
            </ul>
        
    </div>
    </div>

    </body>
<?php include "templates/footer.php"; ?>
        