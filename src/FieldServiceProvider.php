<?php

/*
 * This file is part of Mailable.
 *
 * (c) Oliver Green <oliver@mailable.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mailable\Support\Field\Types\Length;

use Illuminate\Support\ServiceProvider;
use Mailable\Support\Field\Types\Registry;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Register the factory in the application container.
     *
     * @return void
     */
    public function register()
    {
        $this->app[Registry::class]->register([
            'length' => 'Mailable\Support\Field\Types\Length',
        ]);
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'length-field-type');
    }
}
