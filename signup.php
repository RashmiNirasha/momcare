
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    <link rel="stylesheet" href="Style.css">
    
</head>
<body>
<header class="header">

<a href="#" class="logo"> <img src="Assets\Project Logo.png" alt="" class="img" /> </a>
<nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
</nav>
</header>

<h1>Welcome to Mom Care</h1>
<div class="container2">
<h1>Register </h1>
    <form action="control\process-signup.php" method="post" class="form" id="submit">
        <table class="lables">
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" placeholder="Enter your name" required></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><input type="text" name="address" id="address" placeholder="Enter your address" required></td>
                </tr>
            <tr>
            <td><label for="dob">Date of Birth</label></td>
            <td><input type="date" name="dob" id="dob" placeholder="Enter your date of birth" required></td>
                </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" placeholder="Enter your email" required></td>
            </tr>
            <tr>
                <td><label for="phone">Telephone Number</label></td>
                <td><input type="text" name="phone" id="phone" placeholder="Enter your phone number" required></td>
            </tr>
            <tr>
                <td><label for="city">Workplace</label></td>
                <td><input type="text" name="worlplace" id="worlplace" placeholder="Enter your worlplace" required></td>
            </tr>
            <tr>
                <td><label for="state">designation</label></td>
                <td><input type="text" name="designation" id="designation" placeholder="Enter your designation" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password" placeholder="Enter your password" required></td>
            </tr>
            <tr>
                <td><label for="password2">Confirm Password</label></td>
                <td><input type="password" name="password2" id="password2" placeholder="Confirm your password" required></td>
            </tr>
            
        </table>
        <button type="submit" name="submit" class="btn-2">Sign up</button>
    </form>

</div>
<div class="footer">
        <p>Created by Rashmi Gunawardana | All rights reserved © 2022</p> 
    </div>
</body>
</html>


        
            

<!-- <div class="container2">
    <h1>Register</h1>
    
    <form action="control\process-signup.php" method="post" id="signup" novalidate>
        <div class="lables">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        
        <div class="lables">
            <label for="email">email</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div class="lables">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="lables">
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        <button class="btn-1">Sign up</button>
    </form>
</div> -->

       










