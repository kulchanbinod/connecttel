<?php 

namespace App\ConnectTel\Interfaces;

interface ApiInterface {

	public function getCompany($query);

	public function getQuote($query);

	public function getUrl($path, $query);
}