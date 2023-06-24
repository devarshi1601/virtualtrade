             
    <?php
     // Function to make API request and fetch data
     

    // API key for Alpha Vantage
    $apiKey = "PWFWZK86PTRWRT0Y";

       

        // Array of stock symbols
        $symbols = array("TCS");

        // Fetch data for each stock symbol
        foreach($symbols as $symbol) {
            $stockData = fetchStockData($symbol, $apiKey);

            if($stockData) {
                $tcs = $stockData['01. symbol'];
                $pricetcs = $stockData['05. price'];
                $change = $stockData['09. change'];
                $percentChanget = $stockData['10. change percent'];

            
            
                       
            } else {
                echo "Failed to fetch data for symbol: $symbol";
            }
        }
    ?>
