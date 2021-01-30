<?php
include('db.php');
// $sql = "INSERT INTO datban (fullname, email, phone,date_,time_,people,content)
// VALUES ('fullname','fdsfdsf','fdsfds','fdsfds','fehfwfewfew','fwefehwfew','fewfuegwfiuew')";
// if (mysqli_query($conn, $sql)) {
//     echo "oke";
// } else {
//     echo "fail";
// }
if(isset($_POST["datban"])==true){
$fullname = $_POST["your_name"];
$email = $_POST["email"];
$phonee = $_POST["phone"];
$date = $_POST["date"];
$timee = $_POST["time"];
$people = $_POST["seats"];
$messs = $_POST["message"];
$sql = "INSERT INTO datban (fullname, email, phone,date_,time_,people,content)
VALUES ('".$fullname."','".$email."','".$phonee."','".$date."','".$timee."','".$people."','".$messs."')";
if (mysqli_query($conn, $sql)) {
    echo "đc";
} else {
    echo "fail";
}
}
mysqli_close($conn);
?>