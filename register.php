<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <section class="container" id="registerForm" ">
        <header>Registration Form</header>
        <form action="#" class="form">
        <div class="input-box">
            <label>Full Name:</label><br>
            <input type="text" id="name" placeholder="Enter your full name" required><br>
        </div>

        <div class="input-box">
            <label>Phone Number:</label><br>
            <input type="numbers required" id="name" placeholder="Enter your Phone Number" required><br>
        </div>

        <div class="column">

        <div class="input-box">
            <label>Email Address:</label><br>
            <input type="text" id="name" placeholder="Enter your Email Address" required><br>
        </div>

        <div class="input-box">
            <label>Birth Date:</label><br>
            <input type="date" id="name" placeholder="Enter your Birth Date" required><br>
        </div>
    </div>
    <div class="gender-box">
    <h3>Gender</h3>
    <div class="gender-option">
    <div class="gender">
      
            <input type="radio" id="check-male" name="gender">
            <label for="check-male">Male</label><br>
        </div>

        <div class="gender">
            <input type="radio" id="check-female" name="gender">
            <label for="check-female">Female</label><br>
        </div>

        <div class="gender">
            <input type="radio" id="other" name="gender">
            <label for="check-other">Prefer not to say</label><br>
        </div>
    </div>
    </div>
    <div class="input-box">
        <label>Address:</label><br>
        <input type="text" id="name" placeholder="Enter your street Address" required><br>
        <input type="text" id="name" placeholder="Enter your street Address line 2" required><br>

<div class="column">
    <div class="select-box">
        <select>
            <option hidden>Country</option>
            <option>South Africa</option>
            <option>Indonesia</option>
            <option>America</option>
            <option>Nigeria</option>
            <option>Egypt</option>
        </select>
    </div>
    <input type="text" id="name" placeholder="Enter your city" required><br>
</div>

       <div class="column">
        <input type="text" id="name" placeholder="Enter your region" required><br>
        <input type="numbers" id="name" placeholder="Enter your postal code" required><br>
    </div>
</div>

<button>Submit</button>

    </form>
    </section>

</body>
</html>
