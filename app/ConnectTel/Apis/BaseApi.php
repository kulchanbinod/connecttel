<?php 

namespace App\ConnectTel\Apis;

use App\ConnectTel\Interfaces\ApiInterface;
use Illuminate\Support\Facades\Http;

abstract class BaseApi implements ApiInterface
{
	protected $config;

	public function __construct($apiName, $config)
	{
		if (!array_key_exists('url', $config)) {
			throw new \Exception('API URL not provied for ' . $apiName . ' API.');
		}
		if (!array_key_exists('key', $config)) {
			throw new \Exception('API KEY not provied for ' . $apiName . ' API.');
		}
		$this->config = $config;
	}

	public function query($path, $query)
	{
		$url = $this->getUrl($path, $query);
		$response = Http::get($url);
		return $response->json();
	}

	public function getUrl($path, $query)
	{
		$query = strtoupper(urlencode($query));

		return $this->config['url'] . $path . '/' . $query . '?apikey=' . $this->config['key'];  
	}

	public function companyDataMap($result)
	{
		return [
			"symbol" => $result['symbol'] ?? null,
			"price" => $result['price'] ?? null,
			"beta" => $result['beta'] ?? null,
			"volAvg" => $result['volAvg'] ?? null,
			"mktCap" => $result['mktCap'] ?? null,
			"lastDiv" => $result['lastDiv'] ?? null,
			"range" => $result['range'] ?? null,
			"changes" => $result['changes'] ?? null,
			"companyName" => $result['companyName'] ?? null,
			"currency" => $result['currency'] ?? null,
			"cik" => $result['cik'] ?? null,
			"isin" => $result['isin'] ?? null,
			"cusip" => $result['cusip'] ?? null,
			"exchange" => $result['exchange'] ?? null,
			"exchangeShortName" => $result['exchangeShortName'] ?? null,
			"industry" => $result['industry'] ?? null,
			"website" => $result['website'] ?? null,
			"description" => $result['description'] ?? null,
			"ceo" => $result['ceo'] ?? null,
			"sector" => $result['sector'] ?? null,
			"country" => $result['country'] ?? null,
			"fullTimeEmployees" => $result['fullTimeEmployees'] ?? null,
			"phone" => $result['phone'] ?? null,
			"address" => $result['address'] ?? null,
			"city" => $result['city'] ?? null,
			"state" => $result['state'] ?? null,
			"zip" => $result['zip'] ?? null,
			"dcfDiff" => $result['dcfDiff'] ?? null,
			"dcf" => $result['dcf'] ?? null,
			"image" => $result['image'] ?? null,
			"ipoDate" => $result['ipoDate'] ?? null,
			"defaultImage" => $result['defaultImage'] ?? null,
			"isEtf" => $result['isEtf'] ?? null,
			"isActivelyTrading" => $result['isActivelyTrading'] ?? null,
			"isAdr" => $result['isAdr'] ?? null,
			"isFund" => $result['isFund'] ?? null,
		];
	}

	public function quoteDataMap($result)
	{
		return [
			"symbol" => $result['symbol'] ?? null,
			"name" => $result['name'] ?? null,
			"price" => $result['price'] ?? null,
			"changesPercentage" => $result['changesPercentage'] ?? null,
			"change" => $result['change'] ?? null,
			"dayLow" => $result['dayLow'] ?? null,
			"dayHigh" => $result['dayHigh'] ?? null,
			"yearHigh" => $result['yearHigh'] ?? null,
			"yearLow" => $result['yearLow'] ?? null,
			"marketCap" => $result['marketCap'] ?? null,
			"priceAvg50" => $result['priceAvg50'] ?? null,
			"priceAvg200" => $result['priceAvg200'] ?? null,
			"volume" => $result['volume'] ?? null,
			"avgVolume" => $result['avgVolume'] ?? null,
			"exchange" => $result['exchange'] ?? null,
			"open" => $result['open'] ?? null,
			"previousClose" => $result['previousClose'] ?? null,
			"eps" => $result['eps'] ?? null,
			"pe" => $result['pe'] ?? null,
			"earningsAnnouncement" => $result['earningsAnnouncement'] ?? null,
			"sharesOutstanding" => $result['sharesOutstanding'] ?? null,
			"timestamp" => $result['timestamp'] ?? null,
		];
	}

}