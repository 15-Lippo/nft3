<?php

namespace App\Models\Api;

use App\Models\Api\Blockchain;

class BlockchainRequest extends Blockchain
{

    public function __construct()
    {
        $this->base = "https://api.blockchain.com/v3/exchange";
    }

    public function getPrices()
    {
        $this->endpoint = "/tickers";

        return $this->request();
    }

    public function symbols(){
        $this->endpoint = "/symbols";

        return $this->request();
    }

    public function getNFTs(): object
    {
        $this->base = "https://api.coinranking.com";
        $this->endpoint = "/v2/nfts";

        return $this->request();   
    }

    public function currency()
    {
        $this->base = "https://api.coinranking.com";
        $this->endpoint = "/v2/coins";

        return $this->request();
    }

    public function exchangeRates(string $currency, string $value)
    {
        $this->base = "https://blockchain.info";
        $this->endpoint = "/tobtc?currency=$currency&value=$value";

        return $this->request();
    }

    public function request()
    {
        $ch = curl_init($this->base . $this->endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,  true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["accept: application/json","X-API-Token: 39421209-b0fc-47e5-acf9-e7e553d8b152"]);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);

        return $response;
    }

}

?>