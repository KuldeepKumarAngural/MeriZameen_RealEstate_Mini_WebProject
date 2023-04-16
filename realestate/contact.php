<!DOCTYPE html>
<html lang="en">

<head>
    <title>Merizameen.com</title>
    <link rel="stylesheet" href="css/style3contact.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MeriZameen</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="services.html">SERVICE</a></li>
                    <li><a href="property.html">PROPERTY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

           


        </div>
        <div class="content">
            <h1>Contact Us </h1>
            <p class="par">Having Questions? Tell us about your Business,<br>
                Our experts will check all the aspects and call you <br>back to explain
                how MeriZameen.com
                would help you <br>to get quotes for your Business.</p>
        </div>



        <div class="content">
            <h2>Office Address</h2>
            <p class="par">4A Street, Dalhousi Road,
                City center Mall,<br>
                Pathankot, Punjab, India, Pin - 145001</p>




        </div>
        <div class="col-lg-3">
            <img src="img/book-appointment.png" alt="">
            <p>For Appointments Call<br><a href="tel:+919855171485">+91-9855171485</a></p>
        </div>
        <div class="col-lg-3">
            <img src="img/phone-icon.png" alt="">
            <p>Request an Appointment<br>24/7</p>
        </div>




    </div>








    <div class="form">
        <h2>MeriZameen</h2>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> "
                method="POST">
            <input type="name" name="name" placeholder=" Name " required>
            <input type="email" name="email" placeholder=" Email " required>
            <input type="phone" name="phone" placeholder="Mobile no" required>
            <textarea name="message" id="desc" cols="30" rows="10"
                placeholder="Enter your message our representive will text or call you reagrding your sale or purchase"> </textarea>
            <button class="btnn" type="submit" name="submit">submit</button>
        </form>

    </div>
    </div>




    <footer>
        <div class="center">
            copyright &copy;www.MeriZameen.com . all rights reserved

        </div>
    </footer>


</body>

</html>

<?php
session_start();
include 'dbcon.php';
if(isset($_POST['submit'])){

$fname = $_POST['name'];
$mail = $_POST['email'];
$mobile = $_POST['phone'];
$message = $_POST['message'];

$insertquery = " insert into customer_req (name, email, phone, message) values('$fname', '$mail', '$mobile','$message')";

$query = mysqli_query($con, $insertquery);

if($query){
?>
<script>alert('Inserted successfully,We will contact you soon');</script>
<script>window.location.href = 'contact.php'</script>
<?php
    }
    else{
        ?>
<script>alert('Not Inserted');</script>
<?php 
    }

}
session_destroy();
?>