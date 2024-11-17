@props(['autocomplete' => 'on'])

<div class="mt-4">
	<x-bluc.form.basic.label for="email" value="Email Address" />
	<x-bluc.form.basic.input id="email" class="block mt-1 w-full" type="email" name="email" :value="FormX::input()->value('email')" required autofocus autocomplete="{{ $autocomplete }}" />
</div>
