<?php namespace Fantasyrock\Geolock\Transformers;

use Fantasyrock\Geolock\Contracts\Transformers\CanTransformRestResult;

class FreeGeoIp implements CanTransformRestResult
{

	/**
	 * @inheritDoc
	 */
	public function transform ($data)
	{
		return collect([
			'country' => $data->country_name,
			'iso2'    => $data->country_code,
			'city'    => $data->city
		]);
	}
}