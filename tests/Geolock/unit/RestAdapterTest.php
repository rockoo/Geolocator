<?php

use Fantasyrock\Geolock\Contracts\Adapters\Rest\CanMakeRequestsToRestApi;
use Fantasyrock\Geolock\Contracts\Transformers\CanTransformRestResult;
use Fantasyrock\Geolock\Locator;
use Mockery as m;

/** @group unit */
class RestAdapterTest extends TestCase
{
	public function tearDown ()
	{
		m::close();
	}

	/** @test */
	public function test_it_can_call_api_client ()
	{

		$api = m::mock(CanMakeRequestsToRestApi::class);
		$transformer = m::mock(CanTransformRestResult::class);
		$locator = new Locator($api, $transformer);

		$apiResult = '{"country": "Slovenia", "alpha2": "SI", "city": "Ljubljana"}';
		$api->shouldReceive('target')->once()->andReturn($apiResult);

		$data = json_decode($apiResult);

		$transformer->shouldReceive('transform')->once()->andReturn([
			'country' => $data->country,
			'iso2'    => $data->alpha2,
			'city'    => $data->city
		]);

		$result = $locator->find('193.77.225.190');

		$this->assertArrayHasKey('country', $result);
		$this->assertArrayHasKey('iso2', $result);
		$this->assertArrayHasKey('city', $result);
	}
}