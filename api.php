<?php

$con = mysqli_connect("localhost", "root", "", "testapi");

$student_name = $_POST['student_name'];
$gender = $_POST['gender'];
$residence = $_POST['residence'];

$query = "INSERT INTO students (student_id, student_name,gender, residence) VALUES (NULL, '$student_name', '$gender', '$residence')";

if (mysqli_query($con, $query)){

echo "Success";


}else{

	echo "Fail";
}

mysqli_close($con);
?>