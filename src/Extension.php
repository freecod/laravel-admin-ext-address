<?php

namespace Freecod\LaravelAdminExt\Address;

use Encore\Admin\Extension as BaseExtension;

class Extension extends BaseExtension
{
    public $name = 'address';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';
}