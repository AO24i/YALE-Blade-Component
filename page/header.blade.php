@props(['title' => null, 'tagline' => null])
@php
	$title = !empty($title) ? StringX::capitalize($title) : $title;
	$tagline = !empty($tagline) ? StringX::sentenceCase($tagline) : $tagline;
@endphp

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-end py-4">

	<div class="page-heading">
		@if (!empty($title))
			<h2 class="o-heading">{{ $title }}</h2>
		@endif
		@if (!empty($tagline))
			<span class="o-tagline text-secondary">{{ $tagline }}</span>
		@endif
	</div>

</div>
