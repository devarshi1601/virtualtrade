<?php
     // Function to make API request and fetch data
     

    // API key for Alpha Vantage
    $apiKey = "PWFWZK86PTRWRT0Y";

       

        // Array of stock symbols
        $symbol = array("HDFCBANK");

        // Fetch data for each stock symbol
        foreach($symbols as $symbol) {
            $stockData = fetchStockData($symbol, $apiKey);

            if($stockData) {
                $symbol = $stockData['01. symbol'];
                $pricehdfc = $stockData['05. price'];
                $change = $stockData['09. change'];
                $percentChangeh = $stockData['10. change percent'];

            
            
                       
            } else {
                echo "Failed to fetch data for symbol: $symbol";
            }
        }
    ?>
