@props(['src' => '', 'alt' => '', 'class' => ''])
<td {{ $attributes }}>
	<img src="{{ $src }}" alt="{{ $alt }}" title="{{ $alt }}" {{ $attributes->merge(['class' => $class]) }} />
</td>
