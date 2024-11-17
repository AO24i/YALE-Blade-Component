@props(['autocomplete' => 'current-password'])

<div class="mt-4" x-data="{ showPassword: false }">
	<label class="flex items-center justify-between font-medium text-sm text-gray-700" for="password">
		Password
		<span @click="showPassword = !showPassword" class="text-end cursor-pointer text-gray-500 me-1">
			<span x-show="!showPassword">Show</span>
			<span x-show="showPassword">Hide</span>
		</span>
	</label>
	<input :type="showPassword ? 'text' : 'password'" id="password" name="password" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required="required" autocomplete="{{ $autocomplete }}">
</div>
