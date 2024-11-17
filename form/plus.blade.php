@props(['submit', 'content'])

<form wire:submit="{{ $submit }}">

	{{ $content }}

	@if (isset($actions))
		<div class="mt-5 mb-4 d-flex justify-content-center align-items-middle">
			{{ $actions }}
		</div>
	@endif

</form>