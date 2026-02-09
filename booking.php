<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_booking";

 
$conn = new mysqli($servername, $username, $password, $dbname);

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $room_type = $_POST['rooms'];
    $num_rooms = (int)$_POST['number1'];
    $num_guests = (int)$_POST['number2'];
    $visiting_dates = $_POST['date1'];

     
    $room_prices = [
        "luxurys" => 5000,
        "deluxs" => 4000,
        "premiers" => 4500,
        "deluxr" => 3000,
        "premierr" => 3200
    ];

    $price_per_room = isset($room_prices[$room_type]) ? $room_prices[$room_type] : 0;
    $total_price = $price_per_room * $num_rooms;

     
    $transaction_id = "TXN" . strtoupper(bin2hex(random_bytes(4)));  
    $payment_status = "Cash on Counter";  

     
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, room_type, num_rooms, num_guests, visiting_dates, price, payment_status, transaction_id) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiisss", $name, $email, $room_type, $num_rooms, $num_guests, $visiting_dates, $total_price, $payment_status, $transaction_id);

    if ($stmt->execute()) {
         
        header("Location: receipt.php?name=$name&email=$email&room_type=$room_type&num_rooms=$num_rooms&num_guests=$num_guests&visiting_dates=$visiting_dates&total_price=$total_price&transaction_id=$transaction_id&payment_status=$payment_status");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
