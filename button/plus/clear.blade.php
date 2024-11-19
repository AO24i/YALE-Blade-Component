@props(['label' => 'clear', 'type' => 'reset', 'scheme' => 'gray', 'id' => null, 'title' => null, 'target' => null])
@php
	FormX::set()->button(label: $label, id: $id, title: $title, type: $type, scheme: $scheme);
@endphp

<button
@if (!empty($target)) wire:target="{{ $target }}" @endif
wire:loading.remove id='{{ $id }}' {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-' . $scheme . ' text-uppercase mx-2']) }} title="{{ $title }}">
	{{ $slot->isEmpty() ? (!empty($label) ? $label : 'Send') : $slot }}
</button>
