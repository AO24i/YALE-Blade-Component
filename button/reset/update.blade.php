@props(['label' => 'clear', 'id' => null, 'moduleX' => ''])
@php
	FormX::set()->button($label, $id, $moduleX);
@endphp

<button wire:loading.attr="disabled" wire:target="save" @click="$wire.edit('{{ $id }}')" onclick="jsHideError('actionBtn');" type="button" class="btn btn-block btn-outline-gray-300 mx-2">{{ $label }}</button>
