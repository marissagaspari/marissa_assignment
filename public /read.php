<?php 
	
    // include the config file that we created before
    require "../config.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Create the SQL 
        $sql = "SELECT * FROM appointments";
        
        // THIRD: Prepare the SQL
        $statement = $connection->prepare($sql);
        $statement->execute();
        
        // FOURTH: Put it into a $result object that we can access in the page
        $result = $statement->fetchAll();
	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	

?>

<?php include "templates/header.php"; ?>

<div class="container">
<div class="row">
    
<h3 style="border:2px solid palevioletred;">Appointments</h3>
<!-- This is a loop, which will loop through each result in the array -->
<?php foreach($result as $row) { ?>

<p>
    ID:
    <?php echo $row['id']; ?><br> beauty_appointment:
    <?php echo $row['beauty_appointment']; ?><br> appointment_date:
    <?php echo $row['appointment_date']; ?><br> cost:
    <?php echo $row['cost']; ?><br> location:
    <?php echo $row['location']; ?><br> contact_number:
    <?php echo $row['contact_number']; ?><br>

</p>

<hr>
<?php }; //close the foreach
 
?>

<form method="post">

    <input type="submit" name="submit" value="View all">

</form>
    </div>
</div>

<?php include "templates/footer.php"; ?>