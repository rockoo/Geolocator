<?php

use Fantasyrock\Geolock\Adapters\Rest\FreeGeoIp as Adapter;
use Fantasyrock\Geolock\Locator;
use Fantasyrock\Geolock\Transformers\FreeGeoIp as Transformer;

class GeolockTest extends TestCase
{
	/** @test */
	public function it_can_initialize_client ()
	{

		$repo = new Adapter;
		$transformer = new Transformer;
		$client = new Locator($repo, $transformer);

		$this->assertInstanceOf(Fantasyrock\Geolock\Locator::class, $client);
	}

	/** @test */
	public function can_call_api ()
	{

		$repo = new Adapter;
		$transformer = new Transformer;
		$client = new Locator($repo, $transformer);

		$location = $client->find('193.77.225.190');

		$this->assertArrayHasKey('country', $location);
		$this->assertArrayHasKey('iso2', $location);
		$this->assertArrayHasKey('city', $location);
	}
}