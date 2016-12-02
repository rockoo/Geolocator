<?php namespace Fantasyrock\Geolock;

use Fantasyrock\Geolock\Contracts\LocatorAbstract;
use Fantasyrock\Geolock\Contracts\Adapters\Rest\CanMakeRequestsToRestApi;
use Fantasyrock\Geolock\Contracts\Transformers\CanTransformRestResult;

class Locator extends LocatorAbstract
{
	private $_api;
	private $_transformer;

	public function __construct (CanMakeRequestsToRestApi $api, CanTransformRestResult $transformer) {

		$this->_api = $api;
		$this->_transformer = $transformer;
	}

	public function find($ip) {

		return $this->_transformer->transform($this->_api->target($ip));
	}
}