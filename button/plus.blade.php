@props(['label', 'type' => 'submit', 'scheme' => 'primary', 'id' => null, 'title' => null])
@php
	FormX::set()->button(label: $label, id: $id, title: $title, type: $type, scheme: $scheme);
@endphp

<button id='{{ $id }}' {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-' . $scheme . ' text-uppercase mx-2']) }} title="{{ $title }}">
	{{ $slot->isEmpty() ? (!empty($label) ? $label : 'Send') : $slot }}
</button>
