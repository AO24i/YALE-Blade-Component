@props(['label' => 'save', 'id' => null, 'moduleX' => ''])
@php
	FormX::set()->button($label, $id, $moduleX);
@endphp

<button wire:loading.attr="disabled" wire:target="save" id="{{ $id }}" type="submit" class="btn btn-block btn-tertiary mx-2" title="{{ $label }}">{{ $label }}</button>
