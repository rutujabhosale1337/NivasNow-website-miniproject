<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Nivasnow</title>
   
    <link rel="stylesheet" type="text/css" href="pickmeup.css">
    <link rel="stylesheet" type="text/css" href="handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   
    
    
    </head>
    
<body>
    <header class="tm-header">
        <img class="tm-logo" src="c:\Users\bhosa\OneDrive\Desktop\nivasnow.png" alt="Nivasnow">
        <nav class="tm-nav">
       <div>
            <ul>
                <li class="tm-list"><a href="index.html">Home</a></li>
                <li class="tm-list"><a href="explore.html">Explore</a></li>
                <li class="tm-list"><a href="rooms.html">Rooms</a></li>
                <li class="tm-list"><a href="bb.html">Booking</a></li>
                
                <li class="tm-list"><a href="Registration form.html">Registration</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>    
            </div>
        </nav>
    </header>
    
    
    <section class="tm-main">
           <p>Booking</p>
    </section>
    
    
    
    <section class="tm-booking">
    
    <form action="booking.php" method="POST">
            <div class="tm-form1">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="E-mail" required>
        
                <label for="rooms" id="inlinelable">Rooms</label>
                <select name="rooms" id="rooms">
                    <option value="luxurys">Luxury Suite</option>
                    <option value="deluxs">Delux Suite</option>
                    <option value="premiers">Premier Suite</option>
                    <option value="deluxr">Delux Room</option>
                    <option value="premierr">Premier Room</option>
                </select>
        
                <div class="tm-num1" id="handleCounter1">
                    <label for="number1">Number of Rooms</label><br />
                    <input type="number" name="number1" id="number1" value="1" min="1">
                </div>
        
                <div class="tm-num2" id="handleCounter2">
                    <label for="number2">Number of Guests</label><br />
                    <input type="number" name="number2" id="number2" value="1" min="1">
                </div>
            </div>
        
            <div class="tm-form2">
                <div class="tm-cl">
                    <label for="date1" class="arrival">Visiting Dates from Arrival to Departure</label>
                    <input type="date" name="date1" id="date1">
        
                    <input type="submit" id="sub" value="Proceed">
                    <p id="payment-status"></p>
<input type="hidden" name="payment_status" id="payment_status" value="pending">
<input type="hidden" name="transaction_id" id="transaction_id" value="">
                </div>
            </div>
        </form>
    </section>
    
    
    <footer class="tm-footer">
        <div class="tm-us">
        <p class="bold">About Us</p>
        <p>We are a part of chain of luxury hotels 
            which extends all over the world. We 
            provide a luxorious stay with various value
            added and free services which will make
            you visit us over and over again.
<br>
        We are the part of K19TG Group-20 
        and this is our website
    </p>    
        </div>
       
        <div class="tm-address">
        <p class="bold">Address</p>
        <p>155,East Virar,Maharashtra
        <br> 
            Phone : (+91) 9021854640
            <br>
            Email : viva88miniproject-20@info.in</p>    
        </div>
        <br/>
    <div class="tm-media">
        <a href="#"> <img src="fb.png"></a>
        <a href="#"> <img src="G.png"> </a>
        <a href="#"> <img src="twittr.png"> </a>
        <a href="#">  <img src="insta.png"> </a>
        
        </div>
    </footer>
    <script>
    document.getElementById("fake-pay-button").addEventListener("click", function() {
        let payButton = document.getElementById("fake-pay-button");
        let paymentStatus = document.getElementById("payment-status");

         
        payButton.innerText = "Processing...";
        payButton.disabled = true;

        setTimeout(() => {
             
            let fakeTransactionId = "TXN" + Math.floor(Math.random() * 1000000000);
            
             
            document.getElementById("payment_status").value = "paid";
            document.getElementById("transaction_id").value = fakeTransactionId;

             
            paymentStatus.innerHTML = `<span style="color: green; font-weight: bold;">Payment Successful! Transaction ID: ${fakeTransactionId}</span>`;
            payButton.innerText = "Payment Completed";

             
            document.querySelector("form").submit();

        }, 3000);  
    });
</script>

    

    
    </body>
    
</html>
    
