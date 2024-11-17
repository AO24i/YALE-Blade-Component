@props(['label' => null, 'for' => null, 'css' => 'text-primary'])
@php
	$label = FormX::set()->label($label, $for);
@endphp

<label for="{{ $for }}" {{ $attributes->merge(['class' => $css]) }}>{{ $label }}</label>
