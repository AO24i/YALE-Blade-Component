@props(['label' => 'Reset', 'moduleX' => ''])
@php
	if (!empty($moduleX)) {
	    $label .= ' ' . $moduleX;
	}
@endphp
<button wire:loading.attr="disabled" wire:target="save" onclick="jsHideError('actionBtn');" type="reset" class="btn btn-block btn-outline-gray-300 mx-2">{{ $label }}</button>
