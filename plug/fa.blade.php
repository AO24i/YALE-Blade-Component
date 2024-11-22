@props(['href' => null, 'src' => null, 'path' => null])

@php
	$isCSS = $href || ($path && StringX::endWith($path, '.css'));
	$isJS = $src || ($path && StringX::endWith($path, '.js'));

	if ($path) {
	    if ($isCSS) {
	        $href = $href ?: (StringX::endWith($path, '.css') ? $path : "{$path}.css");
	    } elseif ($isJS) {
	        $src = $src ?: (StringX::endWith($path, '.js') ? $path : "{$path}.js");
	    }
	}
@endphp

@if ($isCSS)
	<x-yale.plug.css href="css/{{ $href }}" tag="fontawesome" />
@elseif ($isJS)
	<x-yale.plug.js :src="$src" tag="fontawesome" />
@endif
