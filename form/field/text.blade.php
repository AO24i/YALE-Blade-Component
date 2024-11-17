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

    'placeholder' => null,
    'ocomplete' => true,
    'type' => 'text',

    'focus' => false,
    'blur' => true,
    'onfocusblur' => true,
])

@php
	FormX::set()->tag(type: $type, id: $id, name: $name, placeholder: $placeholder, title: $title);
	$css = $errors->has($name) ? ' is-invalid' : '';
	$obind = FormX::set()->obind(obind: $obind, name: $name);
	$ochange = FormX::set()->ochange(ochange: $ochange, name: $name);
	$value = FormX::set()->value($value, 'text');
	$disable = FormX::set()->disable($disable);
	$ocomplete = FormX::set()->autocomplete($ocomplete);
	$attrID = FormX::set()->attribute(['id' => $id]);
	$attrName = FormX::set()->attribute(['name' => $name]);
	$attrTitle = FormX::set()->attribute(['title' => $title]);
	$wireBind = FormX::set()->attribute(['obind' => $obind]);
	$wireChange = FormX::set()->attribute(['ochange' => $ochange]);
	if ($focus === false && $blur === false) {
	    $onfocusblur = false;
	}
	$wirePlaceholder = FormX::set()->placeholder($id, $placeholder, $onfocusblur);
	$validateJS = FormX::validateJS($id, $btnID, $validateJS);
@endphp

<input {{ $attributes->merge(['class' => 'form-control' . $css]) }} @focus="on{{ $id }} = true" @blur="on{{ $id }} = false" {!! $attrID !!} {!! $attrName !!} {!! $attrTitle !!} {!! $validateJS !!} {!! $disable !!} {!! $wireBind !!} {!! $wireChange !!} {!! $wirePlaceholder !!} {!! $value !!} type="{{ $type }}" {!! $ocomplete !!}>
