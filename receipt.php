<?php
$name = $_GET['name'] ?? "Unknown";
$email = $_GET['email'] ?? "Unknown";
$room_type = $_GET['room_type'] ?? "Unknown";
$num_rooms = $_GET['num_rooms'] ?? "0";
$num_guests = $_GET['num_guests'] ?? "0";
$visiting_dates = $_GET['visiting_dates'] ?? "Not Provided";
$total_price = $_GET['total_price'] ?? "0";
$transaction_id = $_GET['transaction_id'] ?? "N/A";
$payment_status = $_GET['payment_status'] ?? "Pending";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        .receipt-box {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 2px 2px 10px gray;
        }
        h2 {
            color: #28a745;
        }
        .details {
            text-align: left;
            margin: 20px auto;
            width: 80%;
        }
        .details p {
            font-size: 18px;
        }
        .print-btn, .home-btn {
            padding: 10px 20px;
            background: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin: 10px;
        }
        .home-btn {
            background: #28a745;
        }
        .print-btn:hover {
            background: #0056b3;
        }
        .home-btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>

    <div class="receipt-box">
        <h2>Booking Receipt</h2>
        <div class="details">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Room Type:</strong> <?php echo htmlspecialchars($room_type); ?></p>
            <p><strong>Number of Rooms:</strong> <?php echo htmlspecialchars($num_rooms); ?></p>
            <p><strong>Number of Guests:</strong> <?php echo htmlspecialchars($num_guests); ?></p>
            <p><strong>Visiting Dates:</strong> <?php echo htmlspecialchars($visiting_dates); ?></p>
            <p><strong>Total Price:</strong> ₹<?php echo number_format($total_price, 2); ?></p>
            <p><strong>Transaction ID:</strong> <?php echo htmlspecialchars($transaction_id); ?></p>
            <p><strong>Payment Status:</strong> <?php echo htmlspecialchars($payment_status); ?></p>
        </div>
        <button class="print-btn" onclick="window.print()">Print Receipt</button>
        <button class="home-btn" onclick="window.location.href='index.html'">Go to Home Page</button>
    </div>

</body>
</html>
