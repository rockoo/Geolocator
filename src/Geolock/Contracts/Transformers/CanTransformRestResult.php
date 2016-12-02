<?php namespace Fantasyrock\Geolock\Contracts\Transformers;

interface CanTransformRestResult
{

	/**
	 * Transforms the result to unified object
	 *
	 * @param $data
	 * @return mixed
	 */
	public function transform($data);
}