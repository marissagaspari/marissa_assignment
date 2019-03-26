CREATE DATABASE marissa_assignment;

use marissa_assignment;

CREATE TABLE appointments (
    id INT (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    beauty_appointment VARCHAR (30) NOT NULL, 
    appointment_date VARCHAR (30) NOT NULL, 
    cost VARCHAR (30), 
    location VARCHAR (30), 
    contact_number INT (20),
    date TIMESTAMP
);