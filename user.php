<?php

include 'database/config.php';

$sql = "SELECT * FROM user";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer list - The Spark Foundaion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="css/user.css">
  <link rel="icon" href="image/bankicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<center>
<?php 
include 'include/header.php';?>
<div class="container" style="margin-top: 55px;">
  <h2 style="color: red">The Spark Foundation</h2>
  <h3>Customer List</h2>
  <div class="table-responsive-sm">
    <table class="table_b">
        <tr>
          <th>Id</th>
          <th>Accound No</th>
          <th>Name</th>
          <th>Amount</th>
          <th>Action</th>
        </tr>

        <?php
          while($result = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $result['id']?></td>
            <td><?php echo $result['account_no']?></td>
            <td><?php echo $result['name']?></td>
            <td><?php echo $result['amount']?></td>
            <td><a class="btn btn-info" href="transfer.php?id=<?php echo $result['id']?>">Select</a></td>
        </tr>
        <?php }?>
    </table>
  </div>

  
</div>
</center>
</body>
</html>

<?php 
include 'include/footer.php'
?>