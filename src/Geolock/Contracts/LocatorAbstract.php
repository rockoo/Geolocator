<?php namespace Fantasyrock\Geolock\Contracts;

use Fantasyrock\Geolock\Contracts\Adapters\Rest\CanMakeRequestsToRestApi;
use Fantasyrock\Geolock\Contracts\Transformers\CanTransformRestResult;

abstract class LocatorAbstract
{

	public abstract function __construct (CanMakeRequestsToRestApi $api, CanTransformRestResult $transformer);
}