@props(['label' => 'save', 'loadingAs' => null, 'type' => 'submit', 'scheme' => 'tertiary', 'id' => 'sendBtn', 'title' => null, 'target' => null])
@php
	FormX::set()->button(label: $label, id: $id, title: $title, type: $type, scheme: $scheme);
@endphp

<button
@if (!empty($target)) wire:target="{{ $target }}" @endif
wire:loading.attr="disabled" id='{{ $id }}' {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-' . $scheme . ' text-uppercase mx-2']) }} title="{{ $title }}">
	@empty($loadingAs)
		{{ $slot->isEmpty() ? (!empty($label) ? $label : 'Send') : $slot }}
	@else
		<span wire:loading.remove>{{ $slot->isEmpty() ? (!empty($label) ? $label : 'Send') : $slot }}</span>
		<span wire:loading>{{ $loadingAs }}</span>
	@endempty
</button>
