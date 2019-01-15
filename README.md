laravel-admin extension
======
###Address field for laravel-admin

Autocomplete address field using dadata.ru service

###Example

> $form->address('address', 'Delivery address', 'dadata.ru_api_key', 'lat_field', 'lon_field')->default(['address', 'lat', 'lon']);

lat_field, lon_field - optional model property to set lat/lon for address
