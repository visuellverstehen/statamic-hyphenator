<?php

namespace Visuellverstehen\Hyphenator;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $modifiers = [
        \Visuellverstehen\Hyphenator\Modifiers\Hyphenate::class,
    ];

    public function bootAddon()
    {
        //
    }
}
