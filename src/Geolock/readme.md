# GEOLOCK #

Simple library to geolocate user by IP address.

## USAGE ##

```php
use Fantasyrock\Geocoder\Adapters\Rest\Freegeoip as Adapter;
use Fantasyrock\Geocoder\Transformers\Freegeoip as Transformer;
use Fantasyrock\Geocoder\Locator;

$locator = new Locator(new Adapter, new Transformer);
$location = $locator->find($_SERVER['REMOTE_ADDR']);

var_dump($location)

// Result
[
    'country' => 'Slovenia',
    'iso2'    => 'SI',
    'city'    => 'Ljubljana'
]
```