<?php
include('db.php');

header("Content-Type:application/json");

$db_helper = new DbHelper();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $mobile_num = $_POST['mobile_num'];

    $resuilt = $db_helper->insertNewStudent($id, $name, $age, $email, $mobile_num);


}


$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$mobile_num = $_POST['mobile_num'];

$sql = "INSERT INTO student (id,name,age,email,mobile_num)VALUES ('$id','$name','$age','$email','$mobile_num')";

$inserted = true;
if ($inserted) {
    $response = ['message' => 'add successfuly student'];
} else {
    $response = ['message' => 'failed to create student'];
}

echo json_encode($response)
?>