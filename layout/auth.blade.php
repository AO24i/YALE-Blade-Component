<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
	<div class="w-full sm:max-w-md mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
		<div class="flex items-center justify-center mb-6">
			@if (AssetX::isFile('logo/logo.png'))
				<img src="{{ AssetX::logo('logo.png') }}" alt="{{ EnvX::project('name') }}" title="{{ EnvX::firm('name') }}" id="logo" class="max-h-[120px] mb-4 w-auto cursor-pointer">
			@else
				<span class="font-bold text-2xl" title="{{ EnvX::firm('brand') }}">{{ EnvX::project('name') }}</span>
			@endif
		</div>
		<div class="mb-4">
			{{ $slot }}
		</div>
	</div>
</div>
