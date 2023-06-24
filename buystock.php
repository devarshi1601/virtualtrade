<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="index.css">
    <title>Buy Stock</title>
</head>

<body style="background-color: rgb(14, 14, 14);">
    <div class="nav" id="nav" style="top:0px;">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <a class="nav-title" href="#" style="text-decoration: none;">
                <img src="logo.png" alt="" id="logo">
            </a>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="nav-links">
            <a href="index.html" class="active">Home</a>
            <a href="">Exchange</a>
            
            
            <a href="#">Finance</a>
            <a href="">Trade</a>
            <a href="buystock.php">Buy Stock</a>
            <a href="sellstock.php">Sell Stock</a>
            <a href="transactions.php">Transaction History</a>
            <a href="">Report</a>
            <a href="">Account</a>
           
        </div>
    </div>
    <div class="mai container" style="max-width: 450px;">
        <h4>BUY STOCK</h4>
        <div class="container">
            <form action="process.php" method="post">
                
                <div class="row">
                    <div class="col-12">
                    <label for="stock_symbol">Stock Symbol:</label>
                     <input type="text" id="stock_symbol" name="stock_symbol" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <label for="quantity">Quantity:</label>
                     <input type="number" id="quantity" name="quantity" required><br>
                    </div>
                </div>
                
                
                <input type="submit" name="login" value="Buy" class="btn btn-success mb-3">
            </form>
        </div>
    </div>
    <section class="footer" id="contact">
        <div class="box-container">
            
            <div class="box">
                <img src="logo.png" alt="">
                <h5>Trade with freedom</h5>
                
            </div>

            <div class="box">
                <h5>UsefulLinks</h5>
                <a href="#demo"> News</a>
                <a href="#demo"> Login</a>
                <a href="#demo"> Register</a>
               

            </div>

            <div class="box">
                <h5>Pages</h5>
             
                <a href="#demo"> Term</a>
                <a href="#demo"> FAQ</a>
                <a href="#demo"> Contact</a>
               
                </div>
            </div>
            <h1 class="credit">2023 Copyright Practise2trade</h1>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>

</html>