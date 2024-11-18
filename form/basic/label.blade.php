@props(['value'])
@php
	if(!empty($value)){
		$value = ucwords($value);
	}
@endphp
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
	{{ $value ?? $slot }}
</label>
