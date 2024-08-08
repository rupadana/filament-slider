<?php

namespace Rupadana\FilamentSlider\Components;

use Filament\Forms\Components\Field;

class InputSlider extends Field
{
    protected string $view = 'filament-slider::components.hidden-input';

    public static function make(string $name): static
    {
        $static = parent::make($name);

        $static->default(0);

        return $static;
    }
}
