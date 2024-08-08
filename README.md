# Filament Slider

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rupadana/filament-slider.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-slider)
[![Total Downloads](https://img.shields.io/packagist/dt/rupadana/filament-slider.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-slider)



This component allows users to easily select a value or range of values by dragging a slider handle. It's ideal for settings where precise input is required, such as adjusting numerical values, controlling volume, or setting dates.

## Installation

You can install the package via composer:

```bash
composer require rupadana/filament-slider
```

## Usage

### Simple Input Slider

```php
InputSliderGroup::make()
->sliders([
    InputSlider::make('min')
])
->label('Limit')
```


### Multiple Input

```php
InputSliderGroup::make()
->sliders([
    InputSlider::make('min')
    InputSlider::make('max')
])
->label('Limit')
```

### Connect

```php
InputSliderGroup::make()
->sliders([
    InputSlider::make('min')
    InputSlider::make('max')
])
->connect([
    false,
    true,
    false
])
->label('Limit')
```

### Maximum & Minimum

```php
InputSliderGroup::make()
->sliders([
    InputSlider::make('min')
    InputSlider::make('max')
])
->connect([
    false,
    true,
    false
])
->max(100)
->min(0)
->label('Limit')
```


### Complete

```php
InputSliderGroup::make()
    ->sliders([
        InputSlider::make('min'),
        InputSlider::make('max')->default(50),
    ])
    ->connect([
        true,
        false,
        true
    ]) // array length must be sliders length + 1
    ->range([
        "min" => 30,
        "max" => 100
    ])
    ->step(10)
    ->behaviour([
        InputSliderBehaviour::DRAG,
        InputSliderBehaviour::TAP
    ])
    ->enableTooltips()
    ->label("Limit")
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Rupadana](https://github.com/rupadana)
- [All Contributors](../../contributors)
  
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
