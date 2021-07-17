<?php
require("connection.php");
?>
<html>
    <head>
        <title>Classroom</title>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <a href="index2.php">
                <img src="classroom%20logo.png" class="logo">
                </a>
                <ul>
                    <li><a href="schedule.php">Schedule</a></li>
                    <li><a href="questions.php">Questions</a></li>
                    <li><a href="review.php">Reviews</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </div>
            <div class="content">
                <h1>WELCOME TO CLASSROOM</h1>
                <p>Welcome!! please proceed with your question or even better, design your times table and make new friends.<br>You can ask any question to help youself better in your study. This will help you future. </p>
                <div class="homepagebut">
                    <a href="schedule.php"> 
                        <button type="button"><span></span>SCHEDULE</button>
                    </a>
                    <a href="Tutorial.php">
                       <button type="button"><span></span>TUTORIAL</button>
                    </a>
                </div>
            </div>
        </div>
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
    </style>
</html>