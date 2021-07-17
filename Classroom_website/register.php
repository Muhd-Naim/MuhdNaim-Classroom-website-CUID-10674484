<!DOCTYPE html>
<html lang="en-US">
<meta charset="utf-8">
    <head>
        <title>Classroom</title>

	<script>
	function verify ()
		{if (document.register.retype.value != document.register.password.value)
		 {alert("Please match password.");
		  document.custDet.retype.focus() ;
		  return false;
		 }
		 return true;
		}
	</script>

    </head>
    <body>
	<form action="" method="post" name="register" onsubmit="return (verify());">
        <div class="banner">
            <div class="navbar">
                <a href="index.php">
                <img src="classroom%20logo.png" class="logo">
                </a>
                <ul>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <div class="RegisterName">
                <h2>Register</h2>
            </div>
            <div class="Register">
                    <div>
                        <label>First Name</label>
                        <input type="text"
                               placeholder="e.g. Jade"
                               name="firstName" required>
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text" 
                               placeholder="e.g. Dawson"
                               name="lastName" required>
                    </div>
                    <div>
                    <div>
                        <label>E-mail</label>
                        <input type="email" 
                               placeholder="e.g. janedoe@gmail.com"
                               name="email" required>
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password"
                               placeholder="e.g. Abcd1234"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                               name="password" required>
                    </div>
                    <div class="button">
                        <div class="btn-layer"></div>
                        <input type="submit" name="submit" value="Sign Up">
                    </div>
                    </div>
            </div>
        </div>
        </form>
    </body>
    <style>
        *
{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.banner
{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(Study.jpg);
    background-size: cover;
    background-position: center;
}
.navbar
{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo
{
    width: 400px;
    cursor: pointer;
}
.navbar ul li
{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbar ul li a
{
    text-decoration: none;
    color: antiquewhite;
    text-transform: uppercase;
    font-size: 19px;
}
.navbar ul li::after
{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after
{
    width: 100%;
}
.content
{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: bisque;
}
.content h1
{
    font-size: 50px;
    margin-top: 80px;
}
.content p
{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
    font-size: 20px;
}
.homepagebut button
{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: aquamarine;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
span
{
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
.homepagebut button:hover span
{
    width: 100%;
}
.homepagebut button:hover
{
    border: none;
}
.Register
{
    width: 100%;
    position: absolute;
    --left: 38%;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: bisque;
    font-size: 19px;
}
.Register input
{
    margin: 20px 100px 20px 100px;
    padding: 5px 70px;
    font-size: 15px;
}
.RegisterName
{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-550%);
    text-align: center;
    color:firebrick;
    font-size: 40px;
    margin-top: 80px;
}
    </style>
</html>
<?php
      include 'connection.php';
if(isset($_POST['submit'])){
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];



  $query = "INSERT INTO register
                (firstName, lastName, email, password)
                VALUES ('".$firstName."','".$lastName."','".$email."','".$password."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
                <script type="text/javascript">
            alert("Successfully Added.");
            window.location = "login.php";
        </script>
                <?php
}
      ?>