<?php
$stock_symbol = $_POST['stock_symbol'];
$quantity = $_POST['quantity'];
$transaction = date("Y-m-d H:i:s") . " - " . ($quantity > 0 ? "Bought" : "Sold") . " " . abs($quantity) . " shares of " . $stock_symbol . "\n";
file_put_contents("transactions.txt", $transaction, FILE_APPEND);
header("Location: buystock.php");
?>
