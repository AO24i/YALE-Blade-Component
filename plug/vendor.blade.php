@props(['href' => null, 'src' => null, 'path' => null])
@php
	$isCSS = isset($href) || (isset($path) && StringX::endWith($path, '.css'));
	$isJS = isset($src) || (isset($path) && StringX::endWith($path, '.js'));

	if ($isCSS) {
	    if (isset($path)) {
	        $href = $path;
	    }
	    if (StringX::notEndWith($href, '.css')) {
	        $href .= '.css';
	    }
	} elseif ($isJS) {
	    if (isset($path)) {
	        $src = $path;
	    }
	    if (StringX::notEndWith($src, '.js')) {
	        $src .= '.js';
	    }
	}
@endphp
@if ($isCSS)
	<x-yale.plug.css href="{{ $href }}" tag="vendor" />
@elseif($isJS)
	<x-yale.plug.js src="{{ $src }}" tag="vendor" />
@endif
