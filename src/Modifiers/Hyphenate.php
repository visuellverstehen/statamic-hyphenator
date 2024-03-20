<?php

namespace Visuellverstehen\Hyphenator\Modifiers;

use Statamic\Facades\Site;
use Statamic\Modifiers\Modifier;
use Vanderlee\Syllable\Syllable;

class Hyphenate extends Modifier
{
    /**
     * Modify a value.
     *
     * @param  mixed  $value    The value to be modified
     * @param  array  $params   Any parameters used in the modifier
     * @param  array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        Syllable::setCacheDir(storage_path('framework/cache'));
        Syllable::setLanguageDir(__DIR__ . '/../../languages');
        $syllable = new Syllable(Site::current()->handle());
        $syllable->setMinWordLength(7);

        return $syllable->hyphenateHtmlText($value);
    }
}
