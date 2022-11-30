<?php  include('server.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
			$n = mysqli_fetch_array($record);
			$day = $n['day'];
			$sub1 = $n['sub1'];
			$sub2 = $n['sub2'];
			$sub3 = $n['sub3'];
			$sub4 = $n['sub4'];
			$sub5 = $n['sub5'];
			$sub6 = $n['sub6'];
			$sub7 = $n['sub7'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
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
                    <li><a href="schedule.php">Learning Video</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </div>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<table>
	<thead>
		<tr>
			<td>Day</td>
			<td>8:00 AM</td>
			<td>9:00 AM</td>
			<td>10:00 AM</td>
			<td>11:00 AM</td>
			<td>12:00 PM</td>
			<td>1:00 PM</td>
			<td>2:00 PM</td>
			<td>Action</td>
		</tr>
	</thead>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
	
		<tr>
			<td><?php echo $row['day']; ?></td>
			<td><?php echo $row['sub1']; ?></td>
			<td><?php echo $row['sub2']; ?></td>
			<td><?php echo $row['sub3']; ?></td>
			<td><?php echo $row['sub4']; ?></td>
			<td><?php echo $row['sub5']; ?></td>
			<td><?php echo $row['sub6']; ?></td>
			<td><?php echo $row['sub7']; ?></td>
			<td>
				<a href="schedule.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	<form method="post" action="server.php" >
		<div class="input-group">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Day</label>
			<select name="day" value="<?php echo $day; ?>">
                 		<option value="Monday">Monday</option>
                		<option value="Tuesday">Tuesday</option>
                		<option value="Wednesday">Wednesday</option>
                		<option value="Thursday">Thursday</option>
                		<option value="Friday">Friday</option>
                	</select>
		</div>
		<div class="input-group">
			<label>8:00 AM</label>
			<select name="sub1" value="<?php echo $sub1; ?>">
                                <option value=" "> </option>
                                <option value="Science">Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Bahasa Melayu">Bahasa Melayu</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="English">English</option>
                                <option value="Pendidikan Islam">Pendidikan Islam</option>
                        </select>
		</div>
		<div class="input-group">
			<label>9:00 AM</label>
			<select name="sub2" value="<?php echo $sub2; ?>">
                                <option value=" "> </option>
                                <option value="Science">Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Bahasa Melayu">Bahasa Melayu</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="English">English</option>
                                <option value="Pendidikan Islam">Pendidikan Islam</option>
                        </select>
		</div>
		<div class="input-group">
			<label>10:00 AM</label>
			<select name="sub3" value="<?php echo $sub3; ?>">
                                <option value=" "> </option>
                                <option value="Science">Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Bahasa Melayu">Bahasa Melayu</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="English">English</option>
                                <option value="Pendidikan Islam">Pendidikan Islam</option>
                        </select>
		</div>
		<div class="input-group">
			<label>11:00 AM</label>
			<select name="sub4" value="<?php echo $sub4; ?>">
                                <option value=" "> </option>
                                <option value="Science">Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Bahasa Melayu">Bahasa Melayu</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="English">English</option>
                                <option value="Pendidikan Islam">Pendidikan Islam</option>
                        </select>
		</div>
		<div class="input-group">
			<label>12:00 PM</label>
			<select name="sub5" value="<?php echo $sub5; ?>">
                                <option value=" "> </option>
                                <option value="Science">Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Bahasa Melayu">Bahasa Melayu</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="English">English</option>
                                <option value="Pendidikan Islam">Pendidikan Islam</option>
                        </select>
		</div>
		<div class="input-group">
			<label>1:00 PM</label>
			<select name="sub6" value="<?php echo $sub6; ?>">
                                <option value=" "> </option>
                                <option value="Science">Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Bahasa Melayu">Bahasa Melayu</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="English">English</option>
                                <option value="Pendidikan Islam">Pendidikan Islam</option>
                        </select>
		</div>
		<div class="input-group">
			<label>2:00 PM</label>
			<select name="sub7" value="<?php echo $sub7; ?>">
                                <option value=" "> </option>
                                <option value="Science">Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Bahasa Melayu">Bahasa Melayu</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="English">English</option>
                                <option value="Pendidikan Islam">Pendidikan Islam</option>
                        </select>
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</form>
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
body {
    font-size: 19px;
}
table{
    width: 85%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
    color: antiquewhite;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #000000;
}

form {
    width: 68%;
    margin: 50px auto;
    text-align: center;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
    color:antiquewhite;
}

.input-group {
    margin: 10px 20px 10px 0px;
    display: inline-block;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 5px;
    font-size: 17px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
    </style>
</html>