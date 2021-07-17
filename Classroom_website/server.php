<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'classroom');

	// initialize variables
	$day = "";
	$sub1 = "";
	$sub2 = "";
	$sub3 = "";
	$sub4 = "";
	$sub5 = "";
	$sub6 = "";
	$sub7 = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$day = $_POST['day'];
		$sub1 = $_POST['sub1'];
		$sub2 = $_POST['sub2'];
		$sub3 = $_POST['sub3'];
		$sub4 = $_POST['sub4'];
		$sub5 = $_POST['sub5'];
		$sub6 = $_POST['sub6'];
		$sub7 = $_POST['sub7'];

		mysqli_query($db, "INSERT INTO info (day, sub1, sub2, sub3, sub4, sub5, sub6, sub7) VALUES ('$day', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$sub7')"); 
		$_SESSION['message'] = "Schedule saved"; 
		header('location: schedule.php');
	}

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
	$day = $_POST['day'];
	$sub1 = $_POST['sub1'];
	$sub2 = $_POST['sub2'];
	$sub3 = $_POST['sub3'];
	$sub4 = $_POST['sub4'];
	$sub5 = $_POST['sub5'];
	$sub6 = $_POST['sub6'];
	$sub7 = $_POST['sub7'];
    
        mysqli_query($db, "UPDATE info SET day='$day', sub1='$sub1', sub2='$sub2', sub3='$sub3', sub4='$sub4', sub5='$sub5', sub6='$sub6', sub7='$sub7' WHERE id=$id");
        $_SESSION['message'] = "Schedule updated!"; 
        header('location: schedule.php');
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM info WHERE id=$id");
        $_SESSION['message'] = "Schedule row deleted!"; 
        header('location: schedule.php');
    }