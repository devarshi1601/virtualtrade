<!DOCTYPE html>
<html>
<head>
    <title>Indian Stock Market</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Indian Stock Market</h1>
    
    <form action="process.php" method="post">
        <h2>Buy Shares</h2>
        <label for="stock_symbol">Stock Symbol:</label>
        <input type="text" id="stock_symbol" name="stock_symbol" required><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br>
        <input type="submit" value="Buy">
    </form>
    
    <form action="process.php" method="post">
        <h2>Sell Shares</h2>
        <label for="stock_symbol">Stock Symbol:</label>
        <input type="text" id="stock_symbol" name="stock_symbol" required><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br>
        <input type="submit" value="Sell">
    </form>
    
    <h2>Transaction History</h2>
    <?php include 'transactions.php'; ?>
</body>
</html>
