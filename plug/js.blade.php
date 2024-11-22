@props(['src', 'tag' => 'js', 'async' => false, 'defer' => false])
@php
	$attributes = collect();

	if ($async) {
	    $attributes->push('async');
	}

	if ($defer) {
	    $attributes->push('defer');
	}

	$attributeString = $attributes->implode(' ');
@endphp

<script {{ $attributeString }} src="{{ AssetX::href($src, $tag) }}"></script>
