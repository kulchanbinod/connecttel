<?php

namespace App\ConnectTel;

use App\Models\Company;
use App\Models\Quote;
use Carbon\Carbon;

class Client
{
	protected $api;

	public function __construct()
	{
		$default = config('connecttel.default');
		$apis = config('connecttel.apis');
		if (!isset($apis[$default])) {
			throw new \Exception('Cannot find config for ' . $default . ' API.');
		}

		$config = $apis[$default];
		$apiClass = 'App\\ConnectTel\\Apis\\' . strtoupper($default) . 'Api';
		if (!class_exists($apiClass)) {
			throw new \Exception('[' . $apiClass . '] class not found.');
		}

		$this->api = new $apiClass($default, $config);
	}

	public function getCompany($symbol)
	{
		if(empty($symbol)) {
			return null;
		}

		$company = $this->getCompanyIfExists($symbol);

		if ($company === false) {
			$company = $this->populateCompany($symbol);
		}

		return $company;
	}

	public function getQuote($symbol)
	{
		if(empty($symbol)) {
			return null;
		}

		$quote = $this->getQuoteIfExists($symbol);

		if ($quote === false) {
			$quote = $this->populateQute($symbol);
		}

		return $quote;
	}

	protected function getCompanyIfExists($symbol)
	{
		$cacheLifeTime = env('FINANCIAL_CACHE_LIFETIME', 3600);
		$cacheCheck = Carbon::now(config('app.timezone'))->subSeconds($cacheLifeTime);

		$company = Company::query()
			->where('symbol', 'like', $symbol)
			->where('updated_at', '>=', $cacheCheck)
			->get();

		if ($company->isEmpty()) {
			return false;
		}

		return $company->first();
	}

	protected function populateCompany($symbol)
	{
		$result = $this->api->getCompany($symbol);
		if (empty($result)) {
			return false;
		}

		return Company::updateOrCreate(['symbol' => $symbol], $result);
	}

	protected function getQuoteIfExists($symbol)
	{
		$cacheLifeTime = env('FINANCIAL_CACHE_LIFETIME', 3600);
		$cacheCheck = Carbon::now(config('app.timezone'))->subSeconds($cacheLifeTime);

		$quote = Quote::query()
			->where('symbol', 'like', $symbol)
			->where('updated_at', '>=', $cacheCheck)
			->get();

		if ($quote->isEmpty()) {
			return false;
		}

		return $quote->first();
	}

	protected function populateQute($symbol)
	{
		$result = $this->api->getQuote($symbol);
		if (empty($result)) {
			return false;
		}

		return Quote::updateOrCreate(['symbol' => $symbol], $result);
	}

}