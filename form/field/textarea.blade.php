@props([
    'id' => null,
    'name' => null,
    'title' => false,
    'value' => '',
    'disable' => false,
    'obind' => true,
    'ochange' => false,
    'validateJS' => true,
    'btnID' => 'sendBtn',
    'css' => '',

    'placeholder' => null,
    'textrows' => 5,
])

@php
	FormX::tag(id: $id, name: $name, placeholder: $placeholder, title: $title);
	$css = $errors->has($name) ? ' is-invalid' : '';

	$obind = FormX::obind(obind: $obind, name: $name);
	$ochange = FormX::ochange(ochange: $ochange, name: $name);
	$value = FormX::value($value, 'textarea');
	$disable = FormX::disable($disable);

	$attrID = FormX::attribute(['id' => $id]);
	$attrName = FormX::attribute(['name' => $name]);
	$attrTitle = FormX::attribute(['title' => $title]);
	$wireBind = FormX::attribute(['obind' => $obind]);
	$wireChange = FormX::attribute(['ochange' => $ochange]);
	$attrTextrows = FormX::attribute(['textrows' => $textrows]);
	$wirePlaceholder = FormX::placeholder($id, $placeholder);
	$validateJS = FormX::validateJS($id, $btnID, $validateJS);
@endphp

<textarea {{ $attributes->merge(['class' => 'form-control' . $css]) }} @focus="on{{ $id }} = true" @blur="on{{ $id }} = false" {!! $attrID !!} {!! $attrName !!} {!! $attrTitle !!} {!! $validateJS !!} {!! $disable !!} {!! $wireBind !!} {!! $wireChange !!} {!! $wirePlaceholder !!} {!! $attrTextrows !!}>{!! $value !!}</textarea>
