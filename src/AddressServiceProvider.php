<?php

namespace Freecod\LaravelAdminExt\Address;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class AddressServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Extension $extension)
    {
        if (! Extension::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'address');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/address')],
                'address'
            );
        }
	
	    Admin::booting(function () {
		    Form::extend('address', Address::class);
	    });
    }
}