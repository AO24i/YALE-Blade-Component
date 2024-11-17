@if ($errors->any())
	<div {{ $attributes->merge(['class' => 'alert-container']) }}>
		<div class="text-red-600 mt-4 alert alert-danger alert-dismissible fade show " role="alert">
			@if($errors->count() > 1)
			<strong>Oops! Something went wrong.</strong>
			<ul class="mt-3 list-disc list-inside text-sm">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@else
			<strong>Oops!</strong><br>
			{{ $errors->first() }}
			@endif
			<button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	</div>
@endif