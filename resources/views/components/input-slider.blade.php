@php
    $sliderId = "slider-" . Str::random(10);
    $startValue = $getState() ? [$getState()] : [0];
@endphp

<x-dynamic-component
:component="$getFieldWrapperView()"
:id="$getId()" :label="$getLabel()"
:label-sr-only="$isLabelHidden()"
:helper-text="$getHelperText()"
:hint="$getHint()"
:hint-icon="$getHintIcon()"
:required="$isRequired()"
:state-path="$getStatePath()"
style="margin-bottom:50px"

>
<div
style="display: none"
>
{{ $getChildComponentContainer() }}
</div>


        <div
            class="mb-[200px]"
            ax-load
            ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-slider-scripts', 'rupadana/filament-slider') }}"
            x-load-css="[@js(\Filament\Support\Facades\FilamentAsset::getStyleHref('filament-slider-styles', 'rupadana/filament-slider'))]"
            id="{{$sliderId}}"
            x-data="slider({
                element: '{{$sliderId}}',
                start: @js($getStart()),
                state: @js($getStates()),
                connect: @js($getConnect()),
                range: @js($getRange()),
                step: @js($getStep()),
                behaviour: @js($getBehaviour()),
                snap:@js($getSnap()),
                tooltips: @js($getTooltips()),
            })">

        </div>

</x-dynamic-component>
