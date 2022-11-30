<html>
    <head>
        <title>Tutorial</title>
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
                    <li><a href="Learning.php">Learning Video</a></li>
                    <li><a href="index.php">Logout</a></li>
                    
                </ul>
            </div>
             <div class="container">
                <h1>Tutorial</h1>
                <ol>
                    <h2 class="Title">How to Register</h2> 
                    <li>Click on <a href="register.php">register</a> button if you haven't register</li>
                    <img src="registerbutton.jpg" width="1100" height="500">
                    <li>Fill up all the requirement</li>
                    <img src="registerform.jpg" width="1100" height="500">
                    <li>Click sign up to submit your register</li>
                    <img src="registersignup.jpg" width="1100" height="500">
                </ol>
                <br>
                <ol>
                    <h2>How to Login</h2>
                    <li>Click on <a href="login.php">login</a> button after you have register</li>
                    <img src="loginbutton.jpg" width="1100" height="500">
                    <li>Fill up your email and password</li>
                    <img src="loginform.jpg" width="1100" height="500">
                    <li>Press submit</li>
                    <img src="loginsubmit.jpg" width="1100" height="500">
                </ol>
                <br>
                <ol>
                    <h2>How to ask Questions</h2>
                    <li>Click on <a href="questions.php">questions</a> button</li>
                    <img src="questionsbutton.jpg" width="1100" height="500">
                    <li>Write down your question on the texbox</li>
                    <img src="questionsform.jpg" width="1100" height="500">
                    <li>Click publish to submit your question</li>
                    <img src="questionspublish.jpg" width="1100" height="500">
                    <li>Click on reply to reply your friend's question</li>
                    <img src="questionsreply.jpg" width="1100" height="500">
                </ol>
                <br>
                <ol>
                    <h2>How to make your own Schedule</h2>
                    <li>Click on <a href="schedule.php">schedule</a> button</li>
                    <img src="schedulebutton.jpg" width="1100" height="500">
                    <li>Choose your day and subject</li>
                    <img src="scheduleform.jpg" width="1100" height="500">
                    <li>Click save to save your schedule</li>
                    <img src="schedulesave.jpg" width="1100" height="500">
                    <li>Repeat this to complete your schedule</li>
                </ol>
                <br>
                <ol>
                    <h2>How edit or delete your own Schedule</h2>
                    <h3>Edit</h3>
                    <li>To edit/update your schedule, click on edit button</li>
                    <img src="scheduleedit.jpg" width="1100" height="500">
                    <li>Edit your schedule and click update to confirm your changes</li>
                    <img src="scheduleupdate.jpg" width="1100" height="500">
                    <br>
                    <h3>Delete</h3>
                    <li>To delete your schedule, you can simply press on the delete button and it will delete the entire row of the schedule.</li>
                    <img src="scheduledelete.jpg" width="1100" height="500">
                </ol>
            </div>
        </div>
    </body>
    <style>
*
{
    margin: 0;
    font-family: sans-serif;
}
.banner
{
    width: auto;
    height: auto;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(Study.jpg);
    background-size: cover;
    background-position: center;
    font-size: 19px;
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
.container
{
    color: cyan;
    padding: 20px;
    line-height: 1.5;
}
.container h1
{
    padding: 10px 10px 50px 800px;
    font-size: 50px;
    color: antiquewhite;
}
.container a
{
    color: antiquewhite;        
}
.container ol
{
    line-height: 3; 
    font-size: 24px;
}

.container h2
{
    text-align: center;
}
    </style>
</html>
