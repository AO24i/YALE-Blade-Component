@props(['label' => 'reset', 'moduleX' => ''])
@php
	FormX::set()->button(label: $label, module: $moduleX);
@endphp

<button wire:loading.attr="disabled" wire:target="save" onclick="jsErrorHide('actionBtn');" type="reset" class="btn btn-block btn-outline-gray-300 mx-2">{{ $label }}</button>
