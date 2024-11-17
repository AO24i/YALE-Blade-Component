@props(['label', 'type' => 'submit', 'scheme' => 'primary', 'id' => null, 'title' => null])
@php
	if ($type === 'submit') {
	    $type = in_array($label, ['reset', 'clear'], true) ? 'reset' : $type;
	}
	if ($type === 'reset') {
	    if (empty($label)) {
	        $label = 'clear';
	    }
	    $scheme = StringX::swap($scheme, 'primary', 'gray');
	}
	$scheme = $scheme === 'gray' ? 'gray-100' : $scheme;
	$scheme = $scheme === 'outline-gray' ? 'outline-gray-200' : $scheme;
	if (empty($id) && !empty($label) && $slot->isEmpty()) {
	    $id = $label;
	}
	if (!empty($title)) {
	    $title = ucwords($title);
	}
@endphp

<button id='{{ $id }}' {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-' . $scheme . ' text-uppercase mx-2']) }} title="{{ $title }}">
	{{ $slot->isEmpty() ? (!empty($label) ? $label : 'Send') : $slot }}
</button>
