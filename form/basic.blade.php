@props(['action' => 'action', 'method' => 'post'])

<form method="{{ $method }}" action="{{ RouteX::as($action) }}" {{ $attributes->isNotEmpty() ? $attributes : '' }}>
	@csrf

	{{ $slot }}

</form>
