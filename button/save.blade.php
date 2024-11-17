@props(['label' => 'Save', 'moduleX' => '', 'id' => null])
@php
	if (!empty($moduleX)) {
	    $label .= ' ' . $moduleX;
	}
@endphp
<button wire:loading.attr="disabled" wire:target="save" id="{{ $id }}" type="submit" class="btn btn-block btn-tertiary mx-2">{{ $label }}</button>
