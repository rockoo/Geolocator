<?php namespace Fantasyrock\Geolock\Contracts\Adapters\Rest;


interface CanMakeRequestsToRestApi
{

	/**
	 * @param $ip
	 * @return mixed
	 */
	public function target($ip);
}