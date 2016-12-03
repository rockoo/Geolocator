<?php namespace Fantasyrock\Geolock\Adapters\Rest;

use Fantasyrock\Geolock\Contracts\Adapters\Rest\CanMakeRequestsToRestApi;
use Fantasyrock\Geolock\Contracts\Adapters\Rest\FreeGeoIpAbstract;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class FreeGeoIp extends FreeGeoIpAbstract implements CanMakeRequestsToRestApi
{

	/**
	 * @inheritDoc
	 */
	public function target ($ip)
	{

		try {

			$result = (new Client)->get(parent::URI . '/' . $this->format . '/' . $ip);
			return json_decode($result->getBody());
		} catch (GuzzleException $e) {

			echo $e->getMessage();
		}
	}
}