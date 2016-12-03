# GEOLOCK #

Simple library to geolocate user by IP address.

## USAGE ##

```php
use Fantasyrock\Geocoder\Adapters\Rest\Freegeoip as Adapter;
use Fantasyrock\Geocoder\Transformers\Freegeoip as Transformer;
use Fantasyrock\Geocoder\Locator;

$locator = new Locator(new Adapter, new Transformer);
$location = $locator->find($_SERVER['REMOTE_ADDR']);


// Result as Illuminate\Support\Collection
[
    'country' => 'United States',
    'iso2'    => 'US',
    'city'    => 'Miami'
]

$location->get('country'); // Full country name
$location->get('iso2'); // Country code ISO2
$location->get('city'); // Full city name
```