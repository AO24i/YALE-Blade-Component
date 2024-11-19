@props(['value' => 'Loading...', 'target' => null])

<span
@if(!empty($target)) wire:target="{{ $target }}" @endif
wire:loading class="text-primary fw-bold" {{ $attributes->isNotEmpty() ? $attributes : '' }}>
	<i class="fa-fw fa-solid fa-spinner fa-spin-pulse"></i>
	{{ $value }}
</span>
