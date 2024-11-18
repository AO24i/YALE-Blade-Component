@props(['value'])

@session('status')
	<div class="mb-4 font-medium text-sm text-green-600">
		{{ $value }}
	</div>
@endsession
