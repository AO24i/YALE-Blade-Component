@props(['class' => 'nocss', 'date' => '', 'tag' => 'nope'])
@php
	if ($tag === 'yeap') {
	    if (DateX::isFuture($date)) {
	        $class = 'future';
	    } elseif (DateX::isPast($date)) {
	        $class = 'past';
	    }
	}
	switch ($class) {
	    case 'past':
	        $style = 'text-danger';
	        break;
	    case 'future':
	        $style = 'text-success';
	        break;
	    default:
	        $style = '';
	        break;
	}
@endphp
<span class="{{ $style }}">{{ DateX::shortrow($date) }}</span>
