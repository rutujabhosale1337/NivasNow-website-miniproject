<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_booking";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$rooms = $_POST['rooms'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$date1 = $_POST['date1'];


$sql = "INSERT INTO bookings (name, email, room_type, num_rooms, num_guests, visiting_dates) 
        VALUES ('$name', '$email', '$rooms', '$number1', '$number2', '$date1')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful! We will contact you soon.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
