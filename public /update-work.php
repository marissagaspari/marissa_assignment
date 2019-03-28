<?php 
  
    require "../config.php";
    require "common.php";
   
    if (isset($_POST['submit'])) {
        try {
            $connection = new PDO($dsn, $username, $password, $options);  
            
            $appointment =[
                "id"         => $_POST['id'],
                "beauty_appointment"         => $_POST['beauty_appointment'],
                "appointment_date" => $_POST['appointment_date'],
                "cost"  => $_POST['cost'],
                "location"   => $_POST['location'],
                "contact_number"   => $_POST['contact_number'],
                "date"   => $_POST['date'],
            ];
         
            $sql = "UPDATE `appointments` 
                    SET id = :id, 
                       beauty_appointment = :beauty_appointment, 
                        appointment_date = :appointment_date, 
                        cost = :cost, 
                        location = :location, 
                        contact_number = :contact_number,
                    WHERE beauty_appointment = :beauty_appointment";
            //prepare sql statement
            $statement = $connection->prepare($sql);
            
            //execute sql statement
            $statement->execute($appointment);
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
    // GET data from DB
    //simple if/else statement to check if the id is available
    if (isset($_GET['id'])) {
        //yes the id exists 
        
        try {
            // standard db connection
            $connection = new PDO($dsn, $username, $password, $options);
            
            // set if as variable
            $id = $_GET['id'];
            
            //select statement to get the right data
            $sql = "SELECT * FROM appointments WHERE id = :id";
            
            // prepare the connection
            $statement = $connection->prepare($sql);
            
            //bind the id to the PDO id
            $statement->bindValue(':id', $id);
            
            // now execute the statement
            $statement->execute();
            
            // attach the sql statement to the new work variable so we can access it in the form
            $appointment = $statement->fetch(PDO::FETCH_ASSOC);
            
        } catch(PDOExcpetion $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    } else {
        // no id, show error
        echo "No beauty_appointment - something went wrong";
        //exit;
    };
?>

<?php include "templates/header.php"; ?>

<div class="container">
<div class="row">

<?php if (isset($_POST['submit']) && $statement) : ?>
	<p>Work successfully updated.</p>
<?php endif; ?>

<h2>Edit a appointment</h2>

<form method="post">
    
    <label for="beauty_appointment">beauty_appointment</label>
    <input type="text" name="beauty_appointment" id="beauty_appointment" value="<?php echo escape($appointment['beauty_appointment']); ?>">

    <label for="appointment_date">appointment_date</label>
    <input type="text" name="appointment_date" id="appointment_date" value="<?php echo escape($appointment['appointment_date']); ?>">

    <label for="cost">cost</label>
    <input type="text" name="cost" id="cost" value="<?php echo escape($appointment['cost']); ?>">

    <label for="location">location</label>
    <input type="text" name="location" id="location" value="<?php echo escape($appointment['location']); ?>">
    
    <label for="contact_number">contact_number</label>
    <input type="text" name="contact_number" id="contact_number" value="<?php echo escape($appointment['contact_number']); ?>" >

    <input type="submit" name="submit" value="Save">

</form>



    </div>
</div>

<?php include "templates/footer.php"; ?>
