@props(['label' => 'upload', 'loadingAs' => 'Uploading...', 'target' => null, 'type' => 'submit', 'scheme' => 'tertiary', 'id' => null, 'title' => null])
@php
	FormX::set()->button(label: $label, id: $id, title: $title, type: $type, scheme: $scheme);
@endphp

<button id='{{ $id }}' {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-' . $scheme . ' text-uppercase mx-2']) }} title="{{ $title }}" wire:loading.class="opacity-50 cursor-not-allowed" wire:loading.attr="disabled" wire:target="{{ $target }}">
	<span wire:loading.remove wire:target="{{ $target }}">{{ $slot->isEmpty() ? (!empty($label) ? $label : 'Send') : $slot }}</span>
	<span wire:loading wire:target="{{ $target }}">{{ $loadingAs }}</span>
</button>
