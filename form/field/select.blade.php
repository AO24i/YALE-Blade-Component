@props([
    'id' => null,
    'name' => null,
    'title' => true,
    'value' => '',
    'disable' => false,
    'obind' => true,
    'ochange' => false,
    'validateJS' => true,
    'btnID' => 'sendBtn',
    'css' => '',

    'optionLabel' => true,
    'optionRow' => [],
])

@php
	FormX::set()->tag(id: $id, name: $name, title: $title);
	$css = $errors->has($name) ? ' is-invalid' : '';

	$obind = FormX::set()->obind(obind: $obind, name: $name);
	$ochange = FormX::set()->ochange(ochange: $ochange, name: $name);
	$value = FormX::set()->value($value, 'select');
	$disable = FormX::set()->disable($disable);

	$attrID = FormX::set()->attribute(['id' => $id]);
	$attrName = FormX::set()->attribute(['name' => $name]);
	$attrTitle = FormX::set()->attribute(['title' => $title]);
	$wireBind = FormX::set()->attribute(['obind' => $obind]);
	$wireChange = FormX::set()->attribute(['ochange' => $ochange]);
	$validateJS = FormX::validateJS($id, $btnID, $validateJS);

	if ($optionLabel === true) {
	    $optionLabel = 'Select an option';
	}
@endphp

<select {{ $attributes->merge(['class' => 'form-select' . $css]) }} @focus="on{{ $id }} = true" @blur="on{{ $id }} = false" {!! $attrID !!} {!! $attrName !!} {!! $attrTitle !!} {!! $validateJS !!} {!! $disable !!} {!! $wireBind !!} {!! $wireChange !!}>
	@if (!empty($optionLabel))
		<option value="">{{ $optionLabel }}</option>
	@endif
	@if (!empty($optionRow))
		@foreach ($optionRow as $optionKey => $optionName)
			<option value="{{ $optionKey }}" {{ $value === $optionKey ? 'selected' : '' }}>{{ $optionName }}</option>
		@endforeach
	@endif
</select>
