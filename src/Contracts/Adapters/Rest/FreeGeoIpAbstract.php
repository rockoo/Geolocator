<?php
/**
 * Created by PhpStorm.
 * User: frm
 * Date: 2/12/16
 * Time: 13:30
 */

namespace Fantasyrock\Geolock\Contracts\Adapters\Rest;


abstract class FreeGeoIpAbstract
{
	const URI = 'http://freegeoip.net';

	protected $format = 'json';
}