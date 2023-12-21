<?php
$connect = mysqli_connect("localhost", "root", "", "rpl");
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
// $sql = "INSERT INTO `data` (`first_name`, `middle_name`, `last_name`, `gender`, 'date_of_birth') VALUES ( '$first_name', '$middle_name', '$last_name', '$gender', '$date_of_birth')";
$sql = "INSERT INTO `data` (`first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`) VALUES ('$first_name', '$middle_name', '$last_name', '$gender', '$date_of_birth')";

// insert in database 
$rs = mysqli_query($connect, $sql);

if ($rs) {
    echo "Contact Records Inserted";
    // header('Location: form_wizards.html'); 
    header('refresh:5;url=form_wizards.html'); 
    exit;
} else {
    echo "Error: " . mysqli_error($connect);
}

?>
