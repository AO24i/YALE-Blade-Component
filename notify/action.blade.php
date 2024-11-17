@props(['on', 'type' => 'success', 'audio' => false, 'css' => '', 'message' => null])
@php
	if ($type === 'success') {
	    $css = ' bg-success text-white';
	}
	if ($type === 'error') {
	    $css = ' text-danger';
	}
@endphp
<div x-data="{ shown: false, timeout: null }" x-init="@this.on('{{ $on }}', () => {
    clearTimeout(timeout);
    shown = true;

    // Play audio
    @if($audio)
    let audio = new Audio('/storage/audio/bell.mp3');
    audio.play();
    @endif

    timeout = setTimeout(() => { shown = false }, 2500);
})" x-show.transition.out.opacity.duration.2000ms="shown" x-transition:leave.opacity.duration.2000ms style="display: none;" {{ $attributes->merge(['class' => 'mt-4 p-2 text-sm' . $css]) }}>
	{{ $slot->isEmpty() ? (!empty($message) ? StringX::sentenceCase($message) : 'Action completed') : $slot }}
</div>
