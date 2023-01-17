<?php include '../connection.php';
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $mail = $_POST['mail'];
        $pNumber = $_POST['pNumber'];
        $plotSize = $_POST['plotSize'];
        $addres = $_POST['addres'];
        $pincode = $_POST['pincode'];
    }
$sql = "INSERT INTO estimateTable (firstName,lastName,mail,pNumber,plotSize,addres,pincode) VALUES ('$firstName','$lastName','$mail','$pNumber','$plotSize','$addres','$pincode')";
$result = $con->query($sql);
if($result==true){
    echo "New Record Found";
}
else{
    echo "Error" .$sql."</br>".$con->error;
}
$con->close();
?>
