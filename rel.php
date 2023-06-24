         
                    
    <?php
        // Function to make API request and fetch data
        function fetchStockData($symbol, $apiKey) {
            $url = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=$symbol.BSE&apikey=$apiKey";
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            if(isset($data['Global Quote'])) {
                return $data['Global Quote'];
            } else {
                return null;
            }
        }

        // API key for Alpha Vantage
        $apiKey = "PWFWZK86PTRWRT0Y";

        // Array of stock symbols
        $symbols = array("RELIANCE");

        // Fetch data for each stock symbol
        foreach($symbols as $symbol) {
            $stockData = fetchStockData($symbol, $apiKey);

            if($stockData) {
                $symbol = $stockData['01. symbol'];
                $price = $stockData['05. price'];
                $change = $stockData['09. change'];
                $percentChange = $stockData['10. change percent'];

            
            
                       
            } else {
                echo "Failed to fetch data for symbol: $symbol";
            }
        }
    ?>


<!-- // echo "<h3>$symbol</h3>";
                // echo "<table>";
                // echo "<tr><th>Price</th><td>$price</td></tr>";
                // echo "<tr><th>Change</th><td>$change</td></tr>";
                // echo "<tr><th>Percent Change</th><td>$percentChange</td></tr>";
                // echo "</table>"; -->
