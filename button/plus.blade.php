@props(['label', 'type' => 'submit', 'scheme' => 'primary', 'id' => null, 'title' => null])
@php
	FormX::set()->button(label: $label, id: $id, title: $title, type: $type, scheme: $scheme);
@endphp

<button wire:loading.attr="disabled" id='{{ $id }}' {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-' . $scheme . ' text-uppercase mx-2']) }} title="{{ $title }}">
	@unless ($type === 'reset')
		<span wire:loading.remove>{{ $slot->isEmpty() ? (!empty($label) ? $label : 'Send') : $slot }}</span>
		<span wire:loading>Wait...</span>
	@else
		{{ $slot->isEmpty() ? (!empty($label) ? $label : 'Send') : $slot }}
	@endunless
</button>
