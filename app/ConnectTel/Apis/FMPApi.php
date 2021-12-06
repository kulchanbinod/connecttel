<?php 

namespace App\ConnectTel\Apis;

use App\ConnectTel\Interfaces\ApiInterface;

class FMPApi extends BaseApi
{

	public function getCompany($query)
	{
		$result = $this->query('profile', $query);
		if (count($result) > 0) {
			return $this->companyDataMap($result[0]);
		}
		return [];
	}

	public function getQuote($query)
	{
		$result = $this->query('quote', $query);
		if (count($result) > 0) {
			return $this->quoteDataMap($result[0]);
		}
		return [];
	}
}
