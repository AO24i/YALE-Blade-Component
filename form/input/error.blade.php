@props(['for', 'css' => ' o-error-inline'])

@if (!Session::has('successX'))
	@error($for)
		<span {{ $attributes->merge(['class' => $css]) }}>{{ $message }}</span>
	@enderror
@endif
