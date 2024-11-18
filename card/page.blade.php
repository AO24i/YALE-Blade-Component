
<div class="row">
	<div {{ $attributes->merge(['class' => 'col-12 mb-4']) }}>
		<div class="card border-0 shadow mb-4" id="o-page">
			<div class="card-body">
				{{ $slot }}
			</div>
		</div>
	</div>
</div>
