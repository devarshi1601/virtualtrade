<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Transaction</title>
  <link rel="stylesheet" href="transaction.css">
  
  </head>
  <body>  
<?php
$transactions = file_get_contents("transactions.txt");
?>
<!-- <h1 style="text-align: center;">Transaction History</h1> -->
<table cellspacing='7'>
<tr style="font-size:20px;">
    <th>Transaction History</th>
</tr>
<tr>
    <td style="font-size:20px;">
<?php
echo "<pre>" . $transactions . "</pre>";
?>
</td>
</tr>
</table>
</body>
</html>