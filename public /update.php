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


<h2>Results</h2>

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
    <a href='update-work.php?id=<?php echo $row['id']; ?>'>Edit</a>

</p>

<hr>
<?php }; //close the foreach
?>





<?php include "templates/footer.php"; ?>