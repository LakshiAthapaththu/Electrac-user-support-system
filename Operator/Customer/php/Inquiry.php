<?php
include "../../Common/Connection.php";
$con = new connec();
$conn = $con->makeConnection();
session_start();
$_SESSION['val']=$_POST['from'];
$where = $_SESSION['val'];
echo $where;
if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phoneNumber']) and isset($_POST['address']) and isset($_POST['message']) and isset($_POST['inquiryName'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $inquiryName = $_POST['inquiryName'];



}
if ($where == 'Account') {
    $sql ="SELECT customer_id FROM customer where user_name= '$username' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id = $row['customer_id'];

    $query = "INSERT INTO inquiries(name,email,telephone_no,address,Inquiry,message,customer_id) VALUES ('$username','$email','$phoneNumber','$address','$inquiryName','$message','$id')";

    $conn->query($query);
    header( "Location:../../login/php/Customer View_PHP.php");


}
else if($where == 'home'){
    $query = "INSERT INTO Inquiries(name,email,telephone_no,address,Inquiry,message) VALUES ('$username','$email','$phoneNumber','$address','$inquiryName','$message')";
    $conn->query($query);
    header("Location:../../login/php/home.php");
}
?>
