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
	FormX::set()->tag(id: $id, name: $name, placeholder: $placeholder, title: $title);
	$css = $errors->has($name) ? ' is-invalid' : '';

	$obind = FormX::set()->obind(obind: $obind, name: $name);
	$ochange = FormX::set()->ochange(ochange: $ochange, name: $name);
	$value = FormX::set()->value($value, 'textarea');
	$disable = FormX::set()->disable($disable);

	$attrID = FormX::set()->attribute(['id' => $id]);
	$attrName = FormX::set()->attribute(['name' => $name]);
	$attrTitle = FormX::set()->attribute(['title' => $title]);
	$wireBind = FormX::set()->attribute(['obind' => $obind]);
	$wireChange = FormX::set()->attribute(['ochange' => $ochange]);
	$attrTextrows = FormX::set()->attribute(['textrows' => $textrows]);
	$wirePlaceholder = FormX::set()->placeholder($id, $placeholder);
	$validateJS = FormX::validateJS($id, $btnID, $validateJS);
@endphp

<textarea {{ $attributes->merge(['class' => 'form-control' . $css]) }} @focus="on{{ $id }} = true" @blur="on{{ $id }} = false" {!! $attrID !!} {!! $attrName !!} {!! $attrTitle !!} {!! $validateJS !!} {!! $disable !!} {!! $wireBind !!} {!! $wireChange !!} {!! $wirePlaceholder !!} {!! $attrTextrows !!}>{!! $value !!}</textarea>
