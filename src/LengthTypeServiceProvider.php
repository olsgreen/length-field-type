<?php

/*
 * This file is part of Mailable.
 *
 * (c) Oliver Green <oliver@mailable.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mailable\Support\Lists\Field\Types\Length;

use Illuminate\Support\ServiceProvider;
use Mailable\Support\Lists\Field\Types\TypeRegistry;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the factory in the application container.
     *
     * @return void
     */
    public function register()
    {
        $this->app[TypeRegistry::class]->register([
            'length' => 'Mailable\Support\Lists\Field\Types\Length',
        ]);
    }

    public function boot()
    {
        //
    }

    public function provides()
    {
        return [LengthTypeDefinition::class, LengthTypeInstance::class];
    }
}