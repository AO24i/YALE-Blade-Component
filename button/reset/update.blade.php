@props(['id' => null, 'label' => 'Clear', 'moduleX' => ''])
@php
	if (!empty($moduleX)) {
	    $label .= ' ' . $moduleX;
	}
@endphp
<button wire:loading.attr="disabled" wire:target="save" @click="$wire.edit('{{$id}}')" onclick="jsHideError('actionBtn');" type="button" class="btn btn-block btn-outline-gray-300 mx-2">{{ $label }}</button>
