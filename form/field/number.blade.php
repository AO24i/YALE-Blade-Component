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
    'step' => '1',
    'min' => '0',
    'max' => '',
])

<x-veo.form.input.field.text :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete type="number" step="{{ $step }}" min="{{ $min }}" max="{{ $max }}" {{ $attributes }} />
