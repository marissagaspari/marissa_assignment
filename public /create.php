<?php 

if(isset($_POST['submit'])) {
    
    //what will happen if the user clicks submit
    
    //load config file 
    require "../config.php";
    
    try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Get the contents of the form and store it in an array
        $new_work = array( 
            "beauty_appointment" => $_POST['beauty_appointment'], 
            "appointment_date" => $_POST['appointment_date'],
            "cost" => $_POST['cost'],
            "location" => $_POST['location'],
            "contact_number" => $_POST["contact_number"]
        );
        
        // THIRD: Turn the array into a SQL statement
        $sql = "INSERT INTO appointments (beauty_appointment, appointment_date, cost, location, contact_number) VALUES (:beauty_appointment, :appointment_date, :cost, :location, :contact_number)";   
        
        // FOURTH: Now write the SQL to the database
        $statement = $connection->prepare($sql);
        $statement->execute($new_work);
	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	};

}

?>


<?php include "templates/header.php"; ?>  

<form method="post">

<label for="beauty_appointment">beauty_appointment</label>
<input type="text" name="beauty_appointment" id="beauty_appointment">

<label for="appointment_date">appointment_date</label>
<input type="text" name="appointment_date" id="appointment_date">

<label for="cost">cost</label>
<input type="text" name="cost" id="cost">

<label for="location">location</label>
<input type="text" name="location" id="location">

<label for="contact_number">contact_number</label>
<input type="text" name="contact_number" id="contact_number">
<input type="submit" name="submit" id="submit">

</form>

<?php include "templates/footer.php"; ?>
