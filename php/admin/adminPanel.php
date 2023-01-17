<?php
    include '../connection.php';
    $sql = "SELECT *FROM estimateTable";
    $result =$con->query($sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5G Admin</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../style/component.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container-fluid">
        <h2>Database</h2>
        <table class="table table-info table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Mail-ID</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Plot Size</th>
                    <th scope="col">Address</th>
                    <th scope="col">PinCode</th>
                </tr>
                
            </thead>
            <tbody>
                <?php
                    if($result->num_rows>0){
                        while($row =$result->fetch_assoc()){

                    
                ?>
                <tr>
                    <td scope="col"><?php echo $row['ID'];?></td>
                    <td scope="col"><?php echo $row['firstName'];?></td>
                    <td scope="col"><?php echo $row['lastName'];?></td>
                    <td scope="col"><a href="mailto:<?php echo $row['mail'];?>"><?php echo $row['mail'];?></a></td>
                    <td scope="col"><a href="tel:<?php echo $row['pNumber'];?>"><?php echo $row['pNumber'];?></a></td>
                    <td scope="col"><?php echo $row['plotSize'];?></td>
                    <td scope="col"><?php echo $row['addres'];?></td>
                    <td scope="col"><?php echo $row['pincode'];?></td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>