laravel-admin extension
======
###Address field for laravel-admin

Autocomplete address field using dadata.ru service

###Install

In composer.json 

"repositories": [
	{
		"type": "vcs",
		"url": "https://github.com/freecod/laravel-admin-ext-address"
	}
]

> composer require freecod/laravel-admin-ext-address

> php artisan vendor:publish --provider=Freecod\\LaravelAdminExt\\Address\\AddressServiceProvider


###Example

> $form->address('address', 'Delivery address', 'dadata.ru_api_key', 'lat_field', 'lon_field')->default(['address', 'lat', 'lon']);

lat_field, lon_field - optional model property to set lat/lon for address
